<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticalTrainings extends Controller
{
    public function index(){
        return view('PracticalTraining/index');
    }
}

