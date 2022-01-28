<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{  asset('css/style.css') }}" />
    </head>
        <body>
            @include("parts.header")
            <main>
            	<h1>これはトップページです</h1>
                <div class="top-photo">       
                    <img width="1550" height="700" src="{{ asset('image/topphoto.jpg') }}" alt="">
            	</div>
            <br>
            <br>
            	<div><h4>新着情報</h4>
            	</div>
            </main>
    @include("parts.footer")
        </body>
</html>