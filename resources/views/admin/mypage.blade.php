<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{  asset('css/style.css') }}" />
    </head>
    <body>
        @include("parts.header")
        <main>
    	    <h1>マイページ</h1>
    	    
    	        <a href="/travel/create">投稿作成</a>
    	        <a href="/admin/profile">プロフィール</a>
        </main>
        @include("parts.footer")
    </body>
</html>