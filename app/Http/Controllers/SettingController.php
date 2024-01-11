<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\User;



class SettingController extends Controller
{
    public function createUserPage(){
        try {
          return view('Settings.create-users')->with(['data' => Auth::user()]);
        } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
        }
      }


      public function createUserPost(Request $request)
      {
          try {
              // Validati
              $validatedData = $request->validate([
                'Email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'School'=>'required',
                'FirstName'=>'required',
                'LastName'=>'required',
                'Telephone'=>'required',
                'usertype'=>'required',
                'password'=>'required|min:6|confirmed',
                'password_confirmation'=>'required' 
              ]);
             
        
              DB::beginTransaction();
      
              // Create a new payment record
              $User = new User([
                  'Email' => $validatedData['Email'],
                  'School'=> $validatedData['School'],
                  'FirstName'=> $validatedData['FirstName'],
                  'LastName'=> $validatedData['LastName'],
                  'Telephone'=> $validatedData['Telephone'],
                  'usertype'=> $validatedData['usertype'],
                  'password'=> Hash::make($validatedData['password']),
                  'Sch_ID' => "2500"
                
              ]);
              
      
                $User->save();
              return back()->with('success', 'User Created Successfully');
          } catch (\Exception $e) {
              // Roll back the database transaction in case of an error
              DB::rollback();
              if ($e instanceof \Illuminate\Validation\ValidationException) {
                return back()->withErrors($e->validator->getMessageBag()->all());
            }
      
              return back()->with('fail', $e->getMessage());
          }
      }
}
