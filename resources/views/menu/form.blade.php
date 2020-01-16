@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="float-left">
                    @if($dish ?? '')
                    <h2 class="mb-1">{{ __('Modifier le produit') }}</h2>
                    @else
                    <h2 class="mb-1">{{ __('Nouveau produit') }}</h2>
                    @endif
                  </div>
                  <div class="float-right">
                    <a class="btn btn-primary" title="Retour aux menus" href="{{ route('menus.index') }}"><i class="fas fa-angle-double-left mr-2"></i>{{ __('Retour') }}</a>
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
                          <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="@if($dish ?? '') {{ $dish->name }} @endif">
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="description">{{ __('Description') }}</label>
                          <textarea id="description" name="description" rows="6" class="form-control">@if($dish ?? '') {{ $dish->description }} @endif</textarea>
                          @error('description')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text">€</span>
                          </div>
                          <input id="price" name="price" type="text" placeholder="ex: 15.00" class="form-control @error('price') is-invalid @enderror" value="@if($dish ?? '') {{ $dish->price }} @endif">
                          @error('price')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        <div class="form-group">
                            @if ($dish ?? '')
                            <select name="category_id" class="form-control col-md-6 @error('category_id') is-invalid @enderror" id="category_id">
                                @foreach($categories as $id => $category)
                                <option value="{{$category->id}}"
                                @if ($hisCategory->id == $category->id)
                                {{'selected'}}
                                @endif

                                >{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                              <strong>The category field is required.</strong>
                            </span>
                          @enderror
                            @else
                            <select name="category_id" class="form-control col-md-6 @error('category_id') is-invalid @enderror" id="category_id">
                                <option value="">Choisissez une catégorie</option>
                                @foreach($categories as $id => $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                              <strong>The category field is required</strong>
                            </span>
                          @enderror
                            @endif
                        </div>
                      
                        <div class="form-group">
                          @if ($dish ?? '')
                          @method('PUT')
                          <button class="btn btn-warning" title="Modifier l'événement" formaction="{{ route('menus.update', $dish) }}" type="submit">{{ __('Modifier') }}</button>
                          @else
                          <button class="btn btn-warning" title="Créer l'événement" formaction="{{ route('menus.store') }}" type="submit">{{ __('Envoyer') }}</button>
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
