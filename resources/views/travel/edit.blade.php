@extends('layouts.admin')
@section('title', '旅行日記の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>旅行日記の編集</h2>
                <form action="{{ action('TravelController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $travel_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">地域</label>
                        <div class="col-md-10">
                            <label><input type="radio" class="radio" name="place" value="1" {{$travel_form->place == 1 ? 'checked': null }}>北海道</label>
                            <label><input type="radio" class="radio" name="place" value="2" {{$travel_form->place == 2 ? 'checked': null }}>東北</label>
                            <label><input type="radio" class="radio" name="place" value="3" {{$travel_form->place == 3 ? 'checked': null }}>関東</label>
                            <label><input type="radio" class="radio" name="place" value="4" {{$travel_form->place == 4 ? 'checked': null }}>中部</label>
                            <label><input type="radio" class="radio" name="place" value="5" {{$travel_form->place == 5 ? 'checked': null }}>関西</label>
                            <label><input type="radio" class="radio" name="place" value="6" {{$travel_form->place == 6 ? 'checked': null }}>中国</label>
                            <label><input type="radio" class="radio" name="place" value="7" {{$travel_form->place == 7 ? 'checked': null }}>四国</label>
                            <label><input type="radio" class="radio" name="place" value="8" {{$travel_form->place == 8 ? 'checked': null }}>九州</label>
                            <label><input type="radio" class="radio" name="place" value="9" {{$travel_form->place == 9 ? 'checked': null }}>沖縄</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $travel_form->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">予算</label>
                        <div class="col-md-10">
                            <label><input type="radio" class="radio" name="yosan" value="1" {{$travel_form->yosan == 1 ? 'checked': null }} >～1万円</label>
                            <label><input type="radio" class="radio" name="yosan" value="5" {{$travel_form->yosan == 5 ? 'checked': null }}>1～5万円</label>
                            <label><input type="radio" class="radio" name="yosan" value="10" {{$travel_form->yosan == 10 ? 'checked': null }}>5～10万円</label>
                            <label><input type="radio" class="radio" name="yosan" value="15" {{$travel_form->yosan == 15 ? 'checked': null }}>10～15万円</label>
                            <label><input type="radio" class="radio" name="yosan" value="16" {{$travel_form->yosan == 16 ? 'checked': null }}>15万円～</label>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">期間</label>
                        <div class="col-md-10">
                            <label><input type="radio" class="radio" name="kikan" value="1" {{$travel_form->kikan== 1 ? 'checked': null }}>日帰り</label>
                            <label><input type="radio" class="radio" name="kikan" value="2"　{{$travel_form->kikan== 2? 'checked': null }}>1泊2日</label>
                            <label><input type="radio" class="radio" name="kikan" value="3"　{{$travel_form->kikan== 3 ? 'checked': null }}>2泊3日</label>
                            <label><input type="radio" class="radio" name="kikan" value="4"　{{$travel_form->kikan== 4 ? 'checked': null }}>3泊4日</label>
                            <label><input type="radio" class="radio" name="kikan" value="5"　{{$travel_form->kikan== 5 ? 'checked': null }}>4泊5日</label>
                            <label><input type="radio" class="radio" name="kikan" value="6"　{{$travel_form->kikan== 6 ? 'checked': null }}>5泊以上</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">人数</label>
                        <div class="col-md-10">
                            <label><input type="radio" class="radio" name="ninnzuu" value="1" {{$travel_form->ninnzuu== 1 ? 'checked': null }}>1人</label>
                            <label><input type="radio" class="radio" name="ninnzuu" value="2" {{$travel_form->ninnzuu== 2 ? 'checked': null }}>2人</label>
                            <label><input type="radio" class="radio" name="ninnzuu" value="3" {{$travel_form->ninnzuu== 3 ? 'checked': null }}>3人</label>
                            <label><input type="radio" class="radio" name="ninnzuu" value="4" {{$travel_form->ninnzuu== 4 ? 'checked': null }}>4人</label>
                            <label><input type="radio" class="radio" name="ninnzuu" value="5" {{$travel_form->ninnzuu== 5 ? 'checked': null }}>5人以上</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">カテゴリー</label>
                        <div class="col-md-10">
                            <label><input type="radio" class="radio" name="category" value="1" {{$travel_form->category== 1 ? 'checked': null }}>1人旅</label>
                            <label><input type="radio" class="radio" name="category" value="2" {{$travel_form->category== 2 ? 'checked': null }}>友達</label>
                            <label><input type="radio" class="radio" name="category" value="3" {{$travel_form->category== 3 ? 'checked': null }}>家族</label>
                            <label><input type="radio" class="radio" name="category" value="4" {{$travel_form->category== 4 ? 'checked': null }}>カップル</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中: {{ $travel_form->image }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $travel_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection