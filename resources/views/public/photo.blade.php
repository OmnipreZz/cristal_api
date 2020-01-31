@extends('home')

@section('content')

<div class="container-fluid bg-white py-5">
  <h1 class="text-center">La Galerie Photo</h1>
  <div class="row pt-4">
  @foreach($photos as $photo)
    <div class="galeriePic col-xs-12 col-md-4 col-lg-4 col-xl-3">
      <a class="btn shadow-lg my-2" title="Voir la photo"  href="{{ route('photos.show', $photo) }}"><img src="{{ asset('storage/' . $photo->picture) }}" alt="Image galerie photo" class="img-responsive picT"></a>
    </div>
  @endforeach
  </div>
</div>

@endsection