<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Travel;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\History;

class TravelController extends Controller
{

    public function add(){
       return view('travel.create');
    }
    
    public function list(){
       return view('travel.list');
    }
 
  public function create(Request $request)
  {
     $this->validate($request,Travel::$rules);    
     $travel = new Travel;
     $form = $request->all();
      // フォームから画像が送信されてきたら、保存して、$travel->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $travel->image_path = basename($path);
      } else {
          $travel->image_path = null;
      }
 
     $travel->user_id = auth()->id();
 
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
        $this->validate($request, Travel::$rules);
        $travel= Travel::find($request->id);
        $travel_form = $request->all();
        if ($request->remove == 'true') {
            $travel_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $travel_form['image_path'] = basename($path);
        } else {
            $travel_form['image_path'] = $travel->image_path;
        }

        unset($travel_form['_token']);
        unset($travel_form['image']);
        unset($travel_form['remove']);
        $travel->fill($travel_form)->save();

        // 以下を追記
        $history = new History();
        $history->travel_id = $travel->id;
        $history->edited_at = Carbon::now();
        $history->save();

        return redirect('travel/index');
    }

 public function delete(Request $request)
  {
      // 該当するNews Modelを取得
      $travel = Travel::find($request->id);
      // 削除する
      $travel->delete();
      return redirect('travel/index/');
  }  

}