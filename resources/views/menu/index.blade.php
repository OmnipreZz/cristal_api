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
                  <a class="btn btn-primary" title="Ajouter un nouveau produit" href="{{ route('menus.create') }}"><i class="fas fa-plus mr-2"></i>{{ __('Ajouter') }}</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="container-fluid pt-4">
                    <form method="POST" action="{{ route('menu_indexcategory') }}" aria-label="">
                      @csrf
                        <div class="form-group row">
                            <label for="category" class="col-form-label text-md-right col-md-3">Choisissez une catégorie :</label>
                            <select name="category" class="form-control col-md-3" id="category">
                                @foreach($categories as $id => $category)
                                <option value="{{$category->id}}"
                                @if ($hisCategory == $category->id)
                                {{'selected'}}
                                @endif
                                >{{$category->name}}</option>
                                @endforeach
                            </select>
                            <button type="submit" title="Valider" class="btn btn-primary ml-2">
                            <i class="fas fa-check"></i>
                            </button>
                        </div>
                    </form>
                  </div>
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        @foreach ($categories as $id => $category)
                        @if ($hisCategory == $category->id)
                        <th>Catégorie : {{$category->name}}</th>
                        @endif
                        @endforeach
                        <th>{{ __('Description') }}</th>
                        <th>{{ __('Price') }}</th>
                        <th width="180">{{ __('Action') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($menus as $menu)
                      <tr>
                        <th class="text-secondary">{{$menu->name}}</th>
                        <td class="text-secondary">{{$menu->description}}</td>
                        <td class="text-secondary">{{$menu->price}}</td>
                        <td class="text-right">
                          <a class="btn btn-warning btn-sm" title="Editer le produit" href="{{ route('menus.edit', $menu) }}">{{ __('Editer') }}</a>

                          <button class="btn btn-danger btn-sm ml-2" title="Supprimer le produit" data-toggle="modal" data-target="#confirm{{$menu->id}}">
                            <i class="fas fa-times"></i>
                          </button>
                          <div class="modal fade" id="confirm{{$menu->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h2 class="text-danger">Supprimer</h2>
                              </div>
                              <div class="modal-body">
                                  <p>Voulez vous supprimer définitivement le produit "{{$menu->name}}" ?</p>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                  <form action="{{ route('menus.destroy', $menu) }}" method="POST" class="d-inline">
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
