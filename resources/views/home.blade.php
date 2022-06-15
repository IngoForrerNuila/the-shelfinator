@extends('layout/master')

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
            <p class="genre-action">action</p>
            <p class="genre-comedy">comedy</p>
            {{-- Here it also should call info from the database --}}
        </div>

        <div class="catalogo">
            <img class="img_catalogo" src="{{ asset('img/rambo.jpg') }}">
            <br>
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">8.6<br> RAMBO <br>First Blood </h2>
            <p class="genre-horror">horror</p>
            <p class="genre-action">action</p>
            {{-- Here it also should call info from the database --}}
        </div>

        <div class="catalogo">
            <img class="img_catalogo" src="{{ asset('img/rambo.jpg') }}">
            <br>
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">8.6<br> RAMBO <br>First Blood </h2>
            <p class="genre-adventure">adventure</p>
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
