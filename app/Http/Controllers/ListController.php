<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Travel;


class ListController extends Controller
{
  public function add()
  {
      return view('create');
  }

  public function create(Request $request)
  {
      $this->validate($request, Travel::$rules);
      
      $news = new News;
      $form = $request->all();
      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
        $news->image_path = Storage::disk('s3')->url($path);
      } else {
          $news->image_path = null;
      }
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      // データベースに保存する
      $news->fill($form);
      $news->save();
      return redirect('create');
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
      return view('list', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
 public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $travel = Travel::find($request->id);
      if (empty($travel)) {
        abort(404);    
      }
      return view('admin.news.edit', ['news_form' => $news]);
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
          $travel_form['image_path'] = null;
      } elseif ($request->file('image')) {
          $path = $request->file('image')->store('public/image');
          $travel_form['image_path'] = basename($path);
      } else {
          $news_form['image_path'] = $travel->image_path;
      }

      unset($travel_form['image']);
      unset($travel_form['remove']);
      unset($travel_form['_token']);
      // 該当するデータを上書きして保存する
      $travel->fill($travel_form)->save();
        // 以下を追記


        return redirect('admin/list/');
    }
}