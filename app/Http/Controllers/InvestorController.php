<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;

class InvestorController extends Controller {

    
    protected function account(){
        return view('investor.account');
    }
    
    
    protected function invest() {
        return view('errors.404');
    }
    
    
    protected function deposit() {
        return view('errors.404');
    }
    
    
    protected function portfolio() {
        return view('errors.404');
    }
    
    
}
