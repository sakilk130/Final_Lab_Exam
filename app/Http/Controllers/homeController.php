<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\EmployeeRequest;

class homeController extends Controller
{
    // Index Page
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
    // Create Pgae
    public function create(Request $req){
        $username=$req->session()->get('username');
        $user=User::where('username',$username)
                    ->where('type','admin')
                    ->first();
        if($user!=NULL){
            return view('Admin.create');
        }
        else{
            $req->session()->flash('msg','invalid request');
            return redirect('/');
        }
    }
    // Post employee
    public function register(EmployeeRequest $req){
        $username=$req->session()->get('username');
        $user = new User();

        $user->name= $req->name;
        $user->company_name=$req->company_name;
        $user->username=$req->username;
        $user->phone= $req->phone;
        $user->password=$req->password;
        $user->type='employee';
        $user->created_at=date('d/m/y');
        if($user->save()){
            return redirect('/home/employee_list');
        }
    }
    public function employee_list(Request $req){
        $username=$req->session()->get('username');
        $user=User::where('username',$username)
                    ->where('type','admin')
                    ->first();
        if($user!=NULL){
            $employee=User::where('type','employee')->get();
            return view('Admin.employee-list')->with('employee',$employee);
        }
        else{
            $req->session()->flash('msg','invalid request');
            return redirect('/');
        }


    }

    public function edit_employee_list(Request $req, $id){
        $username=$req->session()->get('username');
        $user=User::where('username',$username)
                    ->where('type','admin')
                    ->first();
        if($user!=NULL){
            $employee=User::where('id',$id)->first();
            return view('Admin.edit_employee')->with('employee',$employee);
        }
        else{
            $req->session()->flash('msg','invalid request');
            return redirect('/');
        }

    }

    public function edit_employee_list_p(EmployeeRequest $req, $id){
        $user = User::find($id);

        $user->name= $req->name;
        $user->company_name=$req->company_name;
        $user->username=$req->username;
        $user->phone=$req->phone;
        $user->password=$req->password;
        $user->updated_at=date("d/m/y");

        if($user->save()){
            return redirect('/home/employee_list');
        }
    }
    // Delete employee Page
    public function delete_employee_list(Request $req, $id){

        $username=$req->session()->get('username');
        $user=User::where('username',$username)
                    ->where('type','admin')
                    ->first();
        if($user!=NULL){
            $employee=User::where('id',$id)->first();
            return view('Admin.delete')->with('employee',$employee);
        }
        else{
            $req->session()->flash('msg','invalid request');
            return redirect('/');
        }


    }
    // Delete employee Post
    public function delete_employee_list_p($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/home/employee_list');
    }
}
