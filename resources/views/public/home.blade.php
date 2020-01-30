@extends('home')

@section('content')

<img src="/images/snack-2635035_1920.jpg" class="img-fluid imageHome" alt="Responsive image">
<div class="container-fluid accueil text-white">
  <div class="row">
    <div class="col-7 offset-5 mt-5 pt-sm-0 pt-md-5 text-center">
    <h1 class="Iamarock textShad">Ouvert tous les jours<br>Sur place ou à empoter</h1>
    <a type="button" class="btn mt-4 btnMenu" href="{{ route('public_menu') }}">Voir le menu</a>
    </div>
  </div>
</div>

<div class="container-fluid test">

</div>

<div class="container-fluid test1">

</div>

@endsection
