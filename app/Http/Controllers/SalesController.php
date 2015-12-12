<?php

namespace App\Http\Controllers;

use App\Sales;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    public function index(){
        $sales = Sales::all();
        return view('sales.index',compact('sales'));
    }
}
