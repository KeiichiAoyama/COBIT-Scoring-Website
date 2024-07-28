<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Modernize Free</title>
        <link
        rel="shortcut icon"
        type="image/png"
        href="{{asset('images/logos/favicon.png')}}" />
        <link rel="stylesheet" href="{{asset('css/styles.min.css')}}" />
        <style>
        .circle {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background-color: #44cb9a;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            text-align: center;
            margin: 2px auto; 
        }
        .circle-utama {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background-color: #44cb9a;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 25px;
        text-align: center;
        margin: 0px auto; /* Centering the circle */
        }
        .btn-round {
            border-radius: 40px;
        }
        </style>
    </head>

    <body>
    @yield('content')
    </body>
    <script src="{{asset('libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset('libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('libs/simplebar/dist/simplebar.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
</html>
