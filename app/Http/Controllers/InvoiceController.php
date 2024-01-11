<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; // Import the DB facade

use Illuminate\Http\Request;
use App\Models\FeeStructure;
use App\Models\Classroom;
use App\Models\Student;
use App\Models\Invoice;
use App\Models\Invoiceitems;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
 
class InvoiceController extends Controller
{
    public function createInvoicePage(){
      $classrooms = Classroom::get();
        return view('Account.create-invoice-form')->with(['data' => Auth::user(), 'classrooms' => $classrooms]);
    }

    public function createStudentInvoicePage(){
      $classrooms = Classroom::get();
        return view('Account.create-student-invoice')->with(['data' => Auth::user(), 'classrooms' => $classrooms]);
    }

    public function fetchFeeStructure(){
      try {
           $fees = FeeStructure::get();
           return response()->json($fees);
      } catch (\Exception $e) {
        return response()->json($e->message());
      }
    }


    public function fetchClassList(){
        try {
             $fees = Classroom::get();
             return response()->json($fees);
        } catch (\Exception $e) {
          return response()->json($e->message());
        }
      }

      public function fetchStudentFromClass(Request $request){
        try {
             $fees = Student::Where('classroom_id', $request->ClassroomID)->get();
             return response()->json($fees);
        } catch (\Exception $e) {
          return response()->json($e->message());
        }
      }

      public function PostInvoiceForStudent(Request $request) {
        try {
            $studentArray = json_decode($request->StudentArray);
            $itemsArray = json_decode($request->ItemsArray);
    
            // Start a database transaction
            DB::beginTransaction();
    
            foreach ($studentArray as $student) {
              $InvoiceNumber = $student->InvoiceNumber;
              $InvoiceID = $student->InvoiceID;
                $invoice = new Invoice([
                  'Description' => $request->Description,
                  'TotalAmount' => $request->TotalAmount,
                  'Discount' => $request->Discount,
                  'Discount_Percent' => $request->Discount_Percent,
                  'PayableAmount' => $request->Balance ,
                  'AmountLeft' => $request->Balance,
                  'AmountPaid' => 0,
                  'DateIssued' => $request->DateIssued,
                  'DateDue' => $request->DateDue,
                  'InvoiceID' => $InvoiceID,
                  'InvoiceNumber' => $InvoiceNumber,
                  'IndexNumber' => $student->IndexNumber,
                  'Parent_id' => $student->MyparentID,
                  'classroom_id' => $student->classroom_id, 
                  'StudentName' => $student->StudentName,
                  'PaymentStatus' => $request->PaymentStatus,
                ]);
                $invoice->save();
    
                foreach ($itemsArray as $item) {
                    $invoiceItem = new Invoiceitems([
                      'Description' => $item->Description,
                      'UnitCost' => $item->UnitCost,
                      'Price' => $item->Price,
                      'Total' => $item->Total,
                      'InvoiceID' => $InvoiceID,
                      'InvoiceNumber' => $InvoiceNumber,
                    ]);

                    $invoiceItem->save();
                }
            }
    
            // Commit the transaction if all data is saved successfully
            DB::commit();
    
            return response()->json(['success' => true, 'message' => 'Invoices and items saved successfully.']);
        } catch (\Exception $e) {
            // Rollback the transaction if an error occurs
            DB::rollBack();
           // return response()->json(['success' => false, 'message' => $e->getMessage()]);
           echo $e;
        }
    }


    public function PostInvoiceFromClasses(Request $request) {
      try {
          $studentArray = Student::Where('classroom_id', $request->ClassroomID)->get();
          $itemsArray = json_decode($request->ItemsArray);
  
          // Start a database transaction
          DB::beginTransaction();
         $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
          foreach ($studentArray as $student) {
             $InvoiceNumber = [];
              for ($i = 0; $i < 8; $i++) {
                $randomNumbers[] = rand(0, 9);
            }

              $InvoiceNumber = implode('', $randomNumbers);
              $InvoiceID = substr(str_shuffle($characters), 0, 12);
              $invoice = new Invoice([
                'Description' => $request->Description,
                'TotalAmount' => $request->TotalAmount,
                'Discount' => $request->Discount,
                'Discount_Percent' => $request->Discount_Percent,
                'PayableAmount' => $request->Balance,
                'AmountLeft' => $request->Balance,
                'AmountPaid' => 0,
                'DateIssued' => $request->DateIssued,
                'DateDue' => $request->DateDue,
                'InvoiceID' => $InvoiceID,
                'InvoiceNumber' => $InvoiceNumber,
                'IndexNumber' => $student->IndexNumber,
                'Parent_id' => $student->myparent_id,
                'StudentName' => $student->FirstName .$student->LastName,
                'classroom_id' => $student->classroom_id,
                'PaymentStatus' => $request->PaymentStatus,
              ]);
              $invoice->save();
  
              foreach ($itemsArray as $item) {
                  $invoiceItem = new Invoiceitems([
                    'Description' => $item->Description,
                    'UnitCost' => $item->UnitCost,
                    'Price' => $item->Price,
                    'Total' => $item->Total,
                    'InvoiceID' => $InvoiceID,
                    'InvoiceNumber' => $InvoiceNumber,
                  ]);

                  $invoiceItem->save();
              }
          }
  
          // Commit the transaction if all data is saved successfully
          DB::commit();
  
          return response()->json(['success' => true, 'message' => 'Invoices and items saved successfully.']);
      } catch (\Exception $e) {
          // Rollback the transaction if an error occurs
          DB::rollBack();
         // return response()->json(['success' => false, 'message' => $e->getMessage()]);
         echo $e;
      }
  }
    
   public function fetchInvoiceList(){
     try {
      $invoiceList = Invoice::get();
      return view('Account.invoice-list')->with(['invoices'=>$invoiceList, 'data'=>Auth::user()]);
     } catch (\Exception $e) {
       return back()->with('fail', $e->getMessage());
     }
   }

   public function showInvoice(Request $request){
    try {
      $InvoiceNumber = request()->route('InvoiceNumber');
      $InvoiceID = request()->route('InvoiceID');

      $invoice = Invoice::where('InvoiceNumber', $InvoiceNumber)
      ->where('InvoiceID', $InvoiceID)
      ->first();

      $invoiceItems = Invoiceitems::where('InvoiceNumber', $InvoiceNumber)
      ->where('InvoiceID', $InvoiceID)
      ->get();

      return view('Account.invoice-show-page')->with(['invoice'=>$invoice, 'invoiceItems'=>$invoiceItems, 'data'=>Auth::user()]);
      
    } catch (\Exception $e) {
       return back()->with('fail', $e->getMessage());
    }  
}


public function deleteInvoice(Request $request){
  try {
    $InvoiceNumber = request()->route('InvoiceNumber');
    $InvoiceID = request()->route('InvoiceID');

    $invoice = Invoice::where('InvoiceNumber', $InvoiceNumber)
    ->where('InvoiceID', $InvoiceID)
    ->delete();

    $invoiceItems = Invoiceitems::where('InvoiceNumber', $InvoiceNumber)
    ->where('InvoiceID', $InvoiceID)
    ->delete();

    return back()->with('success', 'Invoice deleted successfully');
    
  } catch (\Exception $e) {
     return back()->with('fail', $e->getMessage());
  }  
}


public function studentInvoice(){
  try {
      $classes = Classroom::get();
      return view('Account.student-invoice-page')->with(['data' => Auth::user(), 'classes' => $classes]);
  } catch (\Exception $e) {
      return back()->with('fail', $e->getMessage());
  }
 }

 
 public function InvoiceDetails(){
  try {
    $InvoiceID = request()->route('InvoiceID');
    $InvoiceNumber = request()->route('InvoiceNumber');
    $invoiceItems = Invoiceitems::where('InvoiceID', '=', $InvoiceID )->where('InvoiceNumber', '=', $InvoiceNumber)->get();
    $invoice = Invoice::where('InvoiceID', '=', $InvoiceID )->where('InvoiceNumber', '=', $InvoiceNumber)->first();
    return view('Account.invoice-show-page')->with(['data' => Auth::user(), 'invoiceItems' => $invoiceItems, 'invoice' => $invoice]);
  } catch (\Exception $e) {
    return back()->with('fail', $e->getMessage());
  }
}


public function paidInvoices(){
  try {
      $invoices = Invoice::where('PaymentStatus', '=', 'Paid')->get();
      return view('Account.invoice-list')->with(['data' => Auth::user(), 'invoices' => $invoices]);
  } catch (\Exception $e) {
      return back()->with('fail', $e->getMessage());
  }
 }


 public function unpaidInvoices(){
  try {
      $invoices = Invoice::where('PaymentStatus', '=', 'Pending')->get();
      return view('Account.invoice-list')->with(['data' => Auth::user(), 'invoices' => $invoices]);
  } catch (\Exception $e) {
      return back()->with('fail', $e->getMessage());
  }
 }

 public function PartiallypaidInvoices(){
  try {
      $invoices = Invoice::where('PaymentStatus', '=', 'Started')->get();
      return view('Account.invoice-list')->with(['data' => Auth::user(), 'invoices' => $invoices]);
  } catch (\Exception $e) {
      return back()->with('fail', $e->getMessage());
  }
 }


}
