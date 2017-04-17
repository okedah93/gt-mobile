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
            return view('order', compact('request'));
        }
    }
}