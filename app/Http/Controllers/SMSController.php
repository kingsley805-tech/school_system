<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

use App\Models\Classroom;
use App\Models\Myparent;
use App\Models\Student;

class SMSController extends Controller
{

    public function sendSMSPage(){
     try {
        $classes = Classroom::get();
        return view('School.sendSms')->with(['data' => Auth::user(), 'classes' => $classes]);
     } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
     }
    }


    public function sendSMS(Request $request)
    {
        $txt = $request->messageBody;
        $studentlist = $request->studentlist;
        $telephoneArray = [];

        foreach ($studentlist as $value) {
            $myparent_id  = $value;
            $parentData = Myparent::where('id', '=', $myparent_id)->first();
            $motherTelephone = $parentData->MotherContact;
            $fatherTelephone = $parentData->FatherContact;
            array_push($telephoneArray, $motherTelephone);
            array_push($telephoneArray, $fatherTelephone);
          }

        $data = [
            "sender" => "RAPID SCH",
            "message" => $txt,
            "recipients" => $telephoneArray
        ];

        $config = [
            'headers' => [
                'api-key' => env('ARKESEL_API_KEY')
            ],
            'json' => $data,
            'verify' => false // This line bypasses SSL verification
        ];

        $client = new Client();
        try {
            $response = $client->post('https://sms.arkesel.com/api/v2/sms/send', $config);
            return $response->getBody()->getContents();
        } catch (\Exception $e) {
            // Handle exception (e.g., log error)
            \Log::error('SMS error: ' . $e->getMessage());
            return $e->getMessage();
        }
    }



    public function sendSMSByClass(Request $request)
    {
        $txt = $request->messageBody;
        $className = $request->className;
        $studentlist = Student::where('classroom_id', '=', $className)->get();
        $telephoneArray = [];

        if(count($studentlist) == 0){
            return response()->json([
                'success' => false,
                'message' => 'Array-Zero'
            ]);
        }else{
            foreach ($studentlist as $value) {
                $myparent_id  = $value->myparent_id;
                $parentData = Myparent::where('id', '=', $myparent_id)->first();
                $motherTelephone = $parentData->MotherContact;
                $fatherTelephone = $parentData->FatherContact;
                array_push($telephoneArray, $motherTelephone);
                array_push($telephoneArray, $fatherTelephone);
              }
    
            $data = [
                "sender" => "RAPID SCH",
                "message" => $txt,
               
                "recipients" => $telephoneArray
            ];
    
            $config = [
                'headers' => [
                    'api-key' => env('ARKESEL_API_KEY')
                ],
                'json' => $data,
                'verify' => false // This line bypasses SSL verification
            ];
    
            $client = new Client();
    
            try {
                $response = $client->post('https://sms.arkesel.com/api/v2/sms/send', $config);
                return $response->getBody()->getContents();
            } catch (\Exception $e) {
                // Handle exception (e.g., log error)
                \Log::error('SMS error: ' . $e->getMessage());
                return $e->getMessage();
            }
        }
    }


}

