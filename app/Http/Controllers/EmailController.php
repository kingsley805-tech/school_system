<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


use App\Models\Classroom;
use App\Models\Myparent;
use App\Models\Student;


class EmailController extends Controller
{

    public function sendEmailPage(){
        try {
           $classes = Classroom::get();
           return view('School.sendEmails')->with(['data' => Auth::user(), 'classes' => $classes]);
        } catch (\Exception $e) {
           return back()->with('fail', $e->getMessage());
        }
       }

       
    public function sendEmail(Request $request){
        try {
            $txt = $request->messageBody;
            $subject = $request->subject;
            $studentlist = $request->studentlist;
            $headerImage = $request->headerImage;

            $emailArray = [];

            foreach ($studentlist as $value) {
                $IndexNumber  = $value;
                $studentData = Student::where('IndexNumber', '=', $IndexNumber)->first();
                $StudentEmail = $studentData->StudentEmail;
        
                array_push($emailArray, $StudentEmail);
            
            }

            $recipients = $emailArray;
        // Your logic to fetch an order
            $data = ['subject' => $subject, 'headerImage' => $headerImage, 'body'=>$txt];
            // Send the email using the Mailable class
            $respond = Mail::to($recipients)->send(new sendMail($data));

            return $respond;
            return response()->json([
                'success' => true,
                'message' => $respond
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }


    public function sendEmailByClass(Request $request){
        try {
            $txt = $request->messageBody;
            $subject = $request->subject;
            $className = $request->className;
            $studentlist = $request->studentlist;
            $headerImage = $request->headerImage;

            $emailArray = [];

            $studentlist = Student::where('classroom_id', '=', $className)->get();

            foreach ($studentlist as $value) {
                $StudentEmail  = $value->StudentEmail;;
                array_push($emailArray, $StudentEmail);
            }

            $recipients = $emailArray;
        // Your logic to fetch an order
            $data = ['subject' => $subject, 'headerImage' => $headerImage, 'body'=>$txt];
            // Send the email using the Mailable class
            $respond = Mail::to($recipients)->send(new sendMail($data));

            return response()->json([
                'success' => true,
                'message' => $respond
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
