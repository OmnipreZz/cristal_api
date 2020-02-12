@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="float-left">
                    <h2 class="mb-1">{{ __('Menus') }}</h2>
                  </div>
                  <div class="float-right">
                    <a class="btn btn-primary" title="Ajouter un nouveau menu" href="{{ route('menuphotos.create') }}"><i class="fas fa-plus mr-2"></i>{{ __('Ajouter') }}</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row">
                    @foreach($menuphotos as $menuphoto)
                    <div class="col-4">
                    <a class="btn" title="Voir la photo"  href="{{ route('menuphotos.show', $menuphoto) }}"><img src="{{ asset('storage/' . $menuphoto->picture) }}" alt="" class="img-thumbnail"></a>
                    </div>
                    @endforeach
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection