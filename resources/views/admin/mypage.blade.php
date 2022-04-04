@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
    <div class="mycontainer">

            <a href={{ url('/admin/profile') }}><p class="mymenu">プロフィール</p></a>
            
            <h4 class="mypage-text-title">日記作成数：{{ count($posts) }}</h4>
                    <div class="row">
            <div class="col-md-4">
                <a href="{{ action('TravelController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('TravelController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">タイトル</th>
                                <th width="40%">本文</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $travel)
                                <tr>
                                    <th>{{ $travel->id }}</th>
                                    <td>{{ \Str::limit($travel->title, 100) }}</td>
                                    <td>{{ \Str::limit($travel->body, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('TravelController@edit', ['id' => $travel->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('TravelController@delete', ['id' => $travel->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection