<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Http\Requests\JobRequest;


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

    // Create
    public function create(Request $req){
        $username=$req->session()->get('username');

        $user=User::where('username',$username)
                    ->where('type','employee')
                    ->first();

        if($user!=NULL){
            return view('employee.create');
        }
        else{
            $req->session()->flash('msg','invalid request');
            return redirect('/');
        }

    }
    // Post
    public function create_p(JobRequest $req){
        $name=$req->session()->get('username');

        $job = new Job();

        $job->company_name= $req->company_name;
        $job->job=$req->job;
        $job->location= $req->location;
        $job->salary= $req->salary;
        $job->created_at=date('d/m/y');
        $job->employee_name=$name;

        if($job->save()){
            return redirect('/employee/job_list');
        }
        return $name;
    }

    // Job List
    public function job_list(Request $req){
        $username=$req->session()->get('username');

        $user=User::where('username',$username)
                    ->where('type','employee')
                    ->first();

        if($user!=NULL){
            $job= Job::where('employee_name',$username)->get();

            return view('employee.job_list')->with('job',$job);
        }
        else{
            $req->session()->flash('msg','invalid request');
            return redirect('/');
        }
    }

    // Edit Job
    public function edit_job(Request $req, $id){
        $username=$req->session()->get('username');

        $user=User::where('username',$username)
                    ->where('type','employee')
                    ->first();

        if($user!=NULL){
            $job=Job::where('id',$id)->first();
            return view('employee.edit_job')->with('job',$job);
        }
        else{
            $req->session()->flash('msg','invalid request');
            return redirect('/');
        }

    }
    // Edit Job
    public function edit_job_p(JobRequest $req, $id){
        $job = Job::find($id);

        $job->company_name= $req->company_name;
        $job->job=$req->job;
        $job->location=$req->location;
        $job->salary=$req->salary;
        $job->updated_at=date("d/m/y");

        if($job->save()){
            return redirect('/employee/job_list');
        }
    }

    // Delete
    public function delete_job(Request $req, $id){
        $username=$req->session()->get('username');

        $user=User::where('username',$username)
                    ->where('type','employee')
                    ->first();

        if($user!=NULL){
            $job=Job::where('id',$id)->first();
            return view('employee.delete_job')->with('job',$job);
        }
        else{
            $req->session()->flash('msg','invalid request');
            return redirect('/');
        }


    }
    public function delete_job_p($id){
        $job = Job::find($id);
        $job->delete();
        return redirect('/employee/job_list');
    }
}
