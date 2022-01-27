<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{  asset('css/style.css') }}" />
    </head>
    <body>
        @include("parts.header")
        <main>
    	    <h1>これはトップページです</h1>
                    <div class="topphoto">
                      <img src="{{ asset('imgge/topphoto.jpg') }}" />
                    </div>
        </main>
        @include("parts.footer")
    </body>
</html>