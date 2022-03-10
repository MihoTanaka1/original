@extends('layouts.admin')
@section('title', '旅行日記の新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>旅行日記の新規作成</h2>
                <form action="{{ action('TravelController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">地域</label>
                        <div class="col-md-10">
                            <label><input type="radio" class="radio" name="place" value="1">北海道</label>
                            <label><input type="radio" class="radio" name="place" value="2">東北</label>
                            <label><input type="radio" class="radio" name="place" value="3">関東</label>
                            <label><input type="radio" class="radio" name="place" value="4">中部</label>
                            <label><input type="radio" class="radio" name="place" value="5">関西</label>
                            <label><input type="radio" class="radio" name="place" value="6">中国</label>
                            <label><input type="radio" class="radio" name="place" value="7">四国</label>
                            <label><input type="radio" class="radio" name="place" value="8">九州</label>
                            <label><input type="radio" class="radio" name="place" value="9">沖縄</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">予算</label>
                        <div class="col-md-10">
                            <label><input type="radio" class="radio" name="yosan" value="1">～1万円</label>
                            <label><input type="radio" class="radio" name="yosan" value="5">1～5万円</label>
                            <label><input type="radio" class="radio" name="yosan" value="10">5～10万円</label>
                            <label><input type="radio" class="radio" name="yosan" value="15">10～15万円</label>
                            <label><input type="radio" class="radio" name="yosan" value="16">15万円～</label>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">期間</label>
                        <div class="col-md-10">
                            <label><input type="radio" class="radio" name="kikan" value="1">日帰り</label>
                            <label><input type="radio" class="radio" name="kikan" value="2">1泊2日</label>
                            <label><input type="radio" class="radio" name="kikan" value="3">2泊3日</label>
                            <label><input type="radio" class="radio" name="kikan" value="4">3泊4日</label>
                            <label><input type="radio" class="radio" name="kikan" value="5">4泊5日</label>
                            <label><input type="radio" class="radio" name="kikan" value="6">5泊以上</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">人数</label>
                        <div class="col-md-10">
                            <label><input type="radio" class="radio" name="ninnzuu" value="1">1人</label>
                            <label><input type="radio" class="radio" name="ninnzuu" value="2">2人</label>
                            <label><input type="radio" class="radio" name="ninnzuu" value="3">3人</label>
                            <label><input type="radio" class="radio" name="ninnzuu" value="4">4人</label>
                            <label><input type="radio" class="radio" name="ninnzuu" value="5">5人以上</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">カテゴリー</label>
                        <div class="col-md-10">
                            <label><input type="radio" class="radio" name="category" value="1">1人旅</label>
                            <label><input type="radio" class="radio" name="category" value="2">友達</label>
                            <label><input type="radio" class="radio" name="category" value="3">家族</label>
                            <label><input type="radio" class="radio" name="category" value="4">カップル</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection