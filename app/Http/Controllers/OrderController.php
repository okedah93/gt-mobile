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
        return view('order');
    }

    public function delivery()
    {
    	return view('delivery');
    }


}