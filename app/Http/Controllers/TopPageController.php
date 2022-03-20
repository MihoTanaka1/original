<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Travel;

class TopPageController extends Controller {

    public function index(){
         $posts = Travel::all();
       return view('top', ['post' => $posts]);
    }
	
}