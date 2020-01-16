@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <div class="float-left">
                    <h2 class="mb-1">{{ __('New Event') }}</h2>
                  </div>
                  <div class="float-right">
                    <a class="btn btn-primary" href="{{ route('events.index') }}"><i class="fas fa-angle-double-left mr-2"></i>{{ __('Retour') }}</a>
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
                        <div class="form-group">
                          <label for="title">{{ __('Titre') }}</label>
                          <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="@if($event ?? '') {{ $event->title }} @endif">
                          @error('title')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>

                        @if($event ?? '')
                          <div class="row">
                            <div class="col-12">
                              <img src="{{ asset('storage/' . $event->cover) }}" alt="" class="img-thumbnail">
                            </div>
                          </div>
                        @endif
                        <div class="form-group d-flex flex-column">
                          <label for="cover">{{ __('Image') }}</label>
                          <input type="file" id="cover" name="cover">
                          <span role="alert">
                            <strong class="errMess text-danger">{{ $errors->first('cover') }}</strong>
                          </span>
                        </div>

                        <div class="form-group">
                          <label for="description">{{ __('Description') }}</label>
                          <textarea id="description" name="description" rows="6" class="form-control">@if($event ?? '') {{ $event->description }} @endif</textarea>
                          @error('description')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="event_date">{{ __('Date') }}</label>
                          <input id="event_date" name="event_date" type="text" class="date form-control @error('event_date') is-invalid @enderror" value="@if($event ?? '') {{ $event->event_date }} @endif" readonly>
                        </div>
                        <div class="form-group">
                          @if ($event ?? '')
                          @method('PUT')
                          <button class="btn btn-warning" formaction="{{ route('events.update', $event) }}" type="submit">{{ __('Modifier') }}</button>
                          @else
                          <button class="btn btn-warning" formaction="{{ route('events.store') }}" type="submit">{{ __('Envoyer') }}</button>
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
<script type="text/javascript">
    $('.date').datepicker({  
      format: 'yyyy-mm-dd'
    });  
</script> 
@endsection