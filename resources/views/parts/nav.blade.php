<nav class="navbar navbar-expand-md navbar-dark bg-white fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto align-items-center">
                <div class="logo">
                    <a href="/"><img src="../../image/logo.jpg" alt="ロゴ"></a>
                </div>
            	<li class="mr-5"><a class="dark" href="{{ url('/travel/index') }}">投稿一覧</a></li>
            	<li><a class="dark" href="{{ url('/photo/index') }}">絶景写真</a></li>
            </ul>


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <div class="nav-right">
            	    <li><a class="dark" href="{{ url('/admin/mypage') }}">マイページ</a></li>
                </div>

            </ul>


        </div>
    </div>
</nav>