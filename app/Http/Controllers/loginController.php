<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\User;

class loginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function verify(LoginRequest $req){
        $user=User::where('username',$req->username)->where('password',$req->password)->first();
        if ($user!=null && $user->type=='admin') {
            $req->session()->put('username', $req->username);
            return redirect('/home');
        }else if($user!=null && $user->type=='employee'){
            $req->session()->put('username', $req->username);
            return redirect('/employee');
        }

        else{
            $req->session()->flash('msg','invalid username/password');
            return redirect('/');
        }
    }
}
