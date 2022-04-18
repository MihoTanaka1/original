@extends('layouts.admin')
@section('title', 'プロフィール')

@section('content')
<div class="mycontainer">
    <h1>プロフィール</h1>
    <a href={{ url('/admin/profile-create') }}><p class="mymenu">新規作成</p></a>
    @if ($profile_form->image_path)
        <img src="{{ asset('storage/image/' . $profile_form->image_path) }}">
    @endif
    
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
