@extends('home')

@section('content')

<div class="container-fluid bg-white py-5">
  <h1 class="text-center">PHOTOS</h1>
  <div class="galeriePic row py-4">
  @foreach($photos as $photo)
    <div class="col-xs-12 col-md-4 col-lg-4 col-xl-3 d-flex align-items-center justify-content-center">
      <a class="btn my-2" title="Voir la photo"  href="{{ route('photos.show', $photo) }}"><img src="{{ asset('storage/' . $photo->picture) }}" alt="Image galerie photo" class="picT"></a>
    </div>
  @endforeach
  </div>
</div>

@endsection