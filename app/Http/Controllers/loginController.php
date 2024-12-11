<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    // public function login(Request $request)
    // {
    //     return $request->input();}

     function login(Request $request)
    {


        // return $request->input();
         $user = User::where(['email'=>$request->email])->first();

          // dobara
        if($user || Hash::cheak($request->password,$user->password))
        {
            return "Username or password is not matched";
        }else{

            $request->session()->put('user',$user);
            return redirect('/');
        }

//end


        // Validate the form data
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        // // Attempt to authenticate the user
        // if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
        //     // Authentication passed
        //     return redirect()->intended('/dashboard'); // Redirect authenticated user to dashboard
        // } else {
        //     // Authentication failed
        //     return redirect()->back()->withInput()->withErrors(['email' => 'These credentials do not match our records.']);
        // }
    }
}
