<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Debugbar;
use Mail;
use Input;

class DeliveryController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

    }

    public function do_delivery(Request $request)
    {
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
            return view('delivery', compact('request'));
        }
    }
}