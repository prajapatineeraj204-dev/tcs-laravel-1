<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use DB;
use Session;
class PaymentController extends Controller
{
   public function index($id)
    {   
        $courses=DB::table('tcs_upload_course')->find($id);
        return view('admin.payment',compact('courses'));
    }

     public function store(Request $request)
    {   
        $input = $request->all(); 
          
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $type = $payment->card !== null ? "card" :
                        ($payment->bank !== null ? "bank" :
                        ($payment->wallet !== null ? "wallet" :
                        ($payment->vpa !== null ? "vpa" : "")));
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
                $paymenst_store=DB::table('payments')->insert([
                    'user_id'=>auth()->user()->id,
                    'course_id'=>$request->course_id,
                    'pricing'=>$request->pricing/100,
                    'razorpay_payment_id'=>$request->razorpay_payment_id,
                    'payment_type'=>$type,
                    'status'=>'success',
                ]);               
                return redirect()->route('practicalTrainingsDetails',['id'=>$request->course_id])->with('success','Payment successfully');

            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back()->with('error',$e->getMessage());
            }
        }   
    }
}
