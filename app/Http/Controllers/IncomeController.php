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
            'category' => 'required|in:salary,deposits,savings',
            'date' => 'nullable|date|before_or_equal:today',
        ]);
        
        DB::beginTransaction(); 
        try{
            $customDate = $validatedData['date'] ?? now()->toDateString();

            Income::create([
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


    public function incomelist(){
        $count = 1;
        $userId = auth()->id();
        $incomelist = DB::table('incomes')
            ->where('user_id', $userId)
            ->orderBy('custom_date','asc')
            ->paginate(10); 
        return view('pages.incomelist', compact('incomelist', 'count'));
    }

  
   /* public function incomeSum(){
        $sum = DB::table('incomes')->sum('amount');

        return view('pages.dashboard', compact('sum'));

    }*/


}
