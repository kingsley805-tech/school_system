<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Session;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\Student;
use App\Models\Myparent;
use App\Models\Classroom;
use App\Models\CreateLoginModel;



class createLoginController extends Controller
{
    public function createLoginPage(){
        try {
            $classes = Classroom::get();
            return view('CreateLogins.loginpage')->with(['data' => Auth::user(), 'classes' => $classes]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
     }

     public function fetchStudentInfo(Request $request){
        try {
            $IndexNumber = trim($request->IndexNumber);
             $student = Student::where('IndexNumber', '=', $IndexNumber)->first();
             $parentID = $student->myparent_id;
             $class  = $student->classroom_id;
             $myParent = Myparent::where('id', '=', $parentID)->first();
            $myClass = Classroom::where('id', '=', $class)->first();

             return response()->json([
              'success' => true,
              'Student' => $student,
              'Parents' => $myParent,
              'class' => $myClass
          ]);
    
        } catch (\Exception $e) {
            return response()->json($e->message());
         // \Log::error($e->getMessage());
        }
     }

     public function createLoginForm(){
        try {
          $IndexNumber = request()->route('IndexNumber');
          $Student = Student::where('IndexNumber', '=', $IndexNumber )->first();
          return view('CreateLogins.student-login-form')->with(['data' => Auth::user(), 'Student' => $Student]);
        } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
        }
      }

      public function createParentLoginForm(){
        try {
          $IndexNumber = request()->route('IndexNumber');
          $Student = Student::where('IndexNumber', '=', $IndexNumber )->first();
          return view('CreateLogins.student-login-form')->with(['data' => Auth::user(), 'Student' => $Student]);
        } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
        }
      }


      public function createStudentLogin(Request $request)
      {
          try {
              $validatedData = $request->validate([
                  'Name' => 'required',
                  'IndexNumber' => 'required', 
                  'userName' => 'required',
                  'role' => 'required',
                  'password' => 'required',
              ]);
      
              // Start a database transaction
              DB::beginTransaction();
      
              // Create a new payment record
              $loginDetail = new CreateLoginModel([
                  'Name' => $validatedData['Name'],
                  'IndexNumber' => $validatedData['IndexNumber'],
                  'userName' => $validatedData['userName'],
                  'role' => $validatedData['role'],
                  'password' => Hash::make($validatedData['password']),
              ]);
      
              $loginDetail->save();
      
              // Commit the database transaction
              DB::commit();
      
              return back()->with('success', 'Login created successfully');
          } catch (\Exception $e) {
              // Roll back the database transaction in case of an error
              DB::rollback();
      
              return back()->with('fail', $e->getMessage());
          }
      }
  


}
