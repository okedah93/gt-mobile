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
        if(isset($request)){
            $validate = $this->validate($request,[
                'destination' => 'required',
                'startdate' => 'required',
                'enddate' => 'required',
                'router_quantity' => 'required'
            ]);
            if(!$validate){
                return view('order', compact('request'));
            }
        }
        else {
            return redirect('/');
        }
    }
    public function do_delivery(Request $request)
    {
        // foreach($request->all() as $val){
        //     echo($val);
        // }
        // dump($request);
        // die();
        $validate = $this->validate($request,[
            'destination' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'router_quantity' => 'required'
        ]);
        
        if(!$validate){
            //die('a');
            return view('delivery', compact('request'));
        }
        else {
            //die('b');
            return view('home');
        }
    }
}