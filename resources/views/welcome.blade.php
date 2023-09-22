<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/js/app.js')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" /> --}}
</head>

<body>
    <!--Container-->
    <div class="container">
        <div class="col-md-12">
            <h2 align="center">Hello World</h2>
            <div class="flip">
                <div class="flip-inner">
                    <div class="front">
                        <img class="thumbnail" src="{{ asset('assets/img/YK.png') }}" alt="Yonis Kurniawan">
                    </div>
                    <div class="back">
                        <img class="thumbnail thumbnail-hover" src="{{ asset('assets/img/yonis.jpg') }}"
                            alt="Yonis Kurniawan">
                    </div>
                </div>
                <h5 align="center">Hover me!</h5>
            </div>

        </div>
    </div>
</body>

</html>
