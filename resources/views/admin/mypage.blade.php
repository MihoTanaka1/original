@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
    <div class="mycontainer">
            <?php $user = Auth::user(); ?>
            <a href={{ route('profile.show', ['user_id' => Auth::user()->id]) }}><p class="mymenu">プロフィール</p></a>
            <h4 class="mypage-text-title">日記作成数：{{ count($user->travels) }}</h4>
                    <div class="row">
            <div class="col-md-4">
                <a href="{{ action('TravelController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('TravelController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @foreach($user->travels as $travel)
            <div class="mypost-list">
                <div class="mypost-left">
                    <div class="mypost-image">
                        <img src="{{ asset('storage/image/' . $travel->image_path) }}">
                    </div>
                </div>
                <div class="mypost-right">
                    <div class="mypost-id">{{ $travel->id }}</div>
                    <div class="mypost-title">{{ \Str::limit($travel->title, 100) }}</div>
                    <div class="mypost-body">{{ \Str::limit($travel->body, 250) }}</div>
                    <div>
                        <a href="{{ action('TravelController@edit', ['id' => $travel->id]) }}">編集</a>
                        <a href="{{ action('TravelController@delete', ['id' => $travel->id]) }}">削除</a>
                    </div>
                </div>
            </div> 
        @endforeach     

    
    </div>
@endsection