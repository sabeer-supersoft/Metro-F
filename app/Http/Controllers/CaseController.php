<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index(){
        return view('cases');
    }

    public function show(){
        return view('casesview');
    }
}
