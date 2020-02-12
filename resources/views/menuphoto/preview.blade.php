@extends('admin.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="float-left">
            <h2 class="mb-1">{{ __('Menu') }}</h2>
          </div>
          <div class="float-right">
            <a class="btn btn-primary" title="Retour aux menus"href="{{ route('menuphotos.index') }}"><i class="fas fa-angle-double-left mr-2"></i>{{ __('Retour') }}</a>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <img src="{{ asset('storage/' . $menuphoto->picture) }}" alt="" class="img-thumbnail">
            </div>
          </div>
        </div>
        <div class="card-footer text-right">
          <button class="btn btn-danger" title="Supprimer le menu" data-toggle="modal" data-target="#confirm{{$menuphoto->id}}">
            <i class="fas fa-times"></i>
          </button>
          <div class="modal fade" id="confirm{{$menuphoto->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="text-danger">Supprimer</h2>
                </div>
                <div class="modal-body">
                    <p>Voulez vous supprimer définitivement ce menu?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                  <form action="{{ route('menuphotos.destroy', $menuphoto) }}" method="POST" class="d-inline">
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
</div>
@endsection