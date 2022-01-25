<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class TopPageController extends Controller {

    public function index(){
       return view('top');
    }
	
}