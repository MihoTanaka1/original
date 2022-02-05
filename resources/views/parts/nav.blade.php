<nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
    <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <img src="image/logo.jpg" class="logo" alt="ロゴ"></a>
            	<li><a class="navbar-brand" href="{{ url('/list') }}">投稿一覧</a></li>
            	<li><a class="navbar-brand" href="{{ url('/photo') }}">絶景写真</a></li>
            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            	<li><a class="navbar-brand" href="{{ url('/mypage') }}">マイページ</a></li>


            </ul>


        </div>
    </div>
</nav>