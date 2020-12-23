<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index(Request $req){
        $username=$req->session()->get('username');

        $user=User::where('username',$username)
                    ->where('type','employee')
                    ->first();

        if($user!=NULL){
            return view('employee.index');
        }
        else{
            $req->session()->flash('msg','invalid request');
            return redirect('/');
        }
    }
}
