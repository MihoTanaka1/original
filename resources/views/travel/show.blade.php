@extends('layouts.admin')
@section('title'){{ $travel_form->title }}@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="travel-show-img">
                {<img src="{{ asset('storage/image/' . $post->image_path) }}">
                </div>
            
            <div class="col-md-8 mx-auto">
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <h1>{{ $travel_form->title }}</h1>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">地域</label>
                        <div class="col-md-10">
                            <p>{{$travel_form->place}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                           <p>{{$travel_form->body}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">予算</label>
                        <div class="col-md-10">
                            <p>{{$travel_form->yosan}}</p>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">期間</label>
                        <div class="col-md-10">
                            <p>{{$travel_form->kikan}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">人数</label>
                        <div class="col-md-10">
                            <p>{{$travel_form->ninnzuu}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">カテゴリー</label>
                        <div class="col-md-10">
                            <p>{{$travel_form->category}}</p>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
@endsection