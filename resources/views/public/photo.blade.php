@extends('home')

@section('content')

<div class="container-fluid bg-white py-5">
  <h1 class="text-center">PHOTOS</h1>
  <div class="galeriePic row py-4">
  @foreach($photos as $photo)
    <div class="col-xs-12 col-md-4 col-lg-4 col-xl-3 d-flex align-items-center justify-content-center">
      <a class="btn my-2 btnPic d-flex align-items-center justify-content-center" title="Voir la photo"  href="{{ route('photos.show', $photo) }}" data-toggle="modal" data-target="#select{{$photo->id}}">
        <img src="{{ asset('storage/' . $photo->picture) }}" alt="Image galerie photo" class="picT">
      </a>
      <div class="modal fade" id="select{{$photo->id}}" tabindex="-1" role="dialog" aria-labelledby="Photo du Rock'n Burger" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
          <img src="{{ asset('storage/' . $photo->picture) }}" alt="Image galerie photo" class="img-fluid">
        </div>
      </div>
    </div>
  @endforeach
  </div>

@endsection