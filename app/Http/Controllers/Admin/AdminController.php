<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //

    public function index(){

    	//Pegar dados do usuário logado
    	//dd(auth()->user()->name);
    	$balance = auth()->user()->balance;

    	
    	$amount = 	($balance == NULL)? 0.00 : $balance->amount;
    	
   

    	return view('admin.home.index', compact('amount'));
    }
}
