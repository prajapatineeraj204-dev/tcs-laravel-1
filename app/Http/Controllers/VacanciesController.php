<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Vacancies;
use App\Models\User;

class VacanciesController extends Controller
{
    
    public function index(Request $Request){
        return "vacancies";
    }
    
    public function create(Request $Request){
        return view("vacancies.create");
    }
    
    public function store(Request $request){
        if(!Auth::check()) {
            $password = substr(md5(uniqid(mt_rand(), true)), 0, 8);
            if(Auth::attempt(["email"=>$request->email,$request->phone_number])){
                
            }else{
                if(User::where("email",$request->email)->count()){
                    return back()->with('error','Please Login then create Vacancies');
                }else{
                    $data=User::create([
                        'name' => $request->user_name,
                        'phone' => $request->phone_number,
                        'email' => $request->email,
                        'role'  =>  3,
                        'password' => Hash::make($password),
                    ]);
                    Auth::attempt(["email"=>$request->email,"password"=>$password]);
                }
            }
        }
        // if(){
            $vacancies = new Vacancies;
            $vacancies->user_id = $data->id;
            $vacancies->job_title = $request->jobtitle;
            $vacancies->eligibility = $request->eligibility;
            $vacancies->job_opening = $request->jobopening;
            $vacancies->city = $request->city;
            $vacancies->salary = $request->salary_from.'-'.$request->salary_to;
            $vacancies->job_timings = $request->job_timings;
            $vacancies->intreview_time = $request->intreviewTime;
            $vacancies->job_description = $request->job_description;
            $vacancies->company_name = $request->company_name;
            $vacancies->user_name = $request->user_name;
            $vacancies->phone_number = $request->phone_number;
            $vacancies->email = $request->email;
            $vacancies->contact_persan = $request->contact_persan;
            $vacancies->job_address = $request->job_address;
            $vacancies->save();
            return back()->with('success','Vacancies Create Successfully');
        // }else{
            
        // }
    }
}
