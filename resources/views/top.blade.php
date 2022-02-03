@include("parts.header")
<main>
<h1>トップページ</h1>
	<div class="container">
		<div class="top-photo">       
			<img src="{{ asset('image/topphoto.jpg') }}" alt="トップページ写真">
		</div>
		<div>
		<h4>新着情報</h4>
		</div>
			<div class="card-contents">
				<div class="list-area">
					<div class="list">
						<img src="image/写真1.JPG" class="image-list">
						<p class="photo-title">2021.11.4</p>
						<p class="text">長野</p>
						<p></p>
					</div>
					<div class="list">
						<img src="image/写真2.JPG" class="image-list">
						<p class="photo-title">2020.11.4-2020.11.8</p>
						<p class="text">石垣島</p>
					</div>
					<div class="list">
						<img src="image/写真3.jpg" class="image-list">
						<p class="photo-title">2020.8.11</p>
						<p class="text">立山</p>
					</div>
				</div>
			</div>
	</div>
</main>

@include("parts.footer")
