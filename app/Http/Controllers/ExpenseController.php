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
            'expense_title' => 'string|max:255',
            'category' => 'required|in:food,transport,bills,shopping,education,others',
            'date' => 'nullable|date',
        ]);
        
        DB::beginTransaction(); 
        try{
            $customDate = $validatedData['date'] ?? now()->toDateString();

            $income = Expense::create([
                'user_id' => auth()->id(),
                'amount' => $validatedData['amount'],
                'expense_title' => $validatedData['expense_title'],
                'category' => $validatedData['category'],
                'custom_date' => $customDate,
            ]);

            DB::commit();
            return redirect('/');

        }catch (Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
