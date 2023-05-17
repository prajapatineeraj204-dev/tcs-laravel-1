<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\GroupCreated;
use App\Models\Group;

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

}
