<?php

namespace App\Http\Controllers;
use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    public function incomeFormPage(){
        return view('Account.income-form')->with(['data' => Auth::user()]);
    }


    public function fetchIncomeList(){
        try {
            $incomes = Income::get();
            return view('Account.income-list')->with(['incomes' => $incomes, 'data' => Auth::user(),]);
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }

    public function editIncomeForm(Request $request){
      try {
          $id = request()->route('id');
          $income = Income::firstWhere('id', $id);
          return view('Account.income-edit-form')->with(['income' => $income, 'data' => Auth::user(),]);
      } catch (\Exception $e) {
        return back()->with('fail', $e->getMessage());
      }
    }

    public function createNewIncomePost(Request $request){
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
            $expenses = new Income([
                'Title' => $request->Title,
                'Category' => $request->Category,
                'Amount' => $request->Amount,
                'invoiceNumber' => $request->invoiceNumber,
                'stringDate' => $stringDate,
                'dateNumber' => $timestamp,
                'Note' => $request->Note,
               
            ]);

            $expenses->save();
            return back()->with('success', 'Income added successfully');

        } catch (\Exception $e) {
          return back()->with('fail', $e->getMessage());
        }

    }


    public function editIncomePost(Request $request){
        try {
            $id = (int)$request->id;
            $data = $request->validate([
                 'Title' => 'required',
                 'Category' => 'required',
                 'Amount' => 'required',
                 'invoiceNumber' => 'required',
                 
             ]);
             $records = Income::firstWhere('id',$id)
             ->update($request->all());
             return back()->with('success', 'Income edited successfully');

        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
    }

    public function deleteIncome(Request $request){
        try {
            $id = request()->route('id');
            $expense = Income::firstWhere('id',$id)->delete();
            return back()->with('success', 'Income deleted successfully');
        } catch (\Exception $e) {
            return back()->with('fail', $e->getMessage());
        }
        
    }
}
