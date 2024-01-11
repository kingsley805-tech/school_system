<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;


class CustomAuthController extends Controller
{
    public function loginPage() {
        return view('index');
    }

    public function registerPage() {
        return view('register');
    }


    public function registerUser(Request $request){
        $request->validate([
          'School'=>'required',
          'FirstName'=>'required',
          'LastName'=>'required',
          'Email'=>'required|email|unique:users',
          'Telephone'=>'required',
          'usertype'=>'required',
          'password'=>'required|min:6|max:12|confirmed',
          'password_confirmation'=>'required|'
        ]);
 
        $user = new User();
        $user->School = $request->School;
        $user->FirstName = $request->FirstName;
        $user->LastName = $request->LastName;
        $user->Email = $request->Email;
        $user->Telephone = $request->Telephone;
        $user->usertype = $request->usertype;
        $user->password = Hash::make($request->password);
        $user->Sch_ID = time();
        $user->UserID = time();

        $res = $user->save();
        if($res){
            return back()->with('success', 'You have registered successfull');
        }else{
            return back()->with('fail', 'something bad occurred');
        }
     }


    public function loginUser(Request $request){
        $request->validate([
            'Email'=>'required|email',
            'password'=>'required|min:6|max:12|'
        ]);

        $user = User::Where('Email', '=', $request->Email)->first();
        if($user){
          if(Hash::check($request->password, $user->password)){
          $request->Session()->put('UserID', $user->UserID);
          return redirect('admin-dashboard');
          }else{
            return back()->with('fail', 'Password do not match');
          };
        }else{
            return back()->with('fail', 'Email is not registered');
        };
    }


    public function adminDashboard(){
        $data = array();
        if(Session::has('UserID')){
            $data = User::Where('UserID', '=', Session::get('UserID'))->first();
        };
        return view('Admin.dashboard', compact('data'));
    }


    public function logOut(){
        if(Session::has('UserID')){
            Session::pull('UserID');
            return redirect('/');
        };
    }


     
}
