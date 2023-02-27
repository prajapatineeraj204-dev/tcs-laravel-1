<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\UseraddressModel;

class UseraddressController extends Controller
{
    public function index(Request $request,$userid)
    {
        $user = UseraddressModel::where('userid',$userid)->get()->first();
        // dd($user);
        return view('Useraddress',compact('user','userid'));
    }


    public function useraddressupdate(Request $request)
    {
        $userid = $request->post('userid');
        $user =  UseraddressModel::where('userid',$userid)->get()->first(); 
        if(!$user){
            $user =  new UseraddressModel();
            $user->userid =  $request->post('userid');
        }
        $user->address1 =  $request->post('address1');
        $user->address2 =  $request->post('address2');
        $user->city =  $request->post('city');
        $user->state =  $request->post('state');
        $user->pincode =  $request->post('pincode');        
        $user->save();
        return redirect('/home')->with('status','User Address Updated Successfully');  
    }


    public function Alluserdata()
    {
        $userdata = DB::table('users')->join('useraddress','users.id','=','useraddress.userid')->select('users.name','users.email', 'users.phone','useraddress.*')->get();
        dd($userdata);
    }
}
