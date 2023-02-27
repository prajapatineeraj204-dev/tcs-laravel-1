<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
       
    }

    public function addCategory(){
        return view('admin.category');
    }
}
