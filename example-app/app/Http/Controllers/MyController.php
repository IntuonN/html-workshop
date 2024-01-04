<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public $myvar = "Hello world!";
    function _construct(){ //Mycontroller

    }

    public function index(){
        return view('myfolder.home');
        // echo $this->myvar;
    }

    public function store(Request $req){
        $data = ['val_a' => 'Hello World'];
        $data['val_b'] = "Laraval";
        return view('myfolder.mypage',$data);
    }
}
