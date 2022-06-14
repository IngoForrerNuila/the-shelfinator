@extends('layout/master')
@include('nav')

<section class="details_section">
    <h1 class="h1_details">RAMBO</h1>

    <div class="catalogo">
        <img class="img_details" src="{{ asset('img/robocop2.jpg') }}">
        <br>
        <img class="star" src="{{ asset('img/star.png') }}">
        <p class="genre-action">genero</p>
        {{-- Here it also should call info from the database --}}
    </div>




</section>