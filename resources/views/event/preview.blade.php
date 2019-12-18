@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="float-left">
                    <h2 class="mb-1">{{ __('Preview Event') }}</h2>
                  </div>
                  <div class="float-right">
                    <a class="btn btn-primary" href="{{ route('events.index') }}">{{ __('Back') }}</a>
                  </div>
                </div>
                <div class="card-body">
                  <h1>{{ $event->title }}</h1>
                  <p>{{ $event->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection