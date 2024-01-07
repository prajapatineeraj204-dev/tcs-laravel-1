<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticalTrainingsDetails extends Controller
{
    public function index(){
        return view('PracticalTraining/details');
    }
}
