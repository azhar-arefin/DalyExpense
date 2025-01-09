<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddincomeController extends Controller
{
    public function addincome(Request $request){
        
        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:1',
            'expense_title' => 'string|max:255',
            'category' => 'required|in:food,transport,bills,shopping,others',
            
        ]);
        
        $data = $request->input();
        return response()->json($data);


    }


    
}
