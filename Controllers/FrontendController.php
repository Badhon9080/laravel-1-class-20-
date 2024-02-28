<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     /*
     public function homepage(){
        echo "Home Page";
     }
     */
    public function homepage(){
     return view('welcome');
  }
/*
     public function aboutUs(){
          echo "About US";
     }
     */
    public function aboutUs(){
     return view('about');
}

function getUser($name){
     echo "hellow $name";
}
 


}
