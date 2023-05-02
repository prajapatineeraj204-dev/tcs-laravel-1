<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use DataTables;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function chat(){
        $groups = auth()->user()->groups;

        $users = User::where('id', '<>', auth()->user()->id)->get();
        $user = auth()->user();
        // dd($groups);

        return view('chat', ['groups' => $groups, 'users' => $users, 'user' => $user]);
        // return view('chat');
     }

}
