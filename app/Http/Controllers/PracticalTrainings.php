<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PracticalTrainings extends Controller
{
    public function index(){
        $courses=DB::table('tcs_upload_course')->get();
        return view('PracticalTraining/index',compact('courses'));
    }

   
}

