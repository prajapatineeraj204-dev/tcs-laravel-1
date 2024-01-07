<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlacementApply;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PlacementApplyContoller extends Controller
{
    public function store(Request $request){
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
        //validate incoming request parameters
        $validate = $request->validate([
            '*' => 'required',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'file_path' => 'nullable|file' 
        ]);

                
        //  file handling
        $file = $request->file('file_path');
        $resume = str_replace(" ","-",$request->name)."_".auth()->user()->id."_".time().".".$file->getClientOriginalExtension();
        $destinationPath = '../storage/placements/resume';
        $file->move($destinationPath, $resume);


        //create new placement instance and fill it with data
        $placementApply = new PlacementApply();
        $placementApply->fill($validate);
        $placementApply->user_id = auth()->user()->id;
        $placementApply->education = $request->education;
        $placementApply->course_name = $request->course_name;
        $placementApply->start_date = $request->start_date;
        $placementApply->end_date = $request->end_date;
        $placementApply->precentage = $request->precentage;
        $placementApply->company_name= $request->company_name;
        $placementApply->designation= $request->designation;
        $placementApply->company_name= $request->company_name;
        $placementApply->skill_start = $request->skill_start;
        $placementApply->skill_end = $request->skill_end;
        $placementApply->cover_latter = $request->cover_latter;
        $placementApply->skills = $request->skills;
        $placementApply->file_path = $file;

        // if($request->hasFile('file_path')){
        //     $file = $request->file('file_path');
        //     $filePath= $file->store('uploads');
        //     $placementApply->file_path = $filePath;
        // }
        // save data 
        $placementApply->save();

        // return 
        return redirect()->back()->with('success', 'Application successfully submitted');
    }
    public function applicants()
    {
        //
        // $mentorTypes = ['mentor.professionals', 'Both of the above'];
        $applicants = DB::table('placements_apply')
            ->get();
        return view('placement.applicants', ['applicants' => $applicants]);
    }
}
