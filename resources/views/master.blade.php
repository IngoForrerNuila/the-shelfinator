<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Shelfinator</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- ICONS --}}
    <script src="https://use.fontawesome.com/2fd392e433.js"></script>
    {{-- Link with sass --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('nav')

    <h1 class="h1_main">best action movies</h1>
    {{-- best (GENRE) movies should be calling from the database --}}
    <section class="estructura">

        {{-- PELICULAS --}}
        <div class="catalogo">
            <img class="img_catalogo" src="{{ asset('img/rambo.jpg') }}">
            <br>
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">8.6<br> RAMBO <br>First Blood </h2>
            <p class="genre-action">genero</p>
            {{-- Here it also should call info from the database --}}
        </div>

        <div class="catalogo">
            <img class="img_catalogo" src="{{ asset('img/rambo.jpg') }}">
            <br>
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">8.6<br> RAMBO <br>First Blood </h2>
            <p class="genre-action">genero</p>
            {{-- Here it also should call info from the database --}}
        </div>

        <div class="catalogo">
            <img class="img_catalogo" src="{{ asset('img/rambo.jpg') }}">
            <br>
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">8.6<br> RAMBO <br>First Blood </h2>
            <p class="genre-action">genero</p>
            {{-- Here it also should call info from the database --}}
        </div>

        <div class="catalogo">
            <img class="img_catalogo" src="{{ asset('img/rambo.jpg') }}">
            <br>
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">8.6<br> RAMBO <br>First Blood </h2>
            <p class="genre-action">genero</p>
            {{-- Here it also should call info from the database --}}
        </div>

        <div class="catalogo">
            <img class="img_catalogo" src="{{ asset('img/rambo.jpg') }}">
            <br>
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">8.6<br> RAMBO <br>First Blood </h2>
            <p class="genre-action">genero</p>
            {{-- Here it also should call info from the database --}}
        </div>


    </section>



</body>

</html>
