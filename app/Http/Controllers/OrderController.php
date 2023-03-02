<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
       public function index()
      {
          return view('admin.order.order');
      }  
}
