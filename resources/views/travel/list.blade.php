@extends('layouts.admin')
@section('title', '旅行日記一覧')

@section('content')
<div class="mycontainer">
  <div class="travel-list">
   @if (!is_null($headline))
        <article class="travel-list-item">
          <div class="travel-list-img">
             @if ($headline->image)
               <img src="{{ asset('storage/image/' . $headline->image) }}" alt="">
             @endif
          </div>
          <div class="title p-2">
            <h2>{{ str_limit($headline->kikan, 40) }}</h2>
            <p>{{ str_limit($headline->place, 40) }}</p>
        </article>
    @endif
    
  </div>
</div>