<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function home() {

      $name= 'Matthew';
      return view('pages.home' , compact('name'));
    }
}
