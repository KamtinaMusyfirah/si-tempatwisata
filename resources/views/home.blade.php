@extends('layouts.app')

@section('content')
<!-- Carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/carousel1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/carousel2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/carousel3.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/carousel4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<!-- End Carousel -->


<!-- Kategori -->
<div class="kategori">
  <!-- Eat -->
  <div class="eat1">
    <img src="image/kategori1.png" alt="">
  </div>
  <!-- Play -->
  <div class="play1">
    <img src="image/kategori2.png" alt="">
  </div>
  <!-- Relax -->
  <div class="relax1">
    <img src="image/kategori3.png" alt="">
  </div>
  <!-- Trip -->
  <div class="trip1">
    <img src="image/kategori4.png" alt="">
  </div>
</div>
<!-- End Kategori -->
<!-- Kategori -->
<div class="namakategori">
  <!-- Eat -->
  <div class="eat1">
    <a href="#">EAT</a>
  </div>
  <!-- Play -->
  <div class="play1">
    <a href="#">PLAY</a>
  </div>
  <!-- Relax -->
  <div class="relax1">
    <a href="#">RELAX</a>
  </div>
  <!-- Trip -->
  <div class="trip1">
    <a href="#">TRIP</a>
  </div>
</div>
<!-- End Kategori -->

<!-- View -->
<div class="container view">
<div class="row">
    <div class="col-6">
        <img src="image/view1.jpg" alt="">
        <h3>Pantai Bira</h3>
        <hr>
        <div class="more">
        <p>Bulukumba, Sulawesi Selatan</p>
        <a href="#" class="btn btn-primary">More Info</a>
        </div> 
    </div>
    <div class="col-6">
        <img src="image/view2.jpg" alt="">
        <h3>Pantai Losari</h3>
        <hr>
        <div class="more">
        <p>Makassar, Sulawesi Selatan</p>
        <a href="#" class="btn btn-primary">More Info</a>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
        <img src="image/view3.jpg" alt="">
        <h3>Bantimurung</h3>
        <hr>
        <div class="more">
        <p>Maros, Sulawesi Selatan</p>
        <a href="#" class="btn btn-primary">More Info</a>
        </div> 
    </div>
    <div class="col-6">
        <img src="image/view4.jpg" alt="">
        <h3>Bukit Muntea</h3>
        <hr>
        <div class="more">
        <p>Bantaeng, Sulawesi Selatan</p>
        <a href="#" class="btn btn-primary">More Info</a>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
        <img src="image/view5.jpg" alt="">
        <h3>Air Terjun Bissapu</h3>
        <hr>
        <div class="more">
        <p>Bantaeng, Sulawesi Selatan</p>
        <a href="#" class="btn btn-primary">More Info</a>
        </div> 
    </div>
    <div class="col-6">
        <img src="image/view6.jpg" alt="">
        <h3>Mini Showfarm</h3>
        <hr>
        <div class="more">
        <p>Bantaeng, Sulawesi Selatan</p>
        <a href="#" class="btn btn-primary">More Info</a>
        </div>
    </div>
  </div>
</div>
<!-- End View -->

<!-- About -->
<div class="about">
  <div>
    <h1>Singgah Ki' dii</h1>
    <div class="row">
      <div class="col-md-8 offset-md-2">
      <p>Merupakan ciri khas dari website kami yang didalamnya mendeskripsikan tempat wisata di Sulawesi Selatan
        yang menyediakan informasi tentang lokasi tempat wisata yang disertai gambar dan fasilitas yang tersedia di tempat tersebut.
        Dalam website ini, pengguna dapat memberi komentar, <i>rating</i>, <i>review</i>, dan rekomendasi tentang tempat
        wisata lain yang belum ada pada website ini.
      </p>
      </div>
    </div>
  </div>
</div>
<!-- End About -->


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
