<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PhotoController extends Controller {

    public function index(){
       return view('photo');
    }
	
}