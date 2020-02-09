@extends('home')

@section('content')

<div class="container-fluid bg-white py-5 desktopArticle">
    <h1 class="text-center Iamarock mb-4 redCustom">Les Actualités</h1>
    @php $no = 1 @endphp
    @foreach($events as $event)
    @php $no++ @endphp
    @if ($no%2) 
      <div class="row">
        <div class="Eventhr"></div>
        <div class="col-6 p-5">
          <img src="{{ asset('storage/' . $event->cover) }}" alt="" class="img-fluid">
        </div>
        <div class="col-6 p-5 text-center">
          <div class="t1">
            <div class="Iamarock pb-2">
              <h2>{{ $event->title }}</h2>
            </div>
            <div><i class="fas fa-hamburger redCustom"></i></div>
            <div class="pt-3 text-dark">
              {{ $event->description }}
            </div>
          </div>
          <div class="text-right dateArticle">
            <p>Le {{ date('d/m/Y', strtotime($event->created_at)) }}</p>
          </div>
        </div>
      </div>
    @else
      <div class="row">
        <div class="Eventhr"></div>
        <div class="col-6 p-5 text-center">
          <div class="t1">
            <div class="Iamarock pb-2">
              <h2>{{ $event->title }}</h2>
            </div>
            <div><i class="fas fa-hamburger redCustom"></i></div>
            <div class="pt-3 text-dark">
            {{ $event->description }}
            </div>
          </div> 
          <div class="text-right dateArticle">
            <p>Le {{ date('d/m/Y', strtotime($event->created_at)) }}</p>
          </div>
        </div>
        <div class="col-6 p-5">
          <img src="{{ asset('storage/' . $event->cover) }}" alt="" class="img-fluid">
        </div>
      </div>
    @endif
    @endforeach
</div>

<div class="container-fluid bg-white py-5 mobileArticle">
    @foreach($events as $event)
      <div class="row">
      <div class="Eventhr"></div>
        <div class="col-12 pt-5 pb-2">
          <img src="{{ asset('storage/' . $event->cover) }}" alt="" class="img-fluid">
        </div>
        <div class="col-12 pb-5 text-center">
          <div class="Iamarock">
            <h2>{{ $event->title }}</h2>
          </div>
          <div><i class="fas fa-hamburger redCustom"></i></div>
          <div class="pt-2">
            {{ $event->description }}
          </div>
          <div class="text-right dateArticle">
            <p>Le {{ date('d/m/Y', strtotime($event->created_at)) }}</p>
          </div>
        </div>
      </div>
    @endforeach
</div>

<div class="photoPagination d-flex align-items-center justify-content-center pagination-lg py-5 bg-white">
    {{ $events->links() }}
</div>

@endsection