<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Travel;
use App\Photo;

class TopPageController extends Controller {

    public function index(){
         $posts = Travel::all();
         $photos = Photo::all()->sortByDesc('updated_at');
       return view('top', ['post' => $posts , 'photos' => $photos]);
    
    }
	
}