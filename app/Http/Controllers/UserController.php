<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Create User
    public function registration() {
        return view('pages.sign-up');
    }
    public function signup(Request $request){
        $validatedData  = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'phone'=> 'required|numeric|digits:11',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);
        User::create([
            'name' => $validatedData['name'],
            'email' =>$validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => bcrypt($validatedData['password']),
        ]);
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }

        return redirect('registration')->withError('Error');
   
    }


     // Login User//
    public function login(Request $request){
        return view('pages.sign-in');
    }

    public function signin(Request $request){


        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Enter a valid email address.',
            'password.required' => 'Please enter your password.',
        ]);

      /*  $user = DB::table('users')->where('email', $request->email)->first();
        if ($user && Hash::check($request->password , $user->password)) {

            return redirect()->route('/')->with('success', 'Login successful!');
        }
        return response()->json([
            'message' => 'Invalid credentials.',
        ], 401);
    */
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('/')->with('success', 'Login successful!');
        }

        return redirect('login')->withError('Login details are not valid');
    
    }

    // Log Out    
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

// User Profilr 

    public function profile(){
        $userId = auth()->id();
        $users = User::find($userId);
        
        return view('pages.profile.user_profile', compact('users'));
    }











}
