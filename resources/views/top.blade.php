@include("parts.header")
<main>
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
				<div class="list">
					<a href="#">
						<div class="image-list">
							<div class="image-list-bg"></div>
							<img src="image/写真1.JPG">
						</div>
						<div class="text-list">
							<p class="photo-title">2021.11.4</p>
							<p class="news-text">長野</p>
						</div>
					</a>
				</div>
				<div class="list">
					<a href="#">
						<div class="image-list">
							<div class="image-list-bg"></div>
							<img src="image/写真2.JPG">
						</div>
						<div class="text-list">
							<p class="photo-title">2020.11.4</p>
							<p class="news-text">石垣島</p>
						</div>
					</a>
				</div>
				<div class="list">
					<a href="#">
					<div class="image-list">
						<div class="image-list-bg"></div>
						<img src="image/写真3.jpg">
					</div>
					<div class="text-list">
						<p class="photo-title">2020.8.11</p>
						<p class="news-text">立山</p>
					</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</main>

@include("parts.footer")
