@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="float-left">
                    <h2 class="mb-1">{{ __('Photo') }}</h2>
                  </div>
                  <div class="float-right">
                    <a class="btn btn-primary" title="Retour aux photos"href="{{ route('events.index') }}"><i class="fas fa-angle-double-left mr-2"></i>{{ __('Retour') }}</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <img src="{{ asset('storage/' . $photo->picture) }}" alt="" class="img-thumbnail">
                    </div>
                  </div>
                </div>
                <div class="card-footer text-right">
                <button class="btn btn-danger" title="Supprimer la photo" data-toggle="modal" data-target="#confirm{{$photo->id}}">
                  <i class="fas fa-times"></i>
                </button>
                <div class="modal fade" id="confirm{{$photo->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2 class="text-danger">Supprimer</h2>
                    </div>
                    <div class="modal-body">
                        <p>Voulez vous supprimer définitivement cette photo?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <form action="{{ route('photos.destroy', $photo) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">{{ __('Supprimer') }}</button>
                      </form>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection