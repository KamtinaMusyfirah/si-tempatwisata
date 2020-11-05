@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" style="background-image: url(image/play.jpg); background-position: center;
height: 450px; background-size:cover;">
  <div class="container" style="margin-top:-30px;">
    <h1 class="display-4">
    <hr class="judul" style="width:690px;">
    "YOU HAVE TO GET LOST <br>
    <hr class="judul" style="width:690px;">
    BEFORE YOU CAN BE <br>
    <hr class="judul" >
    FOUND" <br>
    <hr class="judul" style="width:250px;">
    </h1>
    <p class="lead">Jeff Rasley</p>
  </div>
</div>

<div class="container content">
<div class="row">
    <div class="col-md-6 offset-md-3">
    <h1>PLAY</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-9 offset-md-3">
        <img src="image/play1.jpg" alt="">
        <div class="descAtas">
            <h3>Bugis Waterpark Advanture</h3>
            <a href="#" class="btn btn-primary">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            </a>
        </div>
        <hr class="garis">
        <div class="descBawah">
        <p>Manggala, Kota Makassar</p>
        <a href="#" class="btn btn-primary">More Info</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-9 offset-md-3">
        <img src="image/play2.jpg" alt="">
        <div class="descAtas">
            <h3>Puncak Bila</h3>
            <a href="#" class="btn btn-primary" style="margin-left:430px;">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            </a>
        </div>
        <hr class="garis">
        <div class="descBawah">
        <p>Jalan Poros Pare, Kab. Sidenrang Rappang</p>
        <a href="#" class="btn btn-primary" style="margin-left:235px;">More Info</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-9 offset-md-3">
        <img src="image/play3.png" alt="">
        <div class="descAtas">
            <h3>Dewi Sri Waterpark</h3>
            <a href="#" class="btn btn-primary" style="margin-left:346px;">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            </a>
        </div>
        <hr class="garis">
        <div class="descBawah">
        <p>Jl. Poros Malino, Tamarunang, Kec. Somba Opu, Gowa</p>
        <a href="#" class="btn btn-primary" style="margin-left:162px;">More Info</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-9 offset-md-3">
        <img src="image/play4.png" alt="">
        <div class="descAtas">
            <h3>Takalar Beach Waterboom</h3>
            <a href="#" class="btn btn-primary" style="margin-left:266px;">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            </a>
        </div>
        <hr class="garis">
        <div class="descBawah">
        <p>Topejawa, Mangara Bombang, Takalar</p>
        <a href="#" class="btn btn-primary" style="margin-left:270px;">More Info</a>
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