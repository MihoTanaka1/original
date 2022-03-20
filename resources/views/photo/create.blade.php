@extends('layouts.admin')
@section('title', '絶景写真の投稿')

@section('content')
    <div class="mycontainer">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>絶景写真の投稿</h2>
                <form action="{{ action('PhotoController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">地名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="Placename" value="{{ old('Placename') }}">
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