<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Mentor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function show($mentorId)
    {
        $mentor = Mentor::find($mentorId);
        if (!$mentor) {
            abort(404, 'user not found');
        }
        return view('mentor.appointment', compact('mentor'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
            'post_code' => 'required',
            'state' => 'required',
            'area' => 'required',
            'time' => 'required',
            'date' => 'required|date',
        ]);

        // convert time to 12 hr 
        $time = Carbon::createFromFormat('H:i', $request->time)->format('h:i A');
        $checkBooking = Appointment::where('mentor_id', $request->mentorId)
        ->where('time', $request->time)
        ->where('date', $request->date)
        ->first();
        if($checkBooking){
            return redirect()->back()->with('check_booking', 'Slot is not available on date: '.$request->date. ' time: '. $time);
        }
        $appointment = new Appointment();
        $appointment->mentor_id = $request->mentorId;
        $appointment->name = $request->input('name');
        $appointment->phone = $request->input('phone');
        $appointment->email = $request->input('email');
        $appointment->city = $request->input('city');
        $appointment->post_code = $request->input('post_code');
        $appointment->state = $request->input('state');
        $appointment->area = $request->area; 
        $appointment->date = $request->input('date');   
        $appointment->time =$request->time;
        $appointment->save();

        // Mail::to($appointment->email)->send(new VacancieApplyMail($apply));
        
        return redirect()->back()->with('success', 'Appointment booked successfully');
    }
}
