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
        return view('payment_review');
    }

}