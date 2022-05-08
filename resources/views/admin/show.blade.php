@extends('layouts.admin')
@section('title', 'プロフィール')

@section('content')
    <div class="mycontainer">
        <a href={{ action('ProfileController@edit' , ['id' => $profile_form->id]) }}><p class="mymenu">編集</p></a>
        <div class="left-contents">
            @if ($profile_form->image_path)
                <img src="{{ asset('storage/image/' . $profile_form->image_path) }}">
            @endif
        </div>
        <div class="right-contents">
            <div class="col-md-8 mx-auto">
                @if ($profile_form)
                <div class="form-group row">
                    <p class="show-title2">名前</p>
                    <div class="col-md-10">
                        <p class="show-text">{{$profile_form->name}}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <p class="show-title2" for="body">性別</p>
                    <div class="col-md-10">
                       <p class="show-text">{{$profile_form->gender}}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <p class="show-title2">年齢</p>
                    <div class="col-md-10">
                        <p class="show-text">{{$profile_form->age}}</p>
                    </div>
                </div>
                 <div class="form-group row">
                    <p class="show-title2">自己紹介</p>
                    <div class="col-md-10">
                        <p class="show-text">{{$profile_form->introduction}}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection