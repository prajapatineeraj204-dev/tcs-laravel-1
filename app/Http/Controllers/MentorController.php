<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use Illuminate\Support\Facades\DB;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mentorTypes = ['Mentor to Students', 'Both of the above'];

        $mentors = DB::table('mentors')
            ->whereIn('mentor_type', $mentorTypes)
            ->get();


        return view('mentor.student', ['mentors' => $mentors]);
    }
    public function Professionals()
    {
        $mentorTypes = ['mentor.professionals', 'Both of the above'];

        $mentors = DB::table('mentors')
            ->whereIn('mentor_type', $mentorTypes)
            ->get();


        return view('mentor.professionals', ['mentors' => $mentors]);
    }
    public function profile(){
        $phone =  auth()->user()->phone;
        $mentorProfile = DB::table('mentors')
        ->where('phone', $phone)
        ->get();
        $mentorProfile = $mentorProfile[0];
        return view('mentor.profile', compact('mentorProfile'));
        // dd($mentorProfile[0]->first_name);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mentor.apply');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            '*' => 'required',
            'highest_degree' => 'array',
            'highest_degree.*' => 'string',
            'forms_of_content' => 'array',
            'forms_of_content.*' => 'string',
            'specific_tool_topic' => 'array',
            'specific_tool_topic.*' => 'string',
            'mentorship_sessions' => 'array',
            'mentorship_sessions.*' => 'string',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|between:500,1024|dimensions:min_width: 200,min_height:200'
        ]);

        $file = $request->file('profile_image');
        $profile_image = str_replace(" ", "-", $request->first_name) . "_" . $request->first_name . "_" . $request->last_name . "_" . time() . "." . $file->getClientOriginalExtension();
        $destinationPath = public_path('Mentor/profile');
        $file->move($destinationPath, $profile_image);

        // $file->move($destinationPath,$profile_image);
        // $currentDate = now()->format('Y-m-d');

        // $filename = Str::slug($request['first_name'] . '-' . $request['last_name'] . '-' . $currentDate) . '.' . $request->file('image')->getClientOriginalExtension();


        // $profile_image = $request->file('image')->storeAs('public/images/mentor/profile', $filename);

        // $mentor=Mentor::findOrFail($request->vacancie_id);
        $highest_degree = implode(',', $validated['highest_degree']);
        $forms_of_content = implode(',', $validated['forms_of_content']);
        $specific_tool_topic = implode(',', $validated['specific_tool_topic']);
        $mentorship_sessions = implode(',', $validated['mentorship_sessions']);
        $apply = new Mentor();
        // $apply->user_id = auth()->user()->id; 
        $apply->first_name = $request->first_name;
        $apply->last_name = $request->last_name;
        $apply->email = auth()->user()->email;
        $apply->phone =  auth()->user()->phone;
        $apply->date_of_birth = $request->dob;
        $apply->city_town = $request->city_town;
        $apply->pincode = $request->pincode;
        $apply->state = $request->state;
        $apply->profile_image = $profile_image ?? null;
        $apply->mentor_type = $request->mentor_type;
        $apply->current_company = $request->current_company;
        $apply->job_title = $request->job_title;
        $apply->highest_degree = $highest_degree;
        $apply->domain_work = $request->domain_work;
        $apply->linkedin_profile = $request->linkedin_profile;
        $apply->career_guidance = $request->career_guidance;
        $apply->work_experience = $request->work_experience;
        $apply->forms_of_content = $forms_of_content;
        $apply->specific_tool_topic = $specific_tool_topic;
        $apply->mentorship_sessions = $mentorship_sessions;
        $apply->post_qualification_experience = $request->post_qualification_experience;
        $apply->interview_processes_preparation = $request->interview_processes_preparation;
        $apply->save();
        return back()->with('success', 'Your application is successfully submitted.');
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
