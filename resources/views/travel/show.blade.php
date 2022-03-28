@extends('layouts.admin')
@section('title'){{ $travel_form->title }}@endsection

@section('content')
    <div class="mycontainer">
        <div class="left-contents">

                @if ($travel_form->image_path)
                    <img src="{{ asset('storage/image/' . $travel_form->image_path) }}">
                @endif

        </div>
        <div class="right-contents">
            <div class="col-md-8 mx-auto">
                    <div class="form-group row">
                        <div class="col-md-10">
                            <p class="show-title">{{ $travel_form->title }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="show-title2">地域</p>
                        <div class="col-md-10">
                            <p class="show-text">{{$travel_form->place}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="show-title2" for="body">本文</p>
                        <div class="col-md-10">
                           <p class="show-text">{{$travel_form->body}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="show-title2">予算</p>
                        <div class="col-md-10">
                            <p class="show-text">{{$travel_form->yosan}}</p>
                        </div>
                    </div>
                     <div class="form-group row">
                        <p class="show-title2">期間</p>
                        <div class="col-md-10">
                            <p class="show-text">{{$travel_form->kikan}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="show-title2">人数</p>
                        <div class="col-md-10">
                            <p class="show-text">{{$travel_form->ninnzuu}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <p class="show-title2">カテゴリー</p>
                        <div class="col-md-10">
                            <p class="show-text">{{$travel_form->category}}</p>
                        </div>
                    </div>
                    
            </div>            
            
        </div>
    </div>
@endsection