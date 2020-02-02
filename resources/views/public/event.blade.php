@extends('home')

@section('content')

<div class="container-fluid bg-white py-5">
    @foreach($events as $event)
      <div class="row">
        <div class="col-6 p-5">
          <img src="{{ asset('storage/' . $event->cover) }}" alt="" class="img-fluid">
        </div>
        <div class="col-6 p-5">
          <div class="text-center Iamarock">
            <h2>{{ $event->title }}</h2>
          </div>
          <div class="">
            <p>{{ $event->description }}</p>
          </div>
        </div>
      </div>
    @endforeach
</div>

@endsection