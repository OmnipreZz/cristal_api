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
                    <a class="btn btn-primary" href="{{ route('menus.create') }}">{{ __('Add New') }}</a>
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>{{ __('No') }}</th>
                        <th>{{ __('Name') }}</th>
                        <th width="180">{{ __('Action') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no = 1 @endphp

                      @foreach($menus as $menu)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $menu->name }}</td>
                        <td>
                          <a class="btn btn-info btn-sm" href="{{ route('menus.show', $menu) }}">{{ __('View') }}</a>
                          <a class="btn btn-warning btn-sm" href="{{ route('menus.edit', $menu) }}">{{ __('Edit') }}</a>
                          <form action="{{ route('menus.destroy', $menu) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
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