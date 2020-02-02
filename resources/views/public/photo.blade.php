@extends('home')

@section('content')

<div class="container-fluid bg-white py-5">
  <h1 class="text-center Iamarock redCustom">Galerie Photo</h1>

  <div class="galeriePic galleryDesktop row py-4">
  @foreach($photos as $photo)
    <div class="col-3 d-flex align-items-center justify-content-center">
      <a class="btn my-2 btnPic d-flex align-items-center justify-content-center" title="Voir la photo"  href="{{ route('photos.show', $photo) }}" data-toggle="modal" data-target="#selectDesktop{{$photo->id}}">
        <img src="{{ asset('storage/' . $photo->picture) }}" alt="Image galerie photo" class="picT">
      </a>
      <div class="modal fade" id="selectDesktop{{$photo->id}}" tabindex="-1" role="dialog" aria-labelledby="Photo du Rock'n Burger" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
          <img src="{{ asset('storage/' . $photo->picture) }}" alt="Image galerie photo" class="img-fluid">
        </div>
      </div>
    </div>
  @endforeach
  <div class="photoPagination d-flex align-items-center justify-content-center pagination-lg pt-5">
    {{ $photos->links() }}
  </div>
  </div>

  <div class="galeriePic galleryPad row py-4">
  @foreach($padphotos as $padphoto)
    <div class="col-4 d-flex align-items-center justify-content-center">
      <a class="btn my-2 btnPic d-flex align-items-center justify-content-center" title="Voir la photo"  href="{{ route('photos.show', $padphoto) }}" data-toggle="modal" data-target="#selectPad{{$padphoto->id}}">
        <img src="{{ asset('storage/' . $padphoto->picture) }}" alt="Image galerie photo" class="picT">
      </a>
      <div class="modal fade" id="selectPad{{$padphoto->id}}" tabindex="-1" role="dialog" aria-labelledby="Photo du Rock'n Burger" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
          <img src="{{ asset('storage/' . $padphoto->picture) }}" alt="Image galerie photo" class="img-fluid">
        </div>
      </div>
    </div>
  @endforeach
  <div class="photoPagination d-flex align-items-center justify-content-center pagination-lg pt-5">
    {{ $padphotos->links() }}
  </div>
  </div>

  <div class="galeriePic galleryMobile row py-4">
  @foreach($mobilephotos as $mobilephoto)
    <div class="col-12 d-flex align-items-center justify-content-center">
      <a class="btn my-2 btnPic d-flex align-items-center justify-content-center" title="Voir la photo"  href="{{ route('photos.show', $mobilephoto) }}" data-toggle="modal" data-target="#selectMobile{{$mobilephoto->id}}">
        <img src="{{ asset('storage/' . $mobilephoto->picture) }}" alt="Image galerie photo" class="picT">
      </a>
      <div class="modal fade" id="selectMobile{{$mobilephoto->id}}" tabindex="-1" role="dialog" aria-labelledby="Photo du Rock'n Burger" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
          <img src="{{ asset('storage/' . $mobilephoto->picture) }}" alt="Image galerie photo" class="img-fluid">
        </div>
      </div>
    </div>
  @endforeach
  <div class="photoPagination d-flex align-items-center justify-content-center pagination-lg pt-5">
    {{ $mobilephotos->links() }}
  </div>
  </div>
 

@endsection