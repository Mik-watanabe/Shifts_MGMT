<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Worktime Scheduler</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
        
    </head>
    <body>
        

        <div class="content">
                <div class="title" style="margin-bottom: 0;">
                   Worktime
                   <br>Scheduler
                </div>
                <h1 style="margin-top: 0;">ー&nbsp;シフト管理システム&nbsp;ー</h1>

                <div class="btn">
            @if (Route::has('login'))
                <div class="center-btn">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="button login-btn" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="button resister-btn" href="{{ route('register') }}">Resister</a>
                        @endif
                    @endauth
                </div>
            @endif

                
            </div>
        </div>
    </body>
</html>
