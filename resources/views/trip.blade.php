@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" style="background-image: url(image/trip.jpg); background-position: center;
height: 450px; background-size:cover; ">
  <div class="container" style="margin-top: -30px; color:white;">
    <h1 class="display-4">
    <hr class="judul" style="width:700px; border-color:white;">
    "FOLLOW YOUR DREAMS, <br>
    <hr class="judul" style="width:700px; border-color:white;">
    BELIEVE IN YOUR SELF <br>
    <hr class="judul" style="width:640px; border-color:white;">
    AND DON'T GIVE UP" <br>
    <hr class="judul" style="width:560px; border-color:white;">
    </h1>
    <p class="lead" style="color:white;">Rachel Corrie</p>
  </div>
</div>

<div class="container content">
<div class="row">
    <div class="col-md-6 offset-md-3">
    <h1>TRIP</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-9 offset-md-3">
        <img src="image/trip1.jpg" alt="">
        <div class="descAtas">
            <h3>Muntea Camping Ground</h3>
            <a href="#" class="btn btn-primary" style="margin-left:280px;">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            </a>
        </div>
        <hr class="garis">
        <div class="descBawah">
        <p>Bonto Tangnga, Uluere, Bantaeng</p>
        <a href="#" class="btn btn-primary" style="margin-left:300px;">More Info</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-9 offset-md-3">
        <img src="image/trip2.jpg" alt="">
        <div class="descAtas">
            <h3>Bantimurung Waterpark</h3>
            <a href="#" class="btn btn-primary" style="margin-left:297px;">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            </a>
        </div>
        <hr class="garis">
        <div class="descBawah">
        <p>Kalabbirang, Bantimurung, Maros</p>
        <a href="#" class="btn btn-primary" style="margin-left:300px;">More Info</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-9 offset-md-3">
        <img src="image/trip3.jpg" alt="">
        <div class="descAtas">
            <h3>Fort Rotterdam Makassar</h3>
            <a href="#" class="btn btn-primary" style="margin-left:277px;">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            </a>
        </div>
        <hr class="garis">
        <div class="descBawah">
        <p>Jl. Ujung Pandang, Bulo Gading, Makassar</p>
        <a href="#" class="btn btn-primary" style="margin-left:239px;">More Info</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-9 offset-md-3">
        <img src="image/trip4.jpg" alt="">
        <div class="descAtas">
            <h3>Taman Batupake Gojeng</h3>
            <a href="#" class="btn btn-primary" style="margin-left:285px;">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            </a>
        </div>
        <hr class="garis">
        <div class="descBawah">
        <p>Jl. Veteran, Biringere, Sinjai</p>
        <a href="#" class="btn btn-primary" style="margin-left:338px;">More Info</a>
        </div>
    </div>
</div>
</div>

<div class="row">
      <div class="col-md-8 offset-md-2">
      <div class="footer">
      <div class="medsos">
        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true" style="color:red;"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>  
      </div>
      <p>&copy; 2020 by <span class="singgahki">singgahki'</span></p>
      </div>
    </div>
</div>
@endsection