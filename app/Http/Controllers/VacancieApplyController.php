<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\VacancieApplyMail;
use App\Models\User;
use App\Models\Vacancies;
use App\Models\Vacancie_apply;

class VacancieApplyController extends Controller
{
    function store(Request $request){
        if(!Auth::check()) {
            $password = substr(md5(uniqid(mt_rand(), true)), 0, 8);
            if(Auth::attempt(["email"=>$request->email,"phone"=>$request->phone])){
                
            }else{
                if(User::where("email",$request->email)->count()){
                    return back()->with('error','Please Login then apply Vacancies');
                }else{
                    $data=User::create([
                        'name' => $request->name,
                        'phone' => $request->phone,
                        'email' => $request->email,
                        'role'  =>  3,
                        'password' => Hash::make($password),
                    ]);
                    Auth::attempt(["email"=>$request->email,"password"=>$password]);
                }
            }
        }
        $file = $request->file('resume');
        $resume = str_replace(" ","-",$request->name)."_".auth()->user()->id."_".time().".".$file->getClientOriginalExtension();
        $destinationPath = '../storage/vacancie/resume';
        $file->move($destinationPath,$resume);
        
        $vacancie=Vacancies::findOrFail($request->vacancie_id);

        $apply = new Vacancie_apply;
        $apply->user_id = auth()->user()->id; 
        $apply->vacancie_id = $request->vacancie_id;
        $apply->name = $request->name;
        $apply->email = $request->email;
        $apply->mobile = $request->phone;
        $apply->qualification = $request->qualification;
        $apply->experience = $request->experience;
        $apply->current_ctc = $request->current_ctc;
        $apply->expected_ctc = $request->expected_ctc;
        $apply->resume = $resume;
        $apply->save();
        // dd($apply);
        
        Mail::to($vacancie->email)->send(new VacancieApplyMail($apply));
        return redirect()->back()->with('success','Vacancies applay Successfully');
    }
}
