<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Debugbar;
use Mail;

class DeliveryController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        return view('delivery');
    }

    public function payment_review()
    {
        //add delivery address etc
        $rules = array(
            'destination' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'router_quantity' => 'required'
            );
        // dd(session());
        // die();
        $session = $request->session()->all();

        $validator = Validator::make($session, $rules);
        
        if($validator->fails()){
            return redirect('/')->withErrors($validator);
        }
        else {
            return view('payment', compact('request'));
        }    
    }

}