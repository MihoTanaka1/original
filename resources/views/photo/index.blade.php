@extends('layouts.admin')
@section('title', '絶景一覧')

@section('content')
    <div class="mycontainer">
        <div class="col-md-4">
            <a href="{{ action('PhotoController@add') }}" role="button" class="btn btn-primary">新規作成</a>
        </div>
        
        <div class="list-area">
            <div class="list">
                <div class="image-list">
                    <div class="image-list-phoo"></div>
                        @if ($photo_form->image_path)
                            <img src="{{ asset('storage/image/' . $photo_form->image_path) ) }}">
                        @endif
                </div>
                <div class="text-list">
                    <p class="photo-text"> {{ $photo_form->placename }}</p>
                </div>
        </div>
    </div>
@endsection