<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expenses;
use Illuminate\Support\Facades\Auth;
use DB;
class ExpensesController extends Controller
{

    public function ExpensesForm(){
        return view('Account.expense-form')->with(['data'=>Auth::user()]);
    }
    

    public function fetchExpensesList(){
       $expenses = Expenses::get();
       return view('Account.expense-list')->with(['expenses'=>$expenses, 'data'=>Auth::user()]);
    }

    public function expensesFormEdit(Request $request){
        $id = request()->route('id');
        $expense = Expenses::firstWhere('id', $id);
        if(is_null($expense)){
           return back()->with('fail', 'Expenses id cannot be found');
        }else{
           return view('Account.expense-form-edit')->with(['expense' => $expense, 'data'=>Auth::user()]);
        }
        
    }
    
    
    public function newExpensesPost(Request $request){
        try {
            $request->validate([
                'Title' => 'required',
                'Category' => 'required',
                'Amount' => 'required',
                'invoiceNumber' => 'required',
                'incomeDate' => 'required',
            ]);

             $timestamp = strtotime($request->incomeDate);
             $stringDate = date('d F Y', $timestamp);
            $expenses = new Expenses([
                'Title' => $request->Title,
                'Category' => $request->Category,
                'Amount' => $request->Amount,
                'invoiceNumber' => $request->invoiceNumber,
                'stringDate' => $stringDate,
                'dateNumber' => $timestamp,
                'Note' => $request->Note,
               
            ]);

            $expenses->save();
            return back()->with('success', 'Expenses created successfully');

        } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
        }
    }


    public function expenseFormEditPost(Request $request, $id){
        try {
           $id = (int)$request->id;
           $data = $request->validate([
                'Title' => 'required',
                'Category' => 'required',
                'Amount' => 'required',
                'invoiceNumber' => 'required',
                
            ]);
            $records = Expenses::firstWhere('id',$id)
            ->update($request->all());
            return back()->with('success', 'Expenses edited successfully');
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }

    public function deleteExpense(Request $request){
        try {
            $id = request()->route('id');
            $expense = Expenses::firstWhere('id',$id)->delete();
            return back()->with('success', 'Expenses deleted successfully');
        } catch (\Throwable $th) {
            return back()->with('fail', $e->getMessage());
        }
        
    }
}
