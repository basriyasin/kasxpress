<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct() {
//        //$this->middleware('auth');
//    }

    protected function setLang(Request $r, $lang) {
        if (in_array($lang, config('app.supported_locale'))) {
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

    protected function aboutPage() {
        return view('front.about');
    }

    protected function howItWorksPage() {
        return view('front.howItWorks');
    }

    protected function showLogin() {
        return view('auth.login');
    }
    
    protected function doLogin(){
        echo 'wait';
    }
    
    protected function showRegister() {
        return view('auth.register');
    }

}
