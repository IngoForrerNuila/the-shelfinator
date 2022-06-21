@extends('layout/master')


<body>
    @include('nav')

    {{-- @section('header') --}}
    <img class="img-fluid" src="{{ asset('img/banner.png') }}" alt="">
   
      <h1 class="h1_main">featuring</h1>
        <div class="boxFeaturing">
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">World wide commments</h2>
        </div>
        <div class="boxFeaturing">
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">Best quality database</h2>
        </div>
        <div class="boxFeaturing">
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">Experience the 80’s and 
                90’s in an unique way</h2>
        </div>
        <div class="boxFeaturing">
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">Leave your story when you
                discovered an amazing
                movie</h2>
        </div>
        <div class="boxFeaturing">
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">Fully interactive</h2>
        </div>
        <div class="boxFeaturing">
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">Outtakes specials</h2>
        </div>

    {{-- @endsection --}}

    <h1 class="h1_main">best movies</h1>
    {{-- best (GENRE) movies should be calling from the database --}}
    <section class="estructura">

        {{-- PELICULAS --}}
        @foreach ($messages as $message)
           {{-- <pre >{{var_dump($message)}}</pre> --}}

        <div class="catalogo">
            {{-- <img class="img_catalogo" src="{{ asset('img/movies/'.'$message->moviePic') }}"> --}}
            <a href="/details/{{ $message->id }}">
            <img class="img_catalogo" src="data:image/jpg;base64,{{ chunk_split(base64_encode($message->moviePic)) }}">
          </a>
            <br>
            
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">{{ $message->movieScore }}</h2>
          
            <h2 class="txt_catalogo">{{ $message->movieTitle }}</h2>
            <p class="genre-{{ $message->movieGenre }}">{{ $message->movieGenre }}</p>
            
            {{-- Here it also should call info from the database --}}
        </div>
        
        
        @endforeach



    </section>
</body>