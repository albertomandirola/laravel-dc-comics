<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main>

        @yield('content')
        {{-- <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2 my-3">
                        <div class="card" style="width: 100%; height:300px">
                            <img style="height: 200px;" src="{{ $comic['thumb'] }}" class="card-img-top"
                                alt="{{ $comic['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic['title'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div> --}}

    </main>
    @include('partials.footer')

</body>

</html>
