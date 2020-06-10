<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CarromApp</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style>
    #img-holder {
        background: url(carrom.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }


    html,
    body {
        font-family: 'Aclonica', sans-serif;
        font-weight: 200;
        color:white;
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

    .links>a {
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

    .w3-lobster {
        font-family: 'Aclonica', sans-serif;
        font-weight: 200;
        color: silver;
        -webkit-text-stroke: 2px black;
    }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height" id="img-holder">
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
                <p class="w3-lobster">Carrom Practise App</p>
            </div>
            <br>
            
            <br>
            <table align="center">
                <tr>
                    <td><a href="/singles" class="btn btn-primary">Single Matches</a></td>
                    <td><a href="/doubles" class="btn btn-primary">Double Matches</a></td>
                    <td><a href="/login" class="btn btn-danger">Logout</a></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>