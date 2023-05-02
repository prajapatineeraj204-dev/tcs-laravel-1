<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Events\NewMessage;

class ConversationController extends Controller
{
    // public function store()
    // {
    //     $conversation = Conversation::create([
    //         'message' => request('message'),
    //         'group_id' => request('group_id'),
    //         'user_id' => auth()->user()->id,
    //     ]);
    
    //     return $conversation->load('user');
    // }

    public function show(Request $request,$id){
        $conversation = Conversation::where("group_id",$id)->get();
        $conversation->load('user');
        return $conversation;
    }

    public function store()
    {
        $conversation = Conversation::create([
            'message' => request('message'),
            'group_id' => request('group_id'),
            'user_id' => auth()->user()->id,
        ]);
    
        $conversation->load('user');
    
        broadcast(new NewMessage($conversation))->toOthers();
    
        return $conversation->load('user');
    }

}
