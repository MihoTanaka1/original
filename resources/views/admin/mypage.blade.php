@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
    <div class="container">
        <h3>マイページ</h3>
            <a href="/travel/index"><p class="mymenu">作成日記一覧</p></a>
            <a href="/admin/profile"><p class="mymenu">プロフィール</p></a>
            
            <h4 class="mypage-text-title">日記作成数</h4>
    </div>
@endsection