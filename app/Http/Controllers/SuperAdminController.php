<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use DataTables;
class SuperAdminController extends Controller
{
    public function index(Request $Request)
    {
        return view('superadmin.dashboard');
    }
}
