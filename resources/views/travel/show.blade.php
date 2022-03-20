@extends('layouts.admin')
@section('title'){{ $travel_form->title }}@endsection

@section('content')
    <div class="mycontainer">
        <div class="travel-photo">
            @if ($travel_form->image_path)
                <img src="{{ asset('storage/image/' . $travel_form->image_path) }}">
            @endif
        </div>
            <div class="col-md-8 mx-auto">
                    <div class="form-group row">
                        <div class="col-md-10">
                            <p class="show-title">{{ $travel_form->title }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">地域</label>
                        <div class="col-md-10">
                            <p class="show-text">{{$travel_form->place}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                           <p class="show-text">{{$travel_form->body}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">予算</label>
                        <div class="col-md-10">
                            <p class="show-text">{{$travel_form->yosan}}</p>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">期間</label>
                        <div class="col-md-10">
                            <p class="show-text">{{$travel_form->kikan}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">人数</label>
                        <div class="col-md-10">
                            <p class="show-text">{{$travel_form->ninnzuu}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">カテゴリー</label>
                        <div class="col-md-10">
                            <p class="show-text">{{$travel_form->category}}</p>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
@endsection