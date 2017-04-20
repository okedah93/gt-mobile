<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Debugbar;
use Mail;

class PaymentreviewController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $rules = array(
            'destination' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'router_quantity' => 'required'
            );
        // dd(session());
        // die();
        $validator = Validator::make($request->session()->all(), $rules);
        
        if($validator->fails()){
            //die('b');
            return redirect('/')->withErrors($validator);
        }
        else {
            //die('a');
            return view('payment_review', compact('request'));
        }
    }

    public function do_payment(Request $request)
    {
        die;
    	//add delivery address etc
        $rules = array(
            'destination' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'router_quantity' => 'required'
            );
        $session = $request->session()->all();
        // dd($session);
        // die();

        $validator = Validator::make($session, $rules);
        
        if($validator->fails()){
            return redirect('/')->withErrors($validator);
        }
        else {
            return view('payment_review', compact('request'));
        }    
    }

    public function do_booking(Request $request)
    {
    	//add delivery address etc
        $rules = array(
            'destination' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'router_quantity' => 'required'
            );
        $session = $request->session()->all();
        // dd($session);
        // die();

        $validator = Validator::make($session, $rules);
        
        if($validator->fails()){
            return redirect('/')->withErrors($validator);
        }
        else {
        	//insert database
            DB::table('orders')->insert(
                    [
                        'destination' => $session['destination'];
                    ]
                );

        	Session::flash('msg','Booking berhasil di kirim. Terima Kasih Telah Memilih Kami.');
            return redirect('/');
        }    
    }


}