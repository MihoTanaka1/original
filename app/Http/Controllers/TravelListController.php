<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelListController extends Controller
{
     public function index(Request $request)
    {
        $posts = Travel::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }

        // また View テンプレートに headline、 posts、という変数を渡している
        return view('travel.list', ['headline' => $headline, 'posts' => $posts]);
    }
    
    public function show($id)
    {
        $info = Travel::find($id);
        return view('travel/show',['travel_form' => $info]);
    }
}
