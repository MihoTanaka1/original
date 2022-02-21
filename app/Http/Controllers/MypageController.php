<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class MypageController extends Controller {

    public function index(){
       return view('admin.mypage');
    }
    
    	public function profile(){
	    return view('admin.profile');
	}

}