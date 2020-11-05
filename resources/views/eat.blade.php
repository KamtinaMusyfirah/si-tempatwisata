@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" style="background-image: url(image/eat.jpg); background-position: center;
height: 450px; background-size:cover; color:white;">
  <div class="container" style="margin-top:-30px;">
    <h1 class="display-4">
    <hr class="judul" style="width:665px; border-color:white;">
    "AN BOUNCE OF SAUCE <br>
    <hr class="judul" style="width:665px; border-color:white;">
    COVERS A MULTITUDE <br>
    <hr class="judul" style="width:610px; border-color:white;">
    OF SINS" <br>
    <hr class="judul" style="width:235px; border-color:white;">
    </h1>
    <p class="lead">Anthony Bourdain</p>
  </div>
</div>

<div class="container content">
<div class="row">
    <div class="col-md-6 offset-md-3">
    <h1>EAT</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-9 offset-md-3">
        <img src="image/eat1.jpg" alt="">
        <div class="descAtas">
            <h3>Coto Nusantara</h3>
            <a href="#" class="btn btn-primary" style="margin-left:386px;">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            </a>
        </div>
        <hr class="garis">
        <div class="descBawah">
        <p>Jl. Nusantara Baru No.142,Kec. Wajo, Kota Makassar</p>
        <a href="#" class="btn btn-primary" style="margin-left:172px;">More Info</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-9 offset-md-3">
        <img src="image/eat2.jpg" alt="">
        <div class="descAtas">
            <h3>Dewi Sri Resto & Fishing</h3>
            <a href="#" class="btn btn-primary" style="margin-left:285px;">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            </a>
        </div>
        <hr class="garis">
        <div class="descBawah">
        <p>Jl. Malino No.KM. 3, Bontoramba, Kec. Somba Opu, Gowa</p>
        <a href="#" class="btn btn-primary" style="margin-left:140px;">More Info</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-9 offset-md-3">
        <img src="image/eat3.jpg" alt="">
        <div class="descAtas">
            <h3>RM Latanete</h3>
            <a href="#" class="btn btn-primary" style="margin-left:420px;">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            </a>
        </div>
        <hr class="garis">
        <div class="descBawah">
        <p>Jl. Jend. Ahmad Yani, Tanete Riattang Bar, Bone</p>
        <a href="#" class="btn btn-primary" style="margin-left:206px;">More Info</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-9 offset-md-3">
        <img src="image/eat4.jpg" alt="">
        <div class="descAtas">
            <h3>Saung Rindu Alam</h3>
            <a href="#" class="btn btn-primary" style="margin-left:355px;">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
            </a>
        </div>
        <hr class="garis">
        <div class="descBawah">
        <p>Jl. Poros Pattallassang, Sunggumanai, Gowa</p>
        <a href="#" class="btn btn-primary" style="margin-left:227px;">More Info</a>
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