@extends('layouts.admin')
@section('title', 'プロフィール編集')

@section('content')
    <div class="mycontainer">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール新規作成</h2>
                <form action="{{ action('ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-5">
                            <label><input type="radio" class="radio" name="gender" value="male">男性</label>
                            <label><input type="radio" class="radio" name="gender" value="female">女性</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">年齢</label>
                        <div class="col-md-5">
                            <label><input type="radio" class="radio" name="age" value="10">10代</label>
                            <label><input type="radio" class="radio" name="age" value="20">20代</label>
                            <label><input type="radio" class="radio" name="age" value="30">30代</label>
                            <label><input type="radio" class="radio" name="age" value="40">40代</label>
                            <label><input type="radio" class="radio" name="age" value="50">50代</label>
                            <label><input type="radio" class="radio" name="age" value="50代以上">50代以上</label>
                        </div>
                    </div>
                        <div class="form-group row">
                        <label class="col-md-2">自己紹介</label>
                        <div class="col-md-5">
                            <textarea class="form-control" name="introduction" rows="5">{{ old('introduction') }}</textarea>
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