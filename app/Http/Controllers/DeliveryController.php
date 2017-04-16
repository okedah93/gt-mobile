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
        if(isset($request)){
            $validate = $this->validate($request,[
                'destination' => 'required',
                'startdate' => 'required',
                'enddate' => 'required',
                'router_quantity' => 'required'
            ]);
            if(!$validate){
                return view('delivery', compact('request'));
            }
        }
        else {
            return redirect('/');
        }
    }

    public function payment_review()
    {
        return view('payment_review');
    }

}