<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Debugbar;
use Mail;

class OrderController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $validate = $this->validate($request,[
            'destination' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'router_quantity' => 'required'
        ]);
        if(!$validate){
            return view('order', compact('request'));
        }
        else {
            return redirect('/');
        }
    }

}