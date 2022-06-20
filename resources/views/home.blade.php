@extends('layout/master')

<body>
    @include('nav')

    {{-- @section('header') --}}
        
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/glitch.png') }}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/Big-Bang.jpg') }}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/vhs_the.png') }}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
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
        <div class="catalogo">
            <img class="img_catalogo" src="{{ $message->moviePic }}">
            <br>
            <img class="star" src="{{ asset('img/star.png') }}">
            <h2 class="txt_catalogo">{{ $message->movieScore }}<br> {{ $message->movieTitle }}<br></h2>
            <p class="genre-action">{{ $message->movieGenre }}</p>
            
            {{-- Here it also should call info from the database --}}
        </div>

        
        @endforeach



    </section>
</body>