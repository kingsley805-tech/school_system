<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\LiveClassModel;


class LiveClassController extends Controller
{
    public function createLiveClassPage(){
        try {
            $classes = Classroom::get();
            return view('LiveClass.create-live-class')->with(['data' => Auth::user(), 'class' => $classes]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }

    public function createMeetingPost(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'classID' => 'required',
                'platform' => 'required', 
                'meetingLink' => 'required|url', // Validates that it's a URL
                'meetingTopic' => 'required',
                'meetingCode' => 'nullable', // Allows the field to be either present or null
                'meetingPassword' => 'nullable',
                'meetingDate' => 'required|date', // Validates that it's a date
                'meetingTime' => 'required', 
            ]);
            
            
            $firstName = Auth::user()->FirstName;
            $lastName = Auth::user()->FirstName;
            $Email = Auth::user()->Email;

            $ClassID = $validatedData['classID'];
            $class = Classroom::where('id', '=', $ClassID)->first();
            $className = $class->name ?? '';

            // Start a database transaction
            DB::beginTransaction();
    
            // Create a new payment record
            $liveMeeting = new LiveClassModel([
                'ClassID' => $validatedData['classID'],
                'platform' => $validatedData['platform'],
                'meetingLink' => $validatedData['meetingLink'],
                'meetingTopic' => $validatedData['meetingTopic'],
                'meetingCode' => $validatedData['meetingCode'],
                'meetingPassword' => $validatedData['meetingPassword'],
                'meetingTime' => $validatedData['meetingTime'],
                'meetingDate' => $validatedData['meetingDate'],
                'creator' => "$firstName $lastName",
                'Email' => $Email,
                'className' => $className

            ]);
    
            $liveMeeting->save();

            return back()->with('success', 'Live meeting created and schedule successfully');
        } catch (\Exception $e) {
            // Roll back the database transaction in case of an error
            DB::rollback();
            if ($e instanceof \Illuminate\Validation\ValidationException) {
                return back()->withErrors($e->validator->getMessageBag()->all());
            }
        
            return back()->with('fail', $e->getMessage());
        }
    }

        public function fetchMeetingsPage(){
            try {
                $classes = Classroom::get();
                return view('LiveClass.fetch-meetings')->with(['data' => Auth::user(), 'class' => $classes]);
            } catch (\Exception $e) {
                return back()->with('fail', $e->getMessage());
            }
        }


        public function LiveMeetingList(){
            try {
                 $id = request()->route('id');
                 $liveMeetings = LiveClassModel::where('ClassID', $id)
                    ->orderBy('id', 'desc')
                    ->get();
    
                 $class = Classroom::where('id', '=', $id)->first();
                 $className = $class->name ?? '';
                return view('LiveClass.live-class-list')->with(['data' => Auth::user(), 'liveMeetings' => $liveMeetings, 'class' => $className]);
            } catch (\Exception $e) {
                return back()->with('fail', $e->getMessage());
            }
        }

        public function deleteMeeting(){
            try {
                $id = request()->route('id');
                LiveClassModel::where('id', $id)->delete();
                return back()->with('success', 'Meetimg deleted successfully');
            } catch (\Exception $e) {
                return back()->with('fail', $e->getMessage());
            }
         }
}
