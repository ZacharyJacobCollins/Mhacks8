<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AppController extends Controller
{
  /**
  *  Show app
  */
  public function show() {
    return view('app.dashboard')
  }
}
