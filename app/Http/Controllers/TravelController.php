<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Travel;
use App\Http\Controllers\Controller;

class TravelController extends Controller
{
    public function add(){
       return view('travel.create');
    }

  public function create(Request $request)
  {
     $this->validate($request,Travel::$rules);    
     $travel = new Travel;
     $form = $request->all();
      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $travel->image_path = basename($path);
      } else {
          $travel->image_path = null;
      }
 
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      
      // データベースに保存する
      $travel->fill($form);
      $travel->save();
      
      return redirect('travel/create');
  }
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
      return view('travel.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
}