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
                    <a class="btn btn-primary" title="Ajouter un nouvel événement" href="{{ route('events.create') }}"><i class="fas fa-plus mr-2"></i>{{ __('Ajouter') }}</a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>{{ __('Date') }}</th>
                        <th>{{ __('Titre') }}</th>
                        <th width="180">{{ __('Action') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($events as $event)
                      <tr>
                        <td>{{ date('d-m-Y', strtotime($event->event_date)) }}</td>
                        <td>{{ $event->title }}</td>
                        <td class="text-right">
                          <a class="btn btn-info btn-sm" title="Voir l'événement"  href="{{ route('events.show', $event) }}">{{ __('Voir') }}</a>
                          <a class="btn btn-warning btn-sm ml-2" title="Editer l'événement" href="{{ route('events.edit', $event) }}">{{ __('Editer') }}</a>

                          <button class="btn btn-danger btn-sm ml-2" title="Supprimer l'événement" data-toggle="modal" data-target="#confirm{{$event->id}}">
                            <i class="fas fa-times"></i>
                          </button>
                          <div class="modal fade" id="confirm{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h2 class="text-danger">Supprimer</h2>
                              </div>
                              <div class="modal-body">
                                  <p>Voulez vous supprimer définitivement l'événement "{{$event->title}}" ?</p>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                  <form action="{{ route('events.destroy', $event) }}" method="POST" class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">{{ __('Supprimer') }}</button>
                                </form>
                              </div>
                            </div>
                            </div>
                          </div>
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
