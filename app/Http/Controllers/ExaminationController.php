<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\Examination;
use App\Models\Classroom;
use App\Models\AddexamSubject;
use App\Models\Student;
use App\Models\ExamResultModel;
use App\Models\assesment;
use App\Models\assessmentLists;

class ExaminationController extends Controller
{
    public function examminationDashboard(){
      try {
        return view('Examination.exaimation')->with(['data' => Auth::user()]);
      } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
      }
    }

    public function addExamination(){
      try {
        $class = Classroom::get();
        return view('Examination.add_exam')->with(['data' => Auth::user(), 'class' => $class]);
      } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
      }
    }



    public function addExaminationPapers(){
      try {
        $examinationNumber = request()->route('examinationNumber');
        return view('Examination.add_exam_paper')->with(['data' => Auth::user(), 'examinationNumber' => $examinationNumber]);
      } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
      }
    }


    public function manageExamination(){
        try {
             $Session = '2023-2024';
             $exams = Examination::where('Session', '=', $Session)->get();
             return view('Examination.exams_list')->with(['data' => Auth::user(), 'exams' => $exams]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
            
        }
    }


    public function createExamination(Request $request)
    {
        try {
            $class = Classroom::where('id', $request->classID)
             ->first();
            // Validation
            $validatedData = $request->validate([
                'examTitle' => 'required',
                'examCenter' => 'required', // Validate as numeric
                'startDate' => 'required', // Validate as numeric
                'endDate' => 'required',
                'classID' => 'required', // Validate as a date
                'Session' => 'required'
                
            ]);
            $randomString = bin2hex(random_bytes(8));
            $user = Auth::user();
            // Start a database transaction
            DB::beginTransaction();
    
            // Create a new payment record
            $examination = new Examination([
                'examTitle' => $validatedData['examTitle'],
                'examCenter' => $validatedData['examCenter'],
                'startDate' => $validatedData['startDate'],
                'endDate' => $validatedData['endDate'],
                'class' => $class->name,
                'classroom_id' => $validatedData['classID'],
                'examinationNumber' => $randomString,
                'Name' => $user->FirstName . $user->LastName,
                'Session' => $validatedData['Session']
            ]);
    
              $examination->save();

            return back()->with('success', 'Examination added successfully');
        } catch (\Exception $e) {
            // Roll back the database transaction in case of an error
            DB::rollback();
    
            return back()->with('fail', $e->getMessage());
        }
    }


    public function addExaminationSubjects(Request $request){
      try {
        $randomString = bin2hex(random_bytes(6));
        $validatedData = $request->validate([
            'subjectName' => 'required',
            'subjectType' => 'required', // Validate as numeric
            'maximumMark' => 'required', // Validate as numeric
            'paperCode' => 'required',
            'paperDate' => 'required',
            'startTime' => 'required', // Validate as a date
            'endTime' => 'required',
            'roomNumber' => 'required',
            'examinationNumber' => 'required',
            
        ]);

        DB::beginTransaction();

        $addSubject = new AddexamSubject([
            'subjectName' => $validatedData['subjectName'],
            'subjectType' => $validatedData['subjectType'],
            'maximumMark' => $validatedData['maximumMark'],
            'paperCode' => $validatedData['paperCode'],
            'paperDate' => $validatedData['paperDate'],
            'startTime' => $validatedData['startTime'],
            'endTime' => $validatedData['endTime'],
            'roomNumber' =>  $validatedData['roomNumber'],
            'examinationNumber' => $validatedData['examinationNumber'],
            'examSubjectID' =>  $randomString,
            'Session' => '2023-2024',
        ]);

        $addSubject->save();
        return back()->with('success', 'a new subject added successfully');

      } catch (\Exception $e) {
        DB::rollback();
        return back()->with('fail', $e->getMessage());
      }
    }


    public function viewExamTimeTable(Request $request){
      try {
        $user = Auth::user();
         $examinationNumber = $request->examinationNumber;
         $exam = Examination::where('examinationNumber', '=', $examinationNumber )->first();
         $subject = AddexamSubject::where('examinationNumber', '=', $examinationNumber)->get();
       
         $data = [
          'exam' => $exam,
          'subjects' => $subject,
          'user' => $user
         ];
  
         return response()->json($data);

      } catch(\Exception $e) {
        return response()->json($e->getMessage());
      }
  }

      public function ExamResultPage(){
        try {
            $Session = '2023-2024';
            $exams = Examination::where('Session', '=', $Session)->get();
            return view('Examination.exams_result')->with(['data' => Auth::user(), 'exams' => $exams]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
            //\Log::error($e);
        }
    }


    public function resultEntryFormPage(){
      try {
        $examinationNumber = request()->route('examinationNumber');
        $subjects = AddexamSubject::where('examinationNumber', '=', $examinationNumber)->get();
        $exam = Examination::where('examinationNumber', '=', $examinationNumber)->first();
        $classroom_id = $exam->classroom_id;
        $students = Student::where('classroom_id', '=', $classroom_id)->get();

        return view('Examination.add_exams_results')->with(['data' => Auth::user(), 'exam' => $exam, 'subjects' => $subjects, 'students' => $students ]);
      } catch (\Exception $e) {
        //throw $th;
        return back()->with('fail', $e->getMessage());
        //\Log::error($e->getMessage());
      }
    }

    public function postExamResult(Request $request){
      //dd($request->all());
       try {
            $validatedData = $request->validate([
              'studentName' => 'required',
              'indexNumber' => 'required',
              'class' => 'required',
              'classroom_id' => 'required',
              'subjectName' => 'required',
              'subjectType' => 'required', // Validate as numeric
              'maximumMark' => 'required', // Validate as numeric
              'paperCode' => 'required',
              'markObtained' => 'required',
              'remark' => 'required',
              'teacherRemark' => 'required',
              'schoolRemark' => 'required',
               'examSubjectID' => 'required',
              'examinationNumber' => 'required',
              'Session' => 'required',
          ]);

          DB::beginTransaction();
          $examresult = new ExamResultModel([
            'studentName' => $validatedData['studentName'],
            'indexNumber' => $validatedData['indexNumber'],
            'class' => $validatedData['class'],
            'classroom_id' => $validatedData['classroom_id'],
            'subjectName' => $validatedData['subjectName'],
            'subjectType' => $validatedData['subjectType'],
            'maximumMark' => $validatedData['maximumMark'],
            'paperCode' => $validatedData['paperCode'],
            'markObtained' =>  $validatedData['markObtained'],
            'remark' => $validatedData['remark'],
            'teacherRemark' =>  $validatedData['teacherRemark'],
            'schoolRemark' => $validatedData['schoolRemark'],
            'examSubjectID' =>  $validatedData['examSubjectID'],
            'examinationNumber' => $validatedData['examinationNumber'],
            'Session' => $validatedData['Session']
        ]);

        $examresult->save();
        return back()->with('success', 'Result Added successfully');
       } catch (\Exception $e) {
        DB::rollback();
          return back()->with('fail', $e->getMessage());
       }
    }


    public function fetchStudentDetail(Request $request){
      try {
         $IndexNumber = trim($request->IndexNumber);

         $student = Student::where('IndexNumber', '=', $IndexNumber)->first();

         return response()->json($student);

      } catch (\Exception $e) {
         return response()->json($e->message());
       // \Log::error($e->getMessage());
      }
    }

    public function fetchSubjectPaperDetail(Request $request){
      try {
         $examSubjectID = trim($request->examSubjectID);
         $examinationNumber = trim($request->examinationNumber);

         $subject = AddexamSubject::where('examSubjectID', '=', $examSubjectID)
         ->where('examinationNumber', '=', $examinationNumber)
         ->first();

         return response()->json($subject);

      } catch (\Exception $e) {
        return response()->json($e->message());
        //\Log::error($e->getMessage());
      }
    }

    public function getEnteredResultPage(){
      try {
          $Session = '2023-2024';
          $exams = Examination::where('Session', '=', $Session)->get();
          return view('Examination.view-exam-result')->with(['data' => Auth::user(), 'exams' => $exams]);
      } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
          //\Log::error($e);
      }
    }

    public function getStudentResult(){
      try {
        $examinationNumber = request()->route('examinationNumber');
        $exam = Examination::where('examinationNumber', '=', $examinationNumber)->first();
        $classroom_id = $exam->classroom_id;
        $students = Student::where('classroom_id', '=', $classroom_id)->get();

        return view('Examination.view-student-result-one')->with(['data' => Auth::user(), 'exam' => $exam, 'students' => $students ]);
      } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
          //\Log::error($e);
      }
    }


    public function getClassResult(){
      try {
          $examinationNumber = request()->route('examinationNumber');
          $subjects = AddexamSubject::where('examinationNumber', '=', $examinationNumber)->get();
          $exam = Examination::where('examinationNumber', '=', $examinationNumber)->first();
          return view('Examination.view-class-result-one')->with(['data' => Auth::user(), 'exam' => $exam, 'subjects' => $subjects]);
      } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
          //\Log::error($e);
      }
    }

   


    public function fetchTheClassResult(Request $request){
      try {
        $user = Auth::user();
         $examSubjectID = trim($request->examSubjectID);
         $examinationNumber = trim($request->examinationNumber);

         $subject = AddexamSubject::where('examSubjectID', '=', $examSubjectID)->first();

         $results = ExamResultModel::where('examSubjectID', '=', $examSubjectID)
         ->where('examinationNumber', '=', $examinationNumber)
         ->get();
      
         $data = [
          'subject' => $subject,
          'results' => $results
         ];
  
         return response()->json($data);

      } catch(\Exception $e) {
        return response()->json($e->getMessage());
      }
  }



  public function fetchStudentResult(Request $request){
    try {
      $user = Auth::user();
       $indexNumber = trim($request->indexNumber);
       $examinationNumber = trim($request->examinationNumber);

       $student = Student::where('IndexNumber', '=', $indexNumber )->first();

       $results = ExamResultModel::where('indexNumber', '=', $indexNumber)
       ->where('examinationNumber', '=', $examinationNumber)
       ->get();
    
       $data = [
        'subject' => $student,
        'results' => $results
       ];

       return response()->json($data);

    } catch(\Exception $e) {
      return response()->json($e->getMessage());
    }
  }


 public function RemoveResultFromPage(){
      try {
          $id= request()->route('id');
          $subjects = ExamResultModel::where('id', $id)->delete();;
          return back()->with('success', 'Result Remove Successfully');
      } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
          //\Log::error($e);
      }
    }



  public function createAssessmentPage(){
    try {
      $Session = '2023-2024';
      $exams = Examination::where('Session', '=', $Session)->get();
      return view('Examination.create-assessment-page')->with(['data' => Auth::user(), 'exams' => $exams]);
    } catch(\Exception $e) {
      return back()->with('fail', $e->getMessage());
    }
  }


  public function fetchExaminationDetails(Request $request){
    try {
        $examinationNumber = trim($request->examinationNumber);
         $exam = Examination::where('examinationNumber', '=', $examinationNumber)->first();
         $classID = trim($exam->classroom_id);
         $students = Student::where('classroom_id', '=', $classID)->get();
         $class = Classroom::where('id', $classID)->first();

         return response()->json([
          'success' => true,
          'exam' => $exam,
          'students' => $students,
          'class' => $class
      ]);

    } catch (\Exception $e) {
       return response()->json($e->message());
     // \Log::error($e->getMessage());
    }
  }


  public function createAssessment(Request $request){
    try {
      $validatedData = $request->validate([
        'session' => 'required',
        'term' => 'required',
        'year' => 'required',
        'startDate' => 'nullable',
        'endDate' => 'nullable',
        'nextTermBegins' => 'nullable',
        'position' => 'nullable',
        'attendance' => 'required|numeric',
        'conduct' => 'nullable', 
        'promotedTo' => 'nullable', 
        'attitude' => 'nullable',
        'interest' => 'nullable',
        'PTAFees' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        'printingCost' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        'sportAndGameFees' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        'nextTermFees' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        'examinationNumber' => 'required',
        'class' => 'required',
        'IndexNumber' => 'required'
    ]);

    DB::beginTransaction();
    $randomString = bin2hex(random_bytes(8));
    $examresult = new assesment([
      'session' => $validatedData['session'],
      'term' => $validatedData['term'],
      'year' => $validatedData['year'],
      'position' => $validatedData['position'] ?? '',
      'nextTermBegins' => $validatedData['nextTermBegins'] ?? '',
      'attendance' => $validatedData['attendance'],
      'conduct' => $validatedData['conduct'] ?? '',
      'promotedTo' => $validatedData['promotedTo'] ?? '',
      'attitude' => $validatedData['attitude'] ?? '',
      'interest' =>  $validatedData['interest'] ?? '',
      'PTAFees' => $validatedData['PTAFees'],
      'printingCost' =>  $validatedData['printingCost'],
      'sportAndGameFees' => $validatedData['sportAndGameFees'],
      'nextTermFees' =>  $validatedData['nextTermFees'],
      'examinationNumber' => $validatedData['examinationNumber'],
      'class' => $validatedData['class'],
      'IndexNumber' => $validatedData['IndexNumber'],
      'assesmentNumber' => $randomString,
      ]);

      $examresult->save();
      return back()->with('success', 'Assesment Created successfully');

    } catch(\Exception $e) {
      DB::rollback();
        return back()->with('fail', $e->getMessage());
      //return response()->json($request);
    }
  }


  public function enterAssessmentPage(){
    try {
      $classes = Classroom::get();
      return view('Examination.enter-assesment-page')->with(['data' => Auth::user(), 'classes' => $classes]);
    } catch(\Exception $e) {
      return back()->with('fail', $e->getMessage());
    }
  }


  public function AssesmentClassList(Request $request){
    try {
        $classID = trim($request->classID);
         $students = Student::where('classroom_id', '=', $classID)->get();

         return response()->json([
          'success' => true,
          'students' => $students,
      ]);

    } catch (\Exception $e) {
      return response()->json($e->message());
     // \Log::error($e->getMessage());
    }
  }


  public function fetchStudentCreatedAssessment(Request $request){
    try {
        $IndexNumber = trim($request->IndexNumber);
        $assessments = assesment::where('IndexNumber', '=', $IndexNumber)->get();
        $student = Student::where('IndexNumber', '=', $IndexNumber)->first();
        
        $examDetails = [];
        
        foreach ($assessments as $assessment) {
            $examinationNumber = $assessment->examinationNumber;
            
            // Assuming you have an Exam model and exams table
            $exam = Examination::where('examinationNumber', $examinationNumber)->first();
            
            if ($exam) {
               $examList = ['Name' => "$student->FirstName $student->LastName", 'IndexNumber' => $student->IndexNumber, 'examTitle' =>$exam->examTitle, 'session' => $assessment->session, 'year' => $assessment->year, 'class' => $assessment->class, 'assesmentNumber' => $assessment->assesmentNumber, 'examinationNumber'=>$assessment->examinationNumber];
               array_push($examDetails, $examList);
            }
        }

        return response()->json([
            'success' => true,
            'assessments' => $examDetails,
        ]);
    } catch (\Exception $e) {
        return response()->json($e->getMessage(), 500);
    }
}


public function enterAssessmentForm(){
  try {
    $examinationNumber = request()->route('examinationNumber');
    $assesmentNumber = request()->route('assesmentNumber');
    $subjects = AddexamSubject::where('examinationNumber', '=', $examinationNumber)->get();
    $assessment = assesment::where('assesmentNumber', '=', $assesmentNumber)->first();
    return view('Examination.enter-assessment')->with(['data' => Auth::user(), 'subjects' => $subjects, 'assessment' => $assessment]);
  } catch (\Exception $e) {
    return back()->with('fail', $e->getMessage());
  }
}

public function studentExamResult(Request $request){
  try {
    $subjectID = trim($request->subjectID);
    $examResult = ExamResultModel::where('examSubjectID', '=', $subjectID)->first();
    return response()->json([
      'success' => true,
      'assessments' => $examResult,
  ]);
  } catch (\Exception $e) {
    return response()->json($e->getMessage(), 500);
  }
}



  public function assessmentCoursesListing(Request $request)
{
    try {
        $validatedData = $request->validate([
          'subjectTitle' => 'required',
          'classScore' => 'required',
          'examScore' => 'required',
          'seventyPercent' => 'required',
          'Total' => 'required',
          'position' => 'nullable',
          'remark' => 'nullable',
          'examinationNumber' => 'required',
          'assesmentNumber' => 'required',
          'IndexNumber' => 'required',
          'session' => 'required',
        ]);

        DB::beginTransaction();
        $examination = new assessmentLists([
            'subjectTitle' => $validatedData['subjectTitle'],
            'classScore' => $validatedData['classScore'],
            'examScore' => $validatedData['examScore'],
            'seventyPercent' => $validatedData['seventyPercent'],
            'Total' => $validatedData['Total'],
            'position' => $validatedData['position'] ?? '',
            'remark' => $validatedData['remark'] ?? '',
            'session' => $validatedData['session'],
            'examinationNumber' => $validatedData['examinationNumber'],
            'assesmentNumber' => $validatedData['assesmentNumber'],
            'IndexNumber' => $validatedData['IndexNumber'],
        ]);
        $examination->save();

        DB::commit();

        return back()->with('success', 'Assessment result added successfully');
    } catch (\Exception $e) {
        DB::rollback();
        return back()->with('fail', $e->getMessage());
    }
 }


public function examminationAssessment(){
  try {
    $classes = Classroom::get();
    return view('Examination.view-asssesment-page')->with(['data' => Auth::user(), 'classes' => $classes]);
  } catch(\Exception $e) {
    return back()->with('fail', $e->getMessage());
  }
}


public function fetchStudentAssesment(Request $request){
  try {
    $IndexNumber = trim(request()->route('IndexNumber'));
    $assesmentNumber = trim(request()->route('assesmentNumber'));
    $assessment = assesment::where('IndexNumber', '=', $IndexNumber)->where('assesmentNumber', '=', $assesmentNumber)->first();
    $assessmentList = assessmentLists::where('IndexNumber', '=', $IndexNumber)->where('assesmentNumber', '=', $assesmentNumber)->get();
    $Student = Student::where('IndexNumber', '=', $IndexNumber)->first();
    return view('Examination.view-assesment')->with(['data' => Auth::user(), 'assessment' => $assessment, 'assessmentList' => $assessmentList, 'Student' => $Student ]);
  } catch (\Exception $e) {
    return back()->with('fail', $e->getMessage());
  }
}


}



