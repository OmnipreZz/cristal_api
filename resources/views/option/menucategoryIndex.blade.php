@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="float-left">
                    <h2 class="mb-1">{{ __('Catégories des menus') }}</h2>
                  </div>
                  <div class="float-right">
                    <a class="btn btn-primary" title="Ajouter une nouvelle catégorie" href="{{ route('menucategories.create') }}"><i class="fas fa-plus mr-2"></i>{{ __('Ajouter') }}</a>
                    <a class="btn btn-primary" title="Retour aux menus" href="{{ route('menus.index') }}"><i class="fas fa-angle-double-left mr-2"></i>{{ __('Retour') }}</a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>{{ __('No') }}</th>
                        <th>{{ __('Nom') }}</th>
                        <th width="180">{{ __('Action') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1 @endphp

                      @foreach($menucategories as $menucategory)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $menucategory->name }}</td>
                        <td class="text-right">
                          <a class="btn btn-warning btn-sm ml-2" title="Editer la catégorie" href="{{ route('menucategories.edit', $menucategory) }}">{{ __('Editer') }}</a>

                          <button class="btn btn-danger btn-sm ml-2" title="Supprimer la catégorie" data-toggle="modal" data-target="#confirm{{$menucategory->id}}">
                            <i class="fas fa-times"></i>
                          </button>
                          <div class="modal fade" id="confirm{{$menucategory->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h2 class="text-danger">Supprimer</h2>
                              </div>
                              <div class="modal-body">
                                  <p>Voulez vous supprimer définitivement la catégorie "{{$menucategory->name}}" ?</p>
                                  <p class="text-danger">Les plats associés a cette catégorie pourrais être inexploitables</p>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                  <form action="{{ route('menucategories.destroy', $menucategory) }}" method="POST" class="d-inline">
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