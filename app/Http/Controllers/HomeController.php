<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Debugbar;
use Mail;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {


        return view('home');
    }

    public function do_order(Request $request)
    {
        //dd($request);die();
        $validate = $this->validate($request,[
            'destination' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'router_quantity' => 'required'
        ]);
        if(!$validate){
            //die('a');
            return view('order', compact('request'));
        }
        else {
            //die('b');
            return view('home');
        }
    }


}