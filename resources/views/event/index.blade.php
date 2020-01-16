@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="float-left">
                    <h2 class="mb-1">{{ __('Evénements') }}</h2>
                  </div>
                  <div class="float-right">
                    <a class="btn btn-primary" title="Ajouter un nouvel événement" href="{{ route('events.create') }}">{{ __('Ajouter') }}</a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>{{ __('No') }}</th>
                        <th>{{ __('Titre') }}</th>
                        <th width="180">{{ __('Action') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1 @endphp

                      @foreach($events as $event)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $event->title }}</td>
                        <td>
                          <a class="btn btn-info btn-sm" href="{{ route('events.show', $event) }}">{{ __('Voir') }}</a>
                          <a class="btn btn-warning btn-sm ml-2" href="{{ route('events.edit', $event) }}">{{ __('Editer') }}</a>
                          <form action="{{ route('events.destroy', $event) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm ml-3" type="submit"><i class="fas fa-times"></i></button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
