<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index(){
        return view ("hello.index");
    }
    public function perkenalan($nama) {
        return view("hello.perkenalan")->with("nama",$nama);
    }
}
