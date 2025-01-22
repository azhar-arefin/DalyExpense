<?php
namespace App\Http\Controllers;


use App\Models\Demo1;
use App\Models\Demo2;

use Illuminate\Http\Request;



class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demo1 = Demo1::with('demo2')->get();
        return response()->json($demo1);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
