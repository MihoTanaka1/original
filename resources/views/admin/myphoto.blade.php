@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
    <div class="mycontainer">
        <?php $user = Auth::user(); ?>
            <div class="col-md-4">
                <a href="{{ action('PhotoController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
        @foreach($user->photo as $photo)
            <div class="mypost-list">
                <div class="mypost-left">
                    <div class="mypost-image">
                        <img src="{{ asset('storage/image/' . $photo->photo) }}">
                    </div>
                </div>
                <div class="mypost-right">
                    <div class="mypost-title">{{ \Str::limit($photo->Placename, 100) }}</div>
                    <div class"mypost-edit">
                        <a href="{{ action('PhotoController@delete', ['id' => $photo->id]) }}">削除</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection