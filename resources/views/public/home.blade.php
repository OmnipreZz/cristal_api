@extends('home')

@section('content')

<img src="/images/snack-2635035_1920.jpg" class="img-fluid imageHome" alt="Responsive image">
<div class="container-fluid accueil text-white">
  <div class="row">
    <h1 class="col-xs-12 col-md-10 offset-md-1 Rockit textShad">Le Rock'n <span class="redCustom">Burger</span><span class="GlacialRegular byCristal"> <i>By Cristal</i></span></h1>
    <div class="col-7 offset-5 text-center pt-2 textAccueil">
      <h2 class="Iamarock pt-5 mt-4 textShad">Ouvert tous les jours<br>Sur place ou à empoter</h2>
      <a type="button" class="btn mt-4 btnMenu" href="{{ route('public_menu') }}">Voir le menu</a>
    </div>
  </div>
</div>
<div class="homePageScrollPage d-flex align-items-end justify-content-center pb-5">
  <a type="button" class="d-flex align-items-center justify-content-center textShad js-scrollTo arrowScroll" href="#ancre" ><i class="fas fa-chevron-down fa-5x"></i></a>
</div>

<div class="test">
</div>


<div class="Redhr"></div>
<div class="test1 bg-white" id="ancre">

</div>


<div class="container-fluid homePagePhoto bg-white" >
  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-4 bg01"></div>
    <div class="col-4 bg02"></div>
    <div class="col-4 bg03"></div>
  </div>
</div>

<div class="homePhotoButton row">
  <div class="homePhotoTitle col-8">
    <h2 class="Rockit homePhoto textShad text-white p-5">Un Univers Baroque, du <span class="redCustom">R</span>ock et des <span class="redCustom">B</span>urgers !</h2>
  </div>
  <!--<div class=" photoButton col-4 d-flex align-items-center justify-content-center">
    <a type="button" class="btnPhoto d-flex align-items-center justify-content-center" title="Galerie Photo" href="{{ route('public_photo') }}">VOIR LES PHOTOS</a>
  </div>-->
</div>
<div class="homePhotoBack bg-dark"></div>


<div class="Redhr"></div>
<div class="mapPoint text-white text-center">
  <p class="mapPointText Iamarock"><i class="fas fa-map-marker-alt"></i> Où nous trouver</p>
</div>

<iframe class="plan" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1023.5235622843728!2d-1.5666715934842528!3d43.482267443821954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd516b2f7a3753f3%3A0xc16312733970622d!2sMoony!5e0!3m2!1sfr!2sfr!4v1580401147243!5m2!1sfr!2sfr" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


@endsection
