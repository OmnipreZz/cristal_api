@extends('home')

@section('content')

<div class="text-center pt-5 pb-5 bg-white">
  <h1 class="text-center Iamarock mb-4 redCustom">Le Menu</h1>
@foreach($menuphotos as $menuphoto)
  <img src="{{ asset('storage/' . $menuphoto->picture) }}" class="img-fluid menuImage mb-5 carteMenu" alt="">
@endforeach
</div>

@endsection