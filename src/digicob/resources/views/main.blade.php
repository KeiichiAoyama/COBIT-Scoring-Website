<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Digicob</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('images/logos/favicon.png')}}" />
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
            margin: 0px auto;
            /* Centering the circle */
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>
