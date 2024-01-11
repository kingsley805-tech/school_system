<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\BusModel;
use App\Models\BusRouteModel;
use App\Models\Classroom;
use App\Models\Student;


class BussesController extends Controller
{
    public function libraryDashboard(){
        try {
          return view('Busses.bus')->with(['data' => Auth::user()]);
        } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
        }
      }

      public function addBusesPage(){
        try {
          return view('Busses.addBus')->with(['data' => Auth::user()]);
        } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
        }
      }


      public function addBusPost(Request $request)
      {
          try {
              // Validation
              $validatedData = $request->validate([
                  'busNumber' => 'required',
                  'busModel' => 'required', 
                  'driverName' => 'required', 
                  'driverNumber' => 'required',
                  'inCharge' => 'required',
                  'note' => 'required',   
              ]);
             
              $user = Auth::user();
              // Start a database transaction
              DB::beginTransaction();
      
              // Create a new payment record
              $bus = new BusModel([
                  'busNumber' => $validatedData['busNumber'],
                  'busModel' => $validatedData['busModel'],
                  'driverName' => $validatedData['driverName'],
                  'driverNumber' => $validatedData['driverNumber'],
                  'note' => $validatedData['note'],
                  'inCharge' => $validatedData['inCharge'],
                
              ]);
      
                $bus->save();
              return back()->with('success', 'Bus added successfully');
          } catch (\Exception $e) {
              // Roll back the database transaction in case of an error
              DB::rollback();
      
              return back()->with('fail', $e->getMessage());
          }
      }


      public function fetchBusses(){
        try {
           $buses = BusModel::get();
           return view('Busses.bus-list')->with(['data' => Auth::user(), 'buses' => $buses ]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
      }

      
      public function editBussesPage(){
        try {
            $id = request()->route('id');
            $bus = BusModel::where('id', '=', $id)->first();
            return view('Busses.edit-buses')->with(['data' => Auth::user(), 'bus' => $bus ]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
      }


      public function editBussesPost(Request $request)
      {
          try {
              // Validation
              $validatedData = $request->validate([
                  'busNumber' => 'required',
                  'busModel' => 'required', 
                  'driverName' => 'required', 
                  'driverNumber' => 'required',
                  'inCharge' => 'required',
                  'note' => 'required',   
                  'id' => 'required',
              ]);
  
              DB::beginTransaction();
               $id = $validatedData['id'];
               $busNumber = $validatedData['busNumber'];
               $busModel = $validatedData['busModel'];
               $driverName = $validatedData['driverName'];
               $driverNumber = $validatedData['driverNumber'];
               $inCharge = $validatedData['inCharge'];
               $note = $validatedData['note'];
              
               BusModel::where('id', $id)->update(['busNumber' => $busNumber, 'busModel' => $busModel, 'driverName' =>$driverName, 'driverNumber' => $driverNumber, 'inCharge' => $inCharge, 'note' => $note ]);
              return back()->with('success', 'Bus Edited Successfully');
          } catch (\Exception $e) {
              // Roll back the database transaction in case of an error
              DB::rollback();
      
              return back()->with('fail', $e->getMessage());
          }
      }

     public function deleteBus(){
        try {
            $id = request()->route('id');
            BusModel::where('id', $id)->delete();
            return back()->with('success', 'Bus deleted from our successfully');
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
     }

     public function addRoutePage(){
        try {
            $buses = BusModel::get();
           return view('Busses.addRoute')->with(['data' => Auth::user(), 'buses' => $buses ]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
     }

     public function createRouteForm(Request $request){
        try {
             // Validation
             $validatedData = $request->validate([
                'routeName' => 'required',
                'fare' => 'required|numeric', 
                'busNumber' => 'required', 
            ]);

            $randomString = bin2hex(random_bytes(6));
             $route = new BusRouteModel([
                'routeName' => $validatedData['routeName'],
                'fare' => $validatedData['fare'],
                'busNumber' => $validatedData['busNumber'],
                'routeID' => $randomString,

            ]);
    
              $route->save();
            return back()->with('success', 'route added successfully');
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
     }

     
     public function fetchRoute(){
       try {
          $routes = BusRouteModel::get();
          return view('Busses.route-list')->with(['data' => Auth::user(), 'routes' => $routes ]);
       } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
       }
     }

     public function editRoutePage(){
          try {
            $id = request()->route('id');
            $route = BusRouteModel::where('id', '=', $id)->first();
            $buses = BusModel::get();
            return view('Busses.edit-route')->with(['data' => Auth::user(), 'route' => $route, 'buses' => $buses]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
     }


     public function editRoutePost(Request $request)
     {
         try {
             // Validation
             $validatedData = $request->validate([
              'routeName' => 'required',
              'fare' => 'required|numeric', 
              'busNumber' => 'required', 
               'id' => 'required'
             ]);
 
             DB::beginTransaction();
              $id = $validatedData['id'];
              $busNumber = $validatedData['busNumber'];
              $fare = $validatedData['fare'];
              $routeName = $validatedData['routeName'];
             
              BusRouteModel::where('id', $id)->update(['busNumber' => $busNumber, 'routeName' => $routeName, 'fare' =>$fare, ]);
             return back()->with('success', 'Route Edited Successfully');
         } catch (\Exception $e) {
             // Roll back the database transaction in case of an error
             DB::rollback();
     
             return back()->with('fail', $e->getMessage());
         }
     }

     public function deleteRoute(){
      try {
          $id = request()->route('id');
          BusRouteModel::where('id', $id)->delete();
          return back()->with('success', 'Route deleted from our successfully');
      } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
      }
   }

   public function assignStudentToRoutePage(){
      try {
        $routes = BusRouteModel::get();
        return view('Busses.student-route-page')->with(['data' => Auth::user(), 'routes' => $routes ]);
     } catch (\Exception $e) {
       return back()->with('fail', $e->getMessage());
     }
   }

   public function assignStudentToRouteForm(){
    try {
      $routeID = request()->route('routeID');
      $classes = Classroom::get();
      $route = BusRouteModel::where('routeID', '=', $routeID)->first();
      return view('Busses.student-assign-form')->with(['data' => Auth::user(), 'routeID' => $routeID, 'classes' => $classes, 'route' => $route  ]);
   } catch (\Exception $e) {
     return back()->with('fail', $e->getMessage());
   }
  }


  public function assignBusRouteToStudent(Request $request){
    try {
      // Validation
      $validatedData = $request->validate([
       'IndexNumber' => 'required',
       'routeID'=> 'required'
      ]);

      DB::beginTransaction();
       $IndexNumber = $validatedData['IndexNumber'];
       $routeID = $validatedData['routeID'];
   
       Student::where('IndexNumber', $IndexNumber)->update(['busRouteID' => $routeID]);
      return back()->with('success', 'Route Added to Student Successfully');
  } catch (\Exception $e) {
      // Roll back the database transaction in case of an error
      DB::rollback();

      return back()->with('fail', $e->getMessage());
  }
  }


  public function studentRouteList(){
      try {
        $routeID = request()->route('routeID');
        $students = Student::where('busRouteID', '=', $routeID)->with(['classrooms:id,name'])->get();
        return view('Busses.student-route')->with(['data' => Auth::user(), 'students' => $students, 'routeID' => $routeID ]);
    } catch (\Exception $e) {
      return back()->with('fail', $e->getMessage());
    }
  }


  public function removeStudentFromRoute(){
    try {
      $IndexNumber = request()->route('IndexNumber');
      Student::where('IndexNumber', $IndexNumber)->update(['busRouteID' => '']);
      return back()->with('success', 'Student Removed From This Route Successfully');
    } catch (\Exception $e) {
      return back()->with('fail', $e->getMessage());
    }
  }

}
