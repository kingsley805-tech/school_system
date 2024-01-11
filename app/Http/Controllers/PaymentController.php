<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Invoice;
use App\Models\payments;
use App\Models\Classroom;
use App\Models\Invoiceitems;
use App\Models\FeeStructure;

class PaymentController extends Controller
{
       public function makePaymentPage(){
        try {
            $classes = Classroom::get();
            return view('Account.make-payment-page')->with(['data' => Auth::user(), 'classes' => $classes]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
       }



       public function SelectInvoicesForStudent(Request $request){
        try {
            $IndexNumber = trim($request->IndexNumber);
             $invoices = Invoice::where('IndexNumber', '=', $IndexNumber)->get();
    
             return response()->json([
              'success' => true,
              'invoices' => $invoices,
          ]);
    
        } catch (\Exception $e) {
            return response()->json($e->message());
         // \Log::error($e->getMessage());
        }
      }


      public function InvoiceDetails(){
        try {
          $InvoiceID = request()->route('InvoiceID');
          $InvoiceNumber = request()->route('InvoiceNumber');
          $invoiceItems = Invoiceitems::where('InvoiceID', '=', $InvoiceID )->where('InvoiceNumber', '=', $InvoiceNumber)->get();
          $invoice = Invoice::where('InvoiceID', '=', $InvoiceID )->where('InvoiceNumber', '=', $InvoiceNumber)->first();
          return view('Account.make-payment-invoice')->with(['data' => Auth::user(), 'invoiceItems' => $invoiceItems, 'invoice' => $invoice]);
        } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
        }
      }


      
      public function payOnInvoice(){
        try {
          $InvoiceID = request()->route('InvoiceID');
          $InvoiceNumber = request()->route('InvoiceNumber');
          $invoice = Invoice::where('InvoiceID', '=', $InvoiceID )->where('InvoiceNumber', '=', $InvoiceNumber)->first();
          return view('Account.payment-form')->with(['data' => Auth::user(),'invoice' => $invoice]);
        } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
        }
      }
   
      public function payOnInvoiceItems(){
        try {
          $InvoiceID = request()->route('InvoiceID');
          $InvoiceNumber = request()->route('InvoiceNumber');
          $id = request()->route('id');
          $InvoiceNumber = request()->route('InvoiceNumber');
          $invoice = Invoice::where('InvoiceID', '=', $InvoiceID )->where('InvoiceNumber', '=', $InvoiceNumber)->first();
          $invoiceItem = Invoiceitems::where('InvoiceID', '=', $InvoiceID )->where('id', '=', $id)->first();
          return view('Account.payment-form-2')->with(['data' => Auth::user(),'invoice' => $invoice, 'invoiceItem' => $invoiceItem]);
        } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
        }
      }


    
    public function createPaymentPost(Request $request)
    {
        try {
            $class = Classroom::where('id', $request->classroom_id)
             ->first();
            // Validation
            $validatedData = $request->validate([
                'Description' => 'required',
                'payingAmount' => 'required', 
                'AmountPayable' => 'required',
                'InvoiceNumber' => 'required',
                'InvoiceID' => 'required',
                'PaymentDate' => 'required|date', 
                'IndexNumber' => 'required',
                'classroom_id' => 'required',
                'StudentName' => 'required',
                'amountLeft' => 'required'
            ]);
    
            // Start a database transaction
            DB::beginTransaction();
    
            // Create a new payment record
            $timestamp = strtotime($validatedData['PaymentDate']);
            $stringDate = date('d F Y', $timestamp);
            $user = Auth::user();
    
            $payments = new payments([
                'Description' => $validatedData['Description'],
                'payingAmount' => (float)$validatedData['payingAmount'],
                'AmountPayable' => (float)$validatedData['AmountPayable'],
                'InvoiceNumber' => $validatedData['InvoiceNumber'],
                'InvoiceID' => $validatedData['InvoiceID'],
                'PaymentDate' => $stringDate,
                'dateNumber' => $timestamp,
                'receiver' => $user->FirstName . $user->LastName,
                'receiverRole' => $user->usertype,
                'IndexNumber' => $validatedData['IndexNumber'],
                'classroom_id' => $validatedData['classroom_id'],
                'StudentName' => $validatedData['StudentName'],
                'classroom' => $class->name,
                'session' => '2023-2024',
            ]);
    
            $payments->save();
    
            // Update the corresponding invoice
            $amountPaid = (float)$validatedData['payingAmount'];
            $invoiceData = [
                'AmountPaid' => DB::raw('AmountPaid + ' . $amountPaid),
                'AmountLeft' => DB::raw('AmountLeft - ' . $amountPaid),
                'PaymentStatus' => ($amountPaid < (float)$validatedData['AmountPayable']) ? 'Started' : 'Paid',
            ];
    
            DB::table('invoices')
                ->where('InvoiceID', $validatedData['InvoiceID'])
                ->where('InvoiceNumber', $validatedData['InvoiceNumber'])
                ->update($invoiceData);
    
            // Commit the database transaction
            DB::commit();
    
            return back()->with('success', 'Payment added successfully');
        } catch (\Exception $e) {
            // Roll back the database transaction in case of an error
            DB::rollback();
    
            return back()->with('fail', $e->getMessage());
        }
    }



    public function createPaymentPostOnItems(Request $request)
    {
        try {
            $class = Classroom::where('id', $request->classroom_id)
             ->first();
            // Validation
            $validatedData = $request->validate([
                'Description' => 'required',
                'payingAmount' => 'required', 
                'AmountPayable' => 'required',
                'InvoiceNumber' => 'required',
                'InvoiceID' => 'required',
                'PaymentDate' => 'required|date', 
                'IndexNumber' => 'required',
                'classroom_id' => 'required',
                'StudentName' => 'required',
                'amountLeft' => 'required',
                'id' => 'required'
            ]);
    
            // Start a database transaction
            DB::beginTransaction();
    
            // Create a new payment record
            $timestamp = strtotime($validatedData['PaymentDate']);
            $stringDate = date('d F Y', $timestamp);
            $user = Auth::user();
    
            $payments = new payments([
                'Description' => $validatedData['Description'],
                'payingAmount' => (float)$validatedData['payingAmount'],
                'AmountPayable' => (float)$validatedData['AmountPayable'],
                'InvoiceNumber' => $validatedData['InvoiceNumber'],
                'InvoiceID' => $validatedData['InvoiceID'],
                'PaymentDate' => $stringDate,
                'dateNumber' => $timestamp,
                'receiver' => $user->FirstName . $user->LastName,
                'receiverRole' => $user->usertype,
                'IndexNumber' => $validatedData['IndexNumber'],
                'classroom_id' => $validatedData['classroom_id'],
                'StudentName' => $validatedData['StudentName'],
                'classroom' => $class->name,
                'session' => '2023-2024',
            ]);
    
            $payments->save();
    
            // Update the corresponding invoice
            $amountPaid = (float)$validatedData['payingAmount'];
            $invoiceData = [
                'AmountPaid' => DB::raw('AmountPaid + ' . $amountPaid),
                'AmountLeft' => DB::raw('AmountLeft - ' . $amountPaid),
                'PaymentStatus' => ($amountPaid < (float)$validatedData['AmountPayable']) ? 'Started' : 'Paid',
            ];

            $invoiceItem = [
                'PaymentStatus' => 'Paid',
            ];
    
            DB::table('invoices')
                ->where('InvoiceID', $validatedData['InvoiceID'])
                ->where('InvoiceNumber', $validatedData['InvoiceNumber'])
                ->update($invoiceData);

            DB::table('invoiceitems')
            ->where('InvoiceID', $validatedData['InvoiceID'])
            ->where('id', $validatedData['id'])
            ->update($invoiceItem);

            // Commit the database transaction
            DB::commit();
    
            return back()->with('success', 'Payment added successfully');
        } catch (\Exception $e) {
            // Roll back the database transaction in case of an error
            DB::rollback();
    
            return back()->with('fail', $e->getMessage());
        }
    }

    public function fetchAllPayments(){
        try {
             $payments = payments::get();
             return view('Account.payment-list')->with(['data' => Auth::user(), 'payments' => $payments]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }


    
    public function fetchClassRoomForPaymet(){
        try {
             $classes = Classroom::get();
             return view('Account.class-payment-list')->with(['data' => Auth::user(), 'classes' => $classes]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }



    public function fetchPaymentByClass(Request $request){
        try {
            $classroom_id = trim($request->classroom_id);

            $payments = payments::where('classroom_id', '=', $classroom_id)->get();
           
            return response()->json([
                'success' => true,
                'payments' => $payments,
            ]);
            
        } catch (\Exception $e) {
            return response()->json($e->message());
        }
    }


    public function fetchClassRoomForPaymetTwo(){
        try {
             $classes = Classroom::get();
             return view('Account.student-payment-list')->with(['data' => Auth::user(), 'classes' => $classes]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }



   public function fetchPaymentByStudent(Request $request){
    try {
        $IndexNumber = trim($request->IndexNumber);

        $payments = payments::where('IndexNumber', '=', $IndexNumber)->get();
       
        return response()->json([
            'success' => true,
            'payments' => $payments,
        ]);
        
    } catch (\Exception $e) {
        return response()->json($e->message());
    }
}


public function fetchClassRoomForPaymetThree(){
    try {
         $classes = Classroom::get();
         return view('Account.student-invoices')->with(['data' => Auth::user(), 'classes' => $classes]);
    } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
    }
}


public function fetchFeetypeHistory(){
    try {
        $id = request()->route('id');
         $Fee = FeeStructure::where('id', '=', $id)->first();
         $feeType = trim($Fee->feeType);
         $payments = payments::where('Description', '=', $feeType)->get();
         return view('Account.fee-type-payment-history')->with(['data' => Auth::user(), 'payments' => $payments, 'feetype' => $feeType]);
    } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
    }
}



}



