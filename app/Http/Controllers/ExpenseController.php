<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Expense;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

 

class ExpenseController extends Controller
{
    public function addExpense(Request $request){

        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:1',
            'category' => 'required|in:food,transport,bills,shopping,education,others',
            'date' => 'nullable|date|before_or_equal:today',
        ]);
        
        DB::beginTransaction(); 
        try{
            $customDate = $validatedData['date'] ?? now()->toDateString();

            Expense::create([
                'user_id' => auth()->id(),
                'amount' => $validatedData['amount'],
                'category' => $validatedData['category'],
                'custom_date' => $customDate,
            ]);

            DB::commit();
            return redirect('/');

        }catch (Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false,
            'html' => "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{$e->getMessage()}',
                });
            </script>"
        ]);
        }
    }



    public function expenselist(){
        $count = 1;
        $userId = auth()->id();
        $expenselist = DB::table('expenses')->where('user_id', $userId)
                ->orderBy('custom_date','asc')
                ->paginate(15); 

        return view('pages.expense', compact('expenselist', 'count'));
    }

    /*   public function expenseSum(){
        $sumexp = DB::table('expense')->sum('amount');

        return view('pages.incomesum', compact('sumexp'));
    }*/



}
