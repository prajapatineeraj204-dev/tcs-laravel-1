<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\TcsUploadCourse;
use DataTables;
use DB;



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

  public function upload_course(Request $request)
  { 
       $request->validate([
        'file.*' => 'required|mimes:mp4,mov,avi',
        ]);
                $arrayPlaylist=implode(',',$request->playlist_name);

        $uploadedVideos = [];

        foreach ($request->file('file') as $file) {
            $name = $file->getClientOriginalName();
            $file->move('video', $name);
            $uploadedVideos[] = 'video/' . $name;
        }
        $implodedPaths = implode(',', $uploadedVideos);
        
        $res = DB::table('tcs_upload_course')->insert([
            'course_name' => $request->course_name,
            'course_desc' => $request->course_desc,
            'scope' => $request->scope,
            'career' => $request->career,
            'faculty_name' => $request->faculty_name,
            'duration' => $request->duration,
            'validity' => $request->validity,
            'pricing' => $request->pricing,
            'playlist_name' => $arrayPlaylist,
            'video' => $implodedPaths,
        ]);
        if ($res) {
            return redirect()->back()->with('success', 'Course and videos uploaded successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to upload course and videos.');
        }

  }

  public function courseAll()
  {
    $course=DB::table('tcs_upload_course')->get();
    return view('admin.courseshow',compact('course'));
  }

  public function courseEdit($id)
  {
    $course=DB::table('tcs_upload_course')->where('id',$id)->first();
    return view('admin.uploadCourse',compact('course'));    
  }

  public function courseUpdate(Request $request,$id){

    $arrayPlaylist=implode(',',$request->playlist_name);
        
      $res=TcsUploadCourse::find($id)->update([
        'course_name'=>$request->course_name,
        'course_desc'=>$request->course_desc,
        'scope'=>$request->scope,
        'career'=>$request->career,
        'faculty_name'=>$request->faculty_name,
        'duration'=>$request->duration,
        'validity'=>$request->validity,
        'pricing'=>$request->pricing,
        'playlist_name'=>$arrayPlaylist,

      ]);
      if($res){
        return redirect()->back()->with('success','Course Update Successfully');
      }
  }

  public function courseDelete($id){
    $course=TcsUploadCourse::find($id)->delete();
    return redirect()->back()->with('success','Course delete Successfully');
  }
}
