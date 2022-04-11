@extends('layouts.admin')
@section('title', '美しい日本に出会う旅')

@section('content')
	<div class="top-photo">
		<img src="image/topphoto.jpg" alt="トップ写真">
	</div>
	<div class="mycontainer">
		<div>
			<div class="news">NEWS</div>
			<div class="news-bottom">新着情報</div>
		</div>
		<div class="card-contents">
			<div class="list-area">
				@for($i = 0; $i < 3; $i++)
                    <div class="list">
                        <a href="{{route('travel.show', ['info_id' => $post[$i]->id] )}}">
                            <div class="image-list">
                                <div class="image-list-bg"></div>
                                @if ($post[$i]->image_path)
                                    <img src="{{ asset('storage/image/' . $post[$i]->image_path) }}">
                                @endif
                            </div>
							<div class="text-list">
								<p class="travel-title"> {{ str_limit($post[$i]->title, 20) }}</p>
								<p class="travel-text"> 地域：{{ str_limit($post[$i]->place, 10) }}</p>
							</div>
                        </a>
                    </div>
                @endfor
			</div>
			<div class="pickup">Superb view</div>
			<div class="news-bottom">絶景写真</div>
		</div>
					<div class="list-area">
				@for($i = 0; $i < 3; $i++)
                    <div class="list">
                            <div class="image-list">
                                <div class="pick-list-bg"></div>
                                @if ($post[$i]->image_path)
                                    <img src="{{ asset('storage/image/' . $photos[$i]->photo) }}">
                                @endif
                            </div>
							<div class="text-list">
								<p class="pickup-text"> {{ str_limit($photos[$i]->Placename, 20) }}</p>
							</div>
                    </div>
                @endfor
			</div>
	</div>


	@endsection