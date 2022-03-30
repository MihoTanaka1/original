<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Travel;

class MypageController extends Controller {

  public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Travel::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Travel::all();
      }
      return view('admin.mypage', ['posts' => $posts, 'cond_title' => $cond_title]);
    }


    
    	public function profile(){
	    return view('admin.profile');
	}

}