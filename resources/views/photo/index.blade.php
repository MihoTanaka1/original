@extends('layouts.admin')
@section('title', '絶景一覧')

@section('content')
    <div class="mycontainer">
        <div class="col-md-4 mb-5">
            <a href="{{ action('PhotoController@add') }}" role="button" class="btn btn-primary">新規作成</a>
        </div>
        
        <div class="list-area">
            @foreach($posts as $post)
                <div class="list">
                    <div class="image-list zk-photo">
                        @if ($post->photo)
                            <img src="{{ asset('storage/image/' . $post->photo) }}">
                        @endif
                    </div>
                    <div class="text-list">
                        <p class="travel-text"> 地域：{{$post->Placename}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection