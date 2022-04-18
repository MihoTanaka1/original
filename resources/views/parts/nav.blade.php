<nav class="navbar navbar-expand-md navbar-dark bg-white fixed-top">
    <div class="mycontainer">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto align-items-center">
                <div class="logo">
                    <a href="/"><img src="../../image/logo.jpg" alt="ロゴ"></a>
                </div>
            	<li class="mr-5"><a class="dark" href="{{ url('/travel/list') }}">投稿一覧</a></li>
            	<li><a class="dark" href="{{ url('/photo/index') }}">絶景写真</a></li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li><a class="dark" href="{{ url('/admin/mypage') }}">マイページ</a></li>
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest    
            </ul>
        </div>
    </div>
</nav>