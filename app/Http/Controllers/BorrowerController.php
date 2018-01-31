<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;

class BorrowerController extends Controller {

    protected function registerGetStep1(Request $r) {
        return view('borrower.register.step-1');
    }

    protected function registerGetStep2(Request $r) {
        return view('borrower.register.step-2');
    }

    protected function registerGetStep3(Request $r) {
        return view('borrower.register.step-3');
    }

    protected function registerPostStep1(Request $r) {
        return redirect()->route('borrower.register.get.step-2');
    }

    protected function registerPostStep2(Request $r) {
        return redirect()->route('borrower.register.get.step-3');
    }

    protected function registerPostStep3(Request $r) {
        return view('borrower.register.step-3');
    }

}
