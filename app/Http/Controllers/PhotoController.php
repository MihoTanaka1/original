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
      if (isset($form['photo'])) {
        $path = $request->file('photo')->store('public/image');
        $photo->image_path = basename($path);
      } else {
          $photo->image_path = null;
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
}