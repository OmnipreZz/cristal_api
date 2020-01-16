@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="float-left">
                    <h2 class="mb-1">{{ __('Nouvelle Photo') }}</h2>
                  </div>
                  <div class="float-right">
                    <a class="btn btn-primary" title="Retour aux photos" href="{{ route('photos.index') }}"><i class="fas fa-angle-double-left mr-2"></i>{{ __('Retour') }}</a>
                  </div>
                </div>
                <div class="card-body">
                  @if ($error ?? '')
                  <div class="alert alert-danger">
                    <strong>{{ $error }}</strong>
                  </div>
                  @endif
                  <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group d-flex flex-column">
                          <label for="picture">{{ __('Image') }}</label>
                          <input type="file" id="picture" name="picture">
                          <span role="alert">
                            <strong class="errMess text-danger">{{ $errors->first('picture') }}</strong>
                          </span>
                        </div>

                        <div class="form-group">
                          <button class="btn btn-warning" title="Envoyer la photo" formaction="{{ route('photos.store') }}" type="submit">{{ __('Envoyer') }}</button>
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