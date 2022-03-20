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
			<div class="pickup">PICK UP</div>
			<div class="news-bottom">ピックアップ</div>
		</div>
		<div class="card-contents">
			<div class="list-area">
				<div class="list">
					<a href="AA">
						<div class="image-list">
							<div class="pick-list-bg"></div>
							<img src="image/屋久島.jpg">
						</div>
						<div class="text-list">
							<p class="pickup-text">屋久島</p>
						</div>
					</a>
				</div>
				<div class="list">
					<a href="AA">
						<div class="image-list">
							<div class="pick-list-bg"></div>
							<img src="image/青い池.jfif">
						</div>
						<div class="text-list">
							<p class="pickup-text">青い池</p>
						</div>
					</a>
				</div>
				<div class="list">
					<a href="AA">
						<div class="image-list">
							<div class="pick-list-bg"></div>
							<img src="image/松本城.jpg">
						</div>
						<div class="text-list">
							<p class="pickup-text">大曲花火大会</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>


	@endsection