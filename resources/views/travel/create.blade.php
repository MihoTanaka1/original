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
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">予算</label>
                        <div class="col-md-10">
                            <p>
                                <select name="example1">
                                    <option value="～1万円">～1万円</option>
                                    <option value="1～5万円">1～5万円</option>
                                    <option value="5～10万円">5～10万円</option>
                                    <option value="10～15万円">10～15万円</option>
                                    <option value="20万円以上">20万円以上</option>
                                </select>
                            </p>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">期間</label>
                        <div class="col-md-10">
                            <p>
                                <select name="example1">
                                    <option value="日帰り">日帰り</option>
                                    <option value="1泊2日">1泊2日</option>
                                    <option value="2泊3日">2泊3日</option>
                                    <option value="4泊5日">4泊5日</option>
                                    <option value="5泊以上">5泊以上</option>
                                </select>
                            </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">人数</label>
                        <div class="col-md-10">
                            <p>
                                <select name="example1">
                                    <option value="1人">1人</option>
                                    <option value="2人">2人</option>
                                    <option value="3人">3人</option>
                                    <option value="4人">4人</option>
                                    <option value="5人以上">5人以上</option>
                                </select>
                            </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">カテゴリー</label>
                        <div class="col-md-10">
                            <p>
                                <select name="example1">
                                    <option value="一人旅">一人旅</option>
                                    <option value="友達">友達</option>
                                    <option value="家族">家族</option>
                                    <option value="カップル">カップル</option>
                                    <option value="きょうだい">きょうだい</option>
                                </select>
                            </p>
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