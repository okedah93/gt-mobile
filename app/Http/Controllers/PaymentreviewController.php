<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Debugbar;
use Mail;
use DB;

class PaymentreviewController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {

    }

    public function do_payment(Request $request)
    {
        dump($request);
        die('a');
    	//add delivery address etc
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
            return view('payment_review', compact('request'));
        }    
    }

    public function do_booking(Request $request)
    {
    	//add delivery address etc
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
        	//insert database
            DB::table('orders')->insert(
                    [
                        'destination'       => $session['destination'],
                        'startdate'         => $session['startdate'],
                        'enddate'           =>$session['enddate'],
                        'router_quantity'   => $session['router_quantity'],
                        'send_method'       => $session['router_quantity'],
                        'send_courier'      => $session['router_quantity'],
                        'send_address1'     => $session['router_quantity'],
                        'send_address2'     => $session['router_quantity'],
                        'send_postCode'     => $session['router_quantity'],
                        'send_province'     => $session['router_quantity'],
                        'get_method'        => $session['router_quantity'],
                        'get_courier'       => $session['router_quantity'],
                        'get_address1'      => $session['router_quantity'],
                        'get_address2'      => $session['router_quantity'],
                        'get_postCode'      => $session['router_quantity'],
                        'get_province'      => $session['router_quantity'],
                        'contactName'       => $session['router_quantity'],
                        'phoneNumber'       => $session['router_quantity'],
                        'email'             => $session['router_quantity'],
                        'accountName'       => $session['router_quantity'],
                        'passportNo'        => $session['router_quantity'],
                        'bankName'          => $session['router_quantity'],
                        'acctNo'            => $session['router_quantity'],
                        'paymentMethod'     => $session['router_quantity'],
                        'totalTransaction'  => $session['router_quantity'],
                    ]
                );

        	Session::flash('msg','Booking berhasil di kirim. Terima Kasih Telah Memilih Kami.');
            return redirect('/');
        }    
    }


}