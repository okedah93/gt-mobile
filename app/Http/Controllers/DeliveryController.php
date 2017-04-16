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
        return view('payment_review');
    }

}