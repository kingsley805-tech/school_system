<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\Classroom;
use App\Models\Student;

use App\Models\AttendanceModel;
use App\Models\CheckAttendanceModel;


class AttendanceController extends Controller
{
    public function takeAttendanceMainPage(){
        try {
            $classes = Classroom::get();
            return view('Attendance.take-attendance-page')->with(['data' => Auth::user(), 'class' => $classes]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }

    public function takeAttendanceForm(){
        try {
             $id = request()->route('id');
             $class = Classroom::where('id', '=', $id)->first();
             $className = $class->name ?? '';
             $students = Student::where('classroom_id', '=', $id)->get();
            return view('Attendance.take-attendance-form')->with(['data' => Auth::user(), 'students' => $students, 'class' => $className, 'classID' => $id]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }


    public function postAttendance(Request $request){
        $dataArray = json_decode($request->dataArray);
      try {
        $firstName = Auth::user()->FirstName;
        $lastName = Auth::user()->FirstName;
         $Month = $request->Month;
         $stringDate = $request->stringDate;
         $WeeK = $request->WeeK;
         $Day = $request->Day;
         $classID = $request->classID;
         $session = '2023-2024';
         

         foreach ($dataArray as $data) {
            DB::beginTransaction();
              // Create a new payment record
              $savePost = new AttendanceModel([
                  'student' => $data->student,
                  'IndexNumber' => $data->IndexNumber, 
                  'className' => $data->className,
                  'valNumber' => $data->valNumber,
                  'classID' => $data->classID,
                  'Month' => $Month,
                  'stringDate' => $stringDate,
                  'WeeK' => $WeeK,
                  'Day' => $Day,
                  'session' => $session
              ]);
      
              $savePost->save();
      
              // Commit the database transaction
              DB::commit();
         }

         $savePosttwo = new CheckAttendanceModel([
            'stringDate' => $stringDate,
            'classID' => $classID, 
            'enteredBY' => "$firstName $lastName",
            'session' => $session
        ]);

        $savePosttwo->save();

        return response()->json([
            'success' => true,
            'message' => "Item are saved"
        ]);

      } catch (\Exception $e) {
        // Roll back the database transaction in case of an error
          DB::rollback();
          return response()->json([
            'error' => true,
            'message' => 'An error occurred. Please try again later.',
            'details' => $e->getMessage(),
             'test' => $dataArray
        ]);
      }
    }

    public function checkAttendanceMainPage(){
        try {
            $classes = Classroom::get();
            return view('Attendance.check-attendance-page')->with(['data' => Auth::user(), 'class' => $classes]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }


    public function checkattendanceForm(){
        try {
             $id = request()->route('id');
             $class = Classroom::where('id', '=', $id)->first();
             $className = $class->name ?? '';
             $students = Student::where('classroom_id', '=', $id)->get();
             $attendanceArray = [];

              if(count($students) == 0){
                return back()->with('fail', "There is no student in this $className ");
              }

             foreach ($students as $data) {
                $IndexNumber  = $data->IndexNumber;
                $presenceNumber = AttendanceModel::where('IndexNumber', '=', $IndexNumber)->where('valNumber', '=', 1)->count();
                $absenceNumber = AttendanceModel::where('IndexNumber', '=', $IndexNumber)->where('valNumber', '=', 0)->count();
                $totalAttendance = CheckAttendanceModel::where('classID', '=', $id)->count();

                $attendanceData = (object)["Student" => "$data->FirstName $data->LastName", "IndexNumber" => $data->IndexNumber, "class" => $className, "presenceNumber" => $presenceNumber, 'absenceNumber' => $absenceNumber, "totalAttendance" => $totalAttendance];

                array_push($attendanceArray , $attendanceData);
             }
            return view('Attendance.attendance-list')->with(['data' => Auth::user(), 'students' => $attendanceArray, 'class' => $className, 'classID' => $id]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }


    public function StudentAttendanceList(){
        try {
             $IndexNumber = request()->route('IndexNumber');
             $attendance = AttendanceModel::where('IndexNumber', $IndexNumber)
                ->orderBy('id', 'desc')
                ->get();

             $student = Student::where('IndexNumber', '=', $IndexNumber)->first();
             $clasID = $student->classroom_id ?? '';
             $class = Classroom::where('id', '=', $clasID)->first();
             $className = $class->name ?? '';
            return view('Attendance.student-attendance-list')->with(['data' => Auth::user(), 'attendance' => $attendance, 'class' => $className]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }

 }
