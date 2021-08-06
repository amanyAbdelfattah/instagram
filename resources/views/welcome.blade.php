<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Instagram</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="shortcut icon" href="img/InstagramLogo.png">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            /* .position-ref {
                position: relative;
            } */

            .top-center {
                position: absolute;
                top: 21px;
                width: 100%;
                display: flex;
                align-items: center;
                text-align: center;
                box-shadow: 0 9px 8px 0 rgb(0 0 0 / 20%);
            }

            h2, .link {
                flex-basis: 50%;
            }

            .content {
                display: flex;
                align-items: flex-start;
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .link > a {
                color: #636b6f;
                padding: 0 21px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: capitalize;
            }
            .instagram{
                display: flex;
                align-items: center;
            }
            h2 .fa-instagram{
                font-size: 25px
            }
            h3{
                font-family: cursive;
                padding: 15px;
                font-weight: 700;
                font-size: 30px;
            }
            .form {
                flex-basis: 30%;
            }
            form{
                border: 1px solid #DDDDDD;
                padding: 50px;
                margin: 60px 0 0;
            }
            .form input
            {
                border-radius: 5px;
                padding: 8px 7px;
                width: 100%;
                margin-bottom: 20px;
                border: 1px solid #d6d6d0;
            }
            .form .btn-primary
            {
                color: #fff;
                border-radius: 5px;
                background-color: #227dc7;
                border-color: #2176bd;
                padding: 8px 86px;
            }
            .m-b-md {
                flex-basis: 53%;
                margin: 30px 0 0;
            }
            p{
                margin-top: 50px;
                text-align: center;
                font-weight: 800;
            }
            .apps img {
                max-width: 70%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <nav class="top-center links">
                <h2> <i class="fab fa-instagram"></i> My Instagram</h2>
                <div class="link">
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
                </div>
                @endif
            </nav>

            <div class="content">
                <div class="title m-b-md">
                    <img src="img/iPhone.jpeg" alt="">
                </div>

                <div class="form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <h3>Instagram</h3>
                        <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <div class="error">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        

                        <br>
                        <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <div class="error">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        
                                
                        <br>
                        <button type="submit" class="btn-primary">
                            Login
                        </button>
                    </form>
                    <p>Get The app</p>
                    <div class="apps">
                        <img src="img/appsbagde.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="js/all.min.js"></script>
</html>
