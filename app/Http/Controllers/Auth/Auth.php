<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class Auth extends Controller
{
    
    public function loginProcess(Request $request){
        
        if(!\Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->back();
        }

        return redirect('/main');

    }

    public function logout(){

        \Auth::logout();

        return redirect('/');

    }

    public function register(Request $request){
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/login');

    }

}
