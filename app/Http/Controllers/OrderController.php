<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;


class OrderController extends Controller
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

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            //die('b');
            return redirect('/')->withErrors($validator);
        }
        else {
            //die('a');
            //data belum di store dr submit button order page
            return view('delivery', compact('request'));
        }
    }
    public function do_delivery(Request $request)
    {
       $rules = array(
            'destination' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'router_quantity' => 'required'
            );

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            //die('b');
            return redirect('/')->withErrors($validator);
        }
        else {
            //die('a');
            return view('delivery', compact('request'));
        }
    }
}