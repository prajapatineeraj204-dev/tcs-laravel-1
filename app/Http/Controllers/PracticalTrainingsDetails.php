<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
class PracticalTrainingsDetails extends Controller
{
    public function index($id){
        Session::forget('success');
        $courses=DB::table('tcs_upload_course')->find($id);
        if(Auth::check()){
            $payment=DB::table('payments')->where('course_id',$courses->id)->where('user_id',Auth::user()->id)->first();
        }
        return view('PracticalTraining/details',compact('courses','payment'));
    }
}
