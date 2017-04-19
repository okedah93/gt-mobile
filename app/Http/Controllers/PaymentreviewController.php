<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
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
            return view('payment', compact('request'));
        }
    }

    public function do_payment(Request $request)
    {

    }
}