<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Worktime Scheduler</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fugaz+One&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Fugaz One', cursive;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
           

            .content {
                text-align: center;
                margin: 150px;
            }

            .title {
                font-size: 70px;
                line-height: 65px;
            }

            .content .btn{
                margin-top:40px;
                
            }
            .resister-btn{
                background-color:pink;
                border-radius:30px;
                padding:10px 40px;
                margin-left:20px;
            }

            .login-btn{
                background-color:pink;
                border-radius:30px;
                padding:10px 54px;
            
            }

            a{
                text-decoration: none;
                color: white;
            }

                        
            
        </style>
    </head>
    <body>
        

        <div class="content">
                <div class="title">
                   Worktime
                   <br>　　Scheduler
                </div>

                <div class="btn">
            @if (Route::has('login'))
                <div class="center-btn">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="login-btn" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="resister-btn" href="{{ route('register') }}">Resister</a>
                        @endif
                    @endauth
                </div>
            @endif

                
            </div>
        </div>
    </body>
</html>
