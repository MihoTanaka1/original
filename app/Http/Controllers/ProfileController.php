<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Profile;
use App\User;

class ProfileController extends Controller {

    
    public function add(){
       return view('admin.profile-create');
    }
    
    public function index(){
       return view('admin.profile-create');
    }
    
     public function create(Request $request)
  {
     $this->validate($request,Profile::$rules);    
     $profile = new Profile;
     $form = $request->all();
      // フォームから画像が送信されてきたら、保存して、$travel->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $profile->image_path = basename($path);
      } else {
          $profile->image_path = null;
      }
      
     $profile->user_id = auth()->id();

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
      
      // データベースに保存する
      $profile->fill($form);
      $profile->save();
      
      return redirect('admin/profile-create');
  }
  
  public function edit(Request $request)
  {
      // Prpfile Modelからデータを取得する
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin/profile-edit', ['profile_form' => $profile]);
  }

  public function update(Request $request)
    {
        $this->validate($request, Profile::$rules);
        $profile= Profile::find($request->id);
        $profile_form = $request->all();
        if ($request->remove == 'true') {
            $profile_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $profile_form['image_path'] = basename($path);
        } elseif($profile->image_path != null) {
            $profile_form['image_path'] = $profile->image_path;
        } else {
            $profile_form['image_path'] = null;
        }
        
        unset($profile_form['_token']);
        unset($profile_form['image']);
        unset($profile_form['remove']);
        $profile->fill($profile_form)->save();

        return redirect()->route('profile.show', ['id' => $profile]);
    }

    public function ProfileShow(Request $request)
    {
        $profile = $request->user()->profile;
    
        return view('admin.show',['profile_form'=>$profile]);
    }

}