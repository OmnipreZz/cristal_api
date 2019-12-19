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
                    <a class="btn btn-primary" href="{{ route('events.index') }}">{{ __('Back') }}</a>
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
                          <label for="title">{{ __('Title') }}</label>
                          <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="@if($event ?? '') {{ $event->title }} @endif">
                          @error('title')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="description">{{ __('Description') }}</label>
                          <textarea id="description" name="description" rows="6" class="form-control @error('description') is-invalid @enderror">@if($event ?? '') {{ $event->description }} @endif</textarea>
                          @error('description')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="start_date">{{ __('Date') }}</label>
                          <input id="start_date" name="start_date" type="text" class="date form-control" value="@if($event ?? '') {{ $event->start_date }} @endif">
                        </div>
                        <div class="form-group">
                          <label for="start_time">{{ __('Heure') }}</label>
                          <input id="start_time" name="start_time" type="text" class="timepicker form-control" value="@if($event ?? '') {{ $event->start_time }} @endif">
                        </div>
                        <div class="form-group">
                          @if ($post ?? '')
                          @method('PUT')
                          <button claas="btn btn-warning" formaction="{{ route('events.update', $event) }}" type="submit">{{ __('Update') }}</button>
                          @else
                          <button claas="btn btn-warning" formaction="{{ route('events.store') }}" type="submit">{{ __('Submit') }}</button>
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

      format: 'mm-dd-yyyy'

    });  

    $('.timepicker').datetimepicker({

      format: 'HH:mm:ss'

    }); 

</script>  
@endsection