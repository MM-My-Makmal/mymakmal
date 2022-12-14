<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyMakmal</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Alkalami:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {

                background-color: #fff;
                /* background-image: url('image/hero-img.png'); */
                color: #000000;
                font-family: 'Alkalami', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            img {
                width: 250px;
                height: 250px;
                float: left;
                margin-left: 1%;
                padding: 15%;
            }

            .full-height {
                /* background-color: #b1b5b7; */
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                /*text-align: right;*/
                width:270px;
                height:auto;
                padding:1%;
            }

            /* .content-left { 
                image-align:left;
                background-image: url('image/hero-img.png');
            }*/

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <img src= "{{ url('image/hero-img.png') }}" />

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    MyMakmal
                </div>
                <p> Access to Your Laboratory Assets from Anywhere, at Anytime</p>
             </div>

                <!--div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                 </div-->
            </div>
        </div>
    </body>
</html>

