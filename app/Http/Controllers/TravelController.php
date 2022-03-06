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
public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $travel = Travel::find($request->id);
      if (empty($travel)) {
        abort(404);    
      }
      return view('travel.edit', ['travel_form' => $travel]);
  }

  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Travel::$rules);
      // News Modelからデータを取得する
      $travel = Travel::find($request->id);
      // 送信されてきたフォームデータを格納する
      $travel_form = $request->all();
      if ($request->remove == 'true') {
          $travel_form['image'] = null;
      } elseif ($request->file('image')) {
          $path = $request->file('image')->store('public/image');
          $travel_form['image'] = basename($path);
      } else {
          $travel_form['image'] = $photo->image_path;
      }

      unset($travel_form['image']);
      unset($travel_form['remove']);
      unset($travel_form['_token']);
      // 該当するデータを上書きして保存する
      $travel->fill($travel_form)->save();
      return redirect('travel/index');
  }    

}