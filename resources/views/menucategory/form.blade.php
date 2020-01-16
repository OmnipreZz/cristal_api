@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="float-left">
                  @if($menucategory ?? '')
                    <h2 class="mb-1">{{ __('Modifier la catégorie') }}</h2>
                    @else
                    <h2 class="mb-1">{{ __('Nouvelle catégorie') }}</h2>
                    @endif
                  </div>
                  <div class="float-right">
                    <a class="btn btn-primary" title="Retour aux catégories" href="{{ route('menucategories.index') }}"><i class="fas fa-angle-double-left mr-2"></i>{{ __('Retour') }}</a>
                  </div>
                </div>
                <div class="card-body">
                  @if ($error ?? '')
                  <div class="alert alert-danger">
                    <strong>{{ $error }}</strong>
                  </div>
                  @endif
                  <form method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label for="name">{{ __('Nom') }}</label>
                          <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="@if($menucategory ?? '') {{ $menucategory->name }} @endif">
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="form-group">
                          @if ($menucategory ?? '')
                          @method('PUT')
                          <button class="btn btn-warning" title="Modifier la catégorie" formaction="{{ route('menucategories.update', $menucategory) }}" type="submit">{{ __('Modifier') }}</button>
                          @else
                          <button class="btn btn-warning" title="Créer la catégorie" formaction="{{ route('menucategories.store') }}" type="submit">{{ __('Envoyer') }}</button>
                          @endif
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection