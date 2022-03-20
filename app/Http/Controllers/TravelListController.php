<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelListController extends Controller
{
     public function index(Request $request)
    {
        $posts = Travel::all()->sortByDesc('updated_at');

        // また View テンプレートに  posts、という変数を渡している
        return view('travel.list', [ 'posts' => $posts]);
    }
    
    public function show($id)
    {
        $info = Travel::find($id);
        return view('travel.show',['travel_form' => $info]);
    }
}
