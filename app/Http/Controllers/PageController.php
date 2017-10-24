<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends MainController
{
     public function index(){
         self::$data['title'] .= ' | Home Page';
         return view('content.home' , self::$data);
     }
}
