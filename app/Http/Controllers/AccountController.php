<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


use App\Models\User;
use App\Models\Classroom;
use App\Models\FeeStructure;
use App\Models\Invoice;
use App\Models\payments;
use App\Models\Expenses;
use App\Models\Income;


class AccountController extends Controller
{
    public function AccountPage(){
      return view('Account.account-admin')->with(['data' => Auth::user()]);
    }

    
   

    public function AddFeeTypeForm(){
        $user = Auth::user();
        $Sch_ID = $user->Sch_ID;
        $class = Classroom::get();
        return view('Account.feetype-form')->with(['data' => Auth::user(), 'class'=>$class]);
      }

    public function FeeType(){
        $fees = FeeStructure::get();
        return view('Account.feetype')->with(['data' => Auth::user(), 'fees'=>$fees]);
    }

    public function AddFeeStructure(Request $request){
       // print_r($request->Class);
        $request->validate([
            'classroom'=>'required',
            'feeType'=>'required',
            'period'=>'required',
            'amount'=> 'required|numeric'
          ]);
    
          $ClassArray = $request->classroom;
          $success = true; // Flag variable to track the success of all iterations

           foreach ($ClassArray as $classroom) {
            $feestructure = new FeeStructure(); 
            $classess = Classroom::firstWhere('id', $classroom);
            $classroom_id = $classroom;
            $feestructure->feeType = $request->feeType;
            $feestructure->classroom = $classess->name;
            $feestructure->amount = $request->amount;
            $feestructure->period = $request->period;
            $feestructure->classroom_id = $classroom_id;

            $res = $feestructure->save();
                if (!$res) {
                    $success = false;
                    break; // Exit the loop if a failure occurs, assuming you don't want to continue with further iterations
                }
             }

             if ($success) {
                return back()->with('success', 'fee structure added successfully');
              } else {
                return back()->with('fail', 'Something bad occurred');
            }
         }


         public function FetchAccountFirstLineAutoData(Request $request){
          try {
    
              $paidInvoice = Invoice::where('PaymentStatus', '=', 'Paid')->count();
              $unPaidInvoice = Invoice::where('PaymentStatus', '=', 'Pending')->count();
              $partiallyPaidInvoice = Invoice::where('PaymentStatus', '=', 'Started')->count();
              $totalInvoice = Invoice::count();
              $totalPayments = payments::count();
              $totalExpenses = Expenses::count();
              $totalIncome = Income::count();
         
              $sumPaidInvoice = Invoice::where('PaymentStatus', '=', 'Paid')->sum('AmountPaid');
              $sumUnPaidInvoice = Invoice::where('PaymentStatus', '=', 'Pending')->sum('AmountLeft');
              $sumPartiallyPaidInvoice = Invoice::where('PaymentStatus', '=', 'Started')->sum('AmountLeft');
              $sumTotalInvoice = Invoice::sum('PayableAmount');
              $sumtotalPayments = payments::sum('payingAmount');
              $sumtotalIncomme = Income::sum('Amount');
              $sumtotalExpenses = Expenses::sum('Amount');

              return response()->json([
                  'success' => true,
                  'paidInvoice' => $paidInvoice,
                  'unPaidInvoice' => $unPaidInvoice,
                  'partiallyPaidInvoice' => $partiallyPaidInvoice,
                  'totalInvoice' => $totalInvoice,
                  'totalExpenses' => $totalExpenses,
                  'totalIncome' => $totalIncome,
                  'sumPaidInvoice' => $sumPaidInvoice,
                  'sumUnPaidInvoice' => $sumUnPaidInvoice,
                  'sumPartiallyPaidInvoice' => $sumPartiallyPaidInvoice,
                  'sumTotalInvoice' => $sumTotalInvoice,
                  'totalPayments' => $totalPayments,
                  'sumtotalPayments' => $sumtotalPayments,
                  'sumtotalExpenses' => $sumtotalExpenses,
                  'sumtotalIncomme' => $sumtotalIncomme
              ]);
          } catch (\Exception $e) {
              return response()->json($e->getMessage(), 500);
          }
      }
      
      

}
