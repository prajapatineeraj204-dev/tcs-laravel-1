<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use DB;
use Session;
use Auth;
class PracticalTrainingsDetails extends Controller
{
    public function index($id){
        Session::forget('success');
        $courses=DB::table('tcs_upload_course')->find($id);
        $payment=DB::table('payments')->where('course_id',$courses->id)->first();
        if($payment!=null){
            $payment=DB::table('payments')->where('course_id',$courses->id)->where('status','success')->where('user_id',Auth::user()->id)->first();
        }
        //dd($payment);
        if($payment==null)
        {
            return view('PracticalTraining/details',compact('courses'));
        }
            return view('PracticalTraining/details',compact('courses','payment'));

    }

    public function courseVideo($id)
    {   $id=Crypt::decrypt($id);
        $courses=DB::table('tcs_upload_course')->find($id);
        return view('PracticalTraining.course_video',compact('courses'));
    }
}
