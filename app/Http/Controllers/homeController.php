<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class homeController extends Controller
{
    public function index(Request $req){
        $username=$req->session()->get('username');
        $user=User::where('username',$username)
                    ->where('type','admin')
                    ->first();
        if($user!=NULL){
            return view('Admin.home');
        }
        else{
            $req->session()->flash('msg','invalid request');
            return redirect('/');
        }
    }
}
