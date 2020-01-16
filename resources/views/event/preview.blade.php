@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="float-left">
                    <h2 class="mb-1">{{ __('Evénement') }}</h2>
                  </div>
                  <div class="float-right">
                    <a class="btn btn-primary" title="Retour aux événements" href="{{ route('events.index') }}"><i class="fas fa-angle-double-left mr-2"></i>{{ __('Retour') }}</a>
                  </div>
                </div>
                <div class="card-body">
                  <h1>{{ $event->title }}</h1>
                  <div class="row">
                    <div class="col-12">
                      <img src="{{ asset('storage/' . $event->cover) }}" alt="" class="img-thumbnail">
                    </div>
                  </div>
                  <p>{{ $event->description }}</p>
                </div>
                <div class="card-footer text-right">
                  <p>Prévu le {{ date('d-m-Y', strtotime($event->event_date)) }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection