<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\User;
class OrderController extends Controller
{
       public function index()
      {
          $users =  User::get();
          return view('admin.order.order', compact('users'));
      }   
}
