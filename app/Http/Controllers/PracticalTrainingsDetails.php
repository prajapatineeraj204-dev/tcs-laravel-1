<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class PracticalTrainingsDetails extends Controller
{
    public function index($id){
        Session::forget('success');
        $courses=DB::table('tcs_upload_course')->find($id);
        if ($id) {
            $payment = DB::table('payments')
                ->where('course_id', $id)
                ->where('user_id', auth()->user()->id)
                ->where('status','success')
                ->first();
        }
        return view('PracticalTraining/details',compact('courses','payment'));
    }
}
