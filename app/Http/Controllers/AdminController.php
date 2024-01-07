<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use DataTables;

class AdminController extends Controller
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
  public function index(Request $Request)
  {
    return view('admin.dashboard');
  }

  public function users()
  {
    $userlist =  User::get();
    return view('admin.users', compact('userlist'));
  }

  public function adduser(Request $Request)
  {
    $user =  new User();
    $user->name =  $Request->name;
    $user->password = $Request->password;
    $user->email = $Request->email;
    $user->phone = $Request->phone;
    $user->role = $Request->role;
    $user->save();
    return redirect('admin/users');
  }

  public function useredit(Request $Request, $id)
  {
    $newid = base64_decode($id);
    $user =  User::where('id', $newid)->get()->first();
    return view('admin.useredit', compact('user'));
  }

  public function userupdate(Request $request)
  {
    $userid = $request->post('userid');
    $user =  User::where('id', $userid)->get()->first();
    $user->name =  $request->post('name');
    $user->email =  $request->post('email');
    $user->phone =  $request->post('phone');
    $user->role =  $request->post('role');
    $user->save();
    return redirect('admin/users')->with('status', 'User Updated Successfully');
  }

  public function userdelete(Request $request, $id)
  {
    $newid = base64_decode($id);
    $user =  User::where('id', $newid)->get()->first();
    $user->delete();
    return redirect('admin/users');
  }

  public function uploadCourse()
  {
    return view('admin.uploadCourse');
  }
}
