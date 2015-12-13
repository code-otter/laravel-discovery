<?php

namespace Laravel\Http\Controllers;

use Laravel\Sales;
use Illuminate\Http\Request;

use Laravel\Http\Requests;
use Laravel\Http\Controllers\Controller;

class SalesController extends Controller
{
    public function index(){
        $sales = Sales::all();
        return view('sales.index',compact('sales'));
    }
}
