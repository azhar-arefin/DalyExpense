<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\Income;
use App\Models\Expense;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class ReportController extends Controller
{
    public function monthlyreport(){
        return view('pages.monthlyreport');
    } 

    public function filterReport(Request $request){
        $validatedData = $request->validate([
            'year' => 'required',
            'month' => 'required',
        ]);
        $userId = auth()->id(); 
      
        
        $year = substr($validatedData['year'], -4); 
        $month = date('m', strtotime($validatedData['month'])); 

        $income = DB::table('incomes')
            ->where('user_id', $userId)
            ->whereYear('custom_date', $year)
            ->whereMonth('custom_date', $month)->orderBy('custom_date','asc')
            ->get();

        $expense = DB::table('expenses')
            ->where('user_id', $userId)
            ->whereYear('custom_date', $year)
            ->whereMonth('custom_date', $month)->orderBy('custom_date','asc')
            ->get();

        return view('pages.monthlyreport', compact('income', 'expense'));
        /*
        $result = [$income,$expense];
        return response()->json($result);*/
    }


    public function allsummaryreport(Request $request){

        $userId = auth()->id(); 
        
        $income = DB::table('incomes')
            ->where('user_id', $userId)->orderBy('custom_date','asc')
            ->get();
        $suminc = DB::table('incomes')->where('user_id', $userId)->sum('amount');

        $expense = DB::table('expenses')
            ->where('user_id', $userId)->orderBy('custom_date','asc')
            ->get();
        $sumexp = DB::table('expenses')->where('user_id', $userId)->sum('amount');

        $balence = $suminc - $sumexp;

        return view('pages.allsummary', compact('income','suminc', 'expense','sumexp','balence'));
    }

    public function sum(){
        $userId = auth()->id(); 
        $suminc = DB::table('incomes')->where('user_id', $userId)->sum('amount');
        $sumexp = DB::table('expenses')->where('user_id', $userId)->sum('amount');

        $balence = $suminc - $sumexp;

        return view('pages.dashboard', compact('suminc', 'sumexp','balence'));
    }

    public function calculator(){

        return view('pages.calculator');
    }

    public function calender(){

        return view('pages.calender');
    }


    public function notes()
    {
        return view('pages.notes.note');
    }





}
