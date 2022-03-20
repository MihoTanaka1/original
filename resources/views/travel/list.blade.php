@extends('layouts.admin')
@section('title', 'みんなの旅行日記')

@section('content')
    <div class="mycontainer">
        <div class="list-area">
                @foreach($posts as $post)
                    <div class="list">
                        <a href="{{route('travel.show', ['info_id' => $post->id] )}}">
                            <div class="image-list">
                                <div class="image-list-bg-travel"></div>
                                    @if ($post->image_path)
                                        <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                    @endif
                            </div>
    						<div class="text-list">
    							<p class="travel-title"> {{ str_limit($post->title, 20) }}</p>
    							<p class="travel-text"> 地域：{{ str_limit($post->place, 10) }}</p>
    						</div>
                        </a>
                    </div>
                @endforeach
        </div>
    </div>
@endsection