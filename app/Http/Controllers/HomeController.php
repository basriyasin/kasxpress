<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller {
    
    protected function setLang(Request $r, $lang) {
        if(in_array($lang, config('app.supported_locale'))) {
            Session::put('lang', $lang);
            App::setLocale($lang);
        }
        
        return redirect()->back();
    }
    
    
    protected function index() {
        return view('front.index');
    }
    
    protected function borrowPage() {
        return view('front.borrow');
    }
    
    protected function aboutPage(){
        return view('front.about');
    }
}
