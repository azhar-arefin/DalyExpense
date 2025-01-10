<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Income;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IncomeController extends Controller
{ 
    public function addincome(Request $request){
        
        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:1',
            'income_title' => 'string|max:255',
            'category' => 'required|in:salary,deposits,savings',
            'date' => 'nullable|date',
        ]);
        
        DB::beginTransaction(); 
        try{
            $customDate = $validatedData['date'] ?? now()->toDateString();

            $income = Income::create([
                'user_id' => auth()->id(),
                'amount' => $validatedData['amount'],
                'income_title' => $validatedData['income_title'],
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
