<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\Classroom;
use App\Models\Student;

class PromotionalController extends Controller
{
    public function promotionPage(){
        try {
            $classes = Classroom::get();
            return view('Promotion.promotional-page')->with(['data' => Auth::user(), 'class' => $classes]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }

    public function promoteForm(){
        try {
             $id = request()->route('id');
             $class = Classroom::where('id', '=', $id)->first();
             $className = $class->name ?? '';
             $students = Student::where('classroom_id', '=', $id)->get();
             $classes = Classroom::get();
            return view('Promotion.promotion-form')->with(['data' => Auth::user(), 'students' => $students, 'class' => $className, 'classID' => $id, 'classes' => $classes]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }

    public function promotionPost(Request $request){

        $dataArray = json_decode($request->dataArray);
      try {

         $classID = trim($request->classID);

         foreach ($dataArray as $data) {
            $IndexNumber = $data->IndexNumber;
            Student::where('IndexNumber', $IndexNumber)->update(['classroom_id' => $classID,]);
         }

        return response()->json([
            'success' => true,
            'message' => "Promotion Done Successfully"
        ]);

      } catch (\Exception $e) {
        // Roll back the database transaction in case of an error
          return response()->json([
            'error' => true,
            'message' => 'An error occurred. Please try again later.',
            'details' => $e->getMessage(),
             'test' => $dataArray
        ]);
      }
    }
}
