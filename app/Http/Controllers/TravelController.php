<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function add(){
       return view('travel.create');
    }

public function create(Request $request)
  {
      // travel/createにリダイレクトする
      return redirect('travel/create');
  }  
}
