<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class logoutController extends Controller
{
    public function logout(){
        Session::forget('username');
        return redirect('/');
    }
}
