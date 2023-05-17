<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\GroupCreated;
use App\Models\Group;
use App\Models\User;
use DB;

class GroupController extends Controller
{
    // public function store()
    // {
    //     $group = Group::create(['name' => request('name')]);
    
    //     $users = collect(request('users'));
    //     $users->push(auth()->user()->id);
    
    //     $group->users()->attach($users);
    
    //     return $group;
    // }

    public function store()
    {
        $group = Group::create(['name' => request('name')]);
    
        $users = collect(request('users'));
        $users->push(auth()->user()->id);
    
        $group->users()->attach($users);
        broadcast(new GroupCreated($group));
    
        return $group;
    }

    public function show(Request $request, $id){
        $group = Group::FindOrFail($id);
        $group->load("users");
        return $group;
    }

    public function update(Request $request, $id){
        $group = Group::FindOrFail($id);
        DB::table('group_user')->where('group_id',$id)->where("user_id",$request->user_id)->delete();
        $group = Group::FindOrFail($id);
        $group->load("users");
        return $group;
    }

    public function edit(Request $request,$id){
        $group = Group::FindOrFail($id);
        $group->users()->toOther();
        return $group;
    }
}
