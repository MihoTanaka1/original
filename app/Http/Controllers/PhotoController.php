<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Photo;
use App\Http\Controllers\Controller;

class PhotoController extends Controller {

    public function index(){
       return view('photo.index');
    }
	
	  public function add()
  {
      return view('photo/create');
  }
	
    public function create(Request $request)
  {
     $this->validate($request,Photo::$rules);    
     $photo = new Photo;
     $form = $request->all();
    // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $photo->photo = basename($path);
      } else {
          $photo->photo = null;
      }
 
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      
      // データベースに保存する
      $photo->fill($form);
      $photo->save();
    
    return redirect('photo/create');
  }  
  public function edit(Request $request)
  {
      // News Modelからデータを取得する
      $photo = Photo::find($request->id);
      if (empty($photo)) {
        abort(404);    
      }
      return view('photo.edit', ['photo_form' => $photo]);
  }

  public function update(Request $request)
  {
      // Validationをかける
      $this->validate($request, Photo::$rules);
      // News Modelからデータを取得する
      $photo = Photo::find($request->id);
      // 送信されてきたフォームデータを格納する
      $photo_form = $request->all();
      if ($request->remove == 'true') {
          $photo_form['image'] = null;
      } elseif ($request->file('image')) {
          $path = $request->file('image')->store('public/image');
          $photo_form['image'] = basename($path);
      } else {
          $photo_form['image'] = $photo->image_path;
      }

      unset($photo_form['image']);
      unset($photo_form['remove']);
      unset($photo_form['_token']);
      // 該当するデータを上書きして保存する
      $photo->fill($photo_form)->save();
      return redirect('photo');
  }
}