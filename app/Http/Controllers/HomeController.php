<?php
namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
class HomeController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        return View::make('home');
    }

    public function do_order(Request $request)
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
            session([
                'destination'       =>  $request['destination'],
                'startdate'         =>  $request['startdate'],
                'enddate'           =>  $request['enddate'],
                'router_quantity'   =>  $request['router_quantity'],
            ]);
            return view('order', compact('request'));
        }
    }
}