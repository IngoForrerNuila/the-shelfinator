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
    <h2 class="description_details"> A rebel alien that is not behaving, and Arnold is going to teach him a leason. This
        is a small description of the movie and I am pretty sure you are going to enjoy it!</h2>
    <h1 class="description_title_form">LEAVE YOUR THOUGHT</h1>


    
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="titleMessage" placeholder="Please enter your name">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="contentMessage"
                placeholder="Here you can leaver your amazing thoughts"></textarea>
        </div>

        @error('title')
                <h1 class="asign-danger">Please fill both title and content</h1>
            @enderror

        <button type="submit" class="btn btn-warning sbutton">Submit</button>
    </form>


</section>
<h1 class="description_title_form">THOUGHTS</h1>

<section class="">
    <ul class="ul_comments">
        <li>Pedro</li>
        <li>This is my thought. I personally do not think this is a good movie, however I do really like how Predator
            look like ;-) he is so sexy </li>
    </ul>
</section>
