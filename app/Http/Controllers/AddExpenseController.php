<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddExpenseController extends Controller
{
    public function addExpense(Request $request){
        
        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:1',
            'expense' => 'string|max:255',
            'category' => 'required|in:food,transport,bills,shopping,others',
            
        ]);

        $data = $request->input();
        return response()->json($data);
    }

}
