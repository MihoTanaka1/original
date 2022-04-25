@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
    <div class="mycontainer">
            <?php $user = Auth::user(); ?>
            <a href={{ route('profile.show', ['user_id' => Auth::user()->id]) }}><p class="mymenu">プロフィール</p></a>
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