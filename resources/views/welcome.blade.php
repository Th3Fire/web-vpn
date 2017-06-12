<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello-World VPN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .footer {
                position: absolute;
                right: 0;
                bottom: 0;
                left: 0;
                padding: 1rem;
              background-color: #efefef;
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                    </div>
                
            @endif
            

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel">
                            @component('components.who-is-logged-in')
                            @endcomponent
                            
                        </div>
                    </div>
                </div>
            </div>
            <center>
    <div class="footer">This footer will always be positioned at the bottom of the page, but <strong>not fixed</strong>.
    <br>
        @if (App::getLocale() == 'th')
        <a href="{{ route('lang.switch', 'th') }}"><img src="{{ asset('images/th_lang.png') }}" width="30" height="30"></a>
        <a href="{{ route('lang.switch', 'en') }}"><img src="{{ asset('images/en_lang_deactive.png') }}" width="30" height="30"></a>
        @elseif (App::getLocale() == 'en')
        <a href="{{ route('lang.switch', 'th') }}"><img src="{{ asset('images/th_lang_deactive.png') }}" width="30" height="30"></a>
        <a href="{{ route('lang.switch', 'en') }}"><img src="{{ asset('images/en_lang.png') }}" width="30" height="30"> </a>
        @endif
    </div>
</center>
        </div>
    </body>
</html>
