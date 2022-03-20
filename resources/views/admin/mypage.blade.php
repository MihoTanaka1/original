@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
    <div class="container">
        <h3>マイページ</h3>
        
        <a href="/travel/index">作成日記一覧</a>
        <a href="/admin/profile">プロフィール</a>
        
        <h4 class="mypage-text-title">日記作成数</h4>
    </div>
@endsection