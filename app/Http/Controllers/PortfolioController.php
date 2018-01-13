<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of PortfolioController
 *
 * @author Ayu Nainggolan
 */
class PortfolioController extends Controller{

    public function index(){
        return view('front.portfolio');
    }
}
