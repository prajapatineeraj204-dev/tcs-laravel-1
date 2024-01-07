<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MentorAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MentorAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('mentor.auth');
    }
    public function login(){
        return view('mentor.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'email|required|unique:mentor_auth',
            'phone' => 'required',
            'password' => 'required',
        ]);
        $mentor = new MentorAuth();
        $mentor->full_name = $request->full_name;
        $mentor->email = $request->email;
        $mentor->phone = $request->phone;
        $mentor->password = Hash::make($request->password);
        $mentor->save();

        return back()->with('success', 'Registration successful');
    }

    public function loginRequest(Request $request){
        $login= $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        $user = MentorAuth::where('email', $login['email'])->first();
        // dd($user);
        if($user && Hash::check($login['password'], $user->password)){
            // Auth::login($user);
            return redirect()->intended('/');
        }
        return redirect()->back()->with('error', 'Invalid login attempt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
