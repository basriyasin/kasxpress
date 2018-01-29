<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;

class BorrowerController extends Controller {

    protected function registerGetStep(Request $r, $step) {
        return view('borrower.register.step-'.$step);
    }
    
    protected function registerPostStep(Request $r, $step) {
        $step = (int)preg_filter('/\D/', '', $step);
        
        return ($step >= 1 && $val <= 10)
                ? view('borrower.register.step.'.$step)
                : view('errors.404');
    }
}
