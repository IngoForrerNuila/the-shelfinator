@extends('layout/master')
@include('nav')

<section class="details_section">
    <h1 class="h1_details">RAMBO</h1>
    <img class="img_details" src="{{ asset('img/robocop2.jpg') }}">
    <div class="catalogo_details">
        <p class="genre-action">action</p>
        <img class="star" src="{{ asset('img/star.png') }}">
        <p class="txt_catalogo">8.5</p>
        {{-- Here it also should call info from the database --}}
    </div>
    <h2 class="description_details"> A rebel alien that is not behaving, and Arnold is going to teach him a leason. This is a small description of the movie and I am pretty sure you are going to enjoy it!</h2>



</section>
