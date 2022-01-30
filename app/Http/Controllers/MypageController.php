<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class MypageController extends Controller {

    public function index(){
       return view('mypage');
    }


    public function create(){
       return view('create');
    }
	
	public function profile(){
	    return view('profile');
	}
	
}