@extends('home')

@section('content')

<div class="container">
  <form action="/contact" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Votre nom *</label>
      <input type="text" name="name" value="" class="form-control">
      <span role="alert">
        <strong class="errMess text-danger">{{ $errors->first('name') }}</strong>
      </span>
    </div>

    <div class="form-group">
      <label for="email">Votre email *</label>
      <input type="text" name="email" value="" class="form-control">
      <span role="alert">
        <strong class="errMess text-danger">{{ $errors->first('email') }}</strong>
      </span>
    </div>

    <div class="form-group">
      <label for="phone">Votre numéro de téléphone</label>
      <input type="text" name="phone" value="" class="form-control">
      <span role="alert">
        <strong class="errMess text-danger">{{ $errors->first('phone') }}</strong>
      </span>
    </div>

    <div class="form-group">
      <label for="subject">Sujet</label>
      <input type="text" name="subject" value="" class="form-control">
      <span role="alert">
        <strong class="errMess text-danger">{{ $errors->first('subject') }}</strong>
      </span>
    </div>

    <div class="form-group">
      <label for="message">Message *</label>
      <textarea type="text" name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
      <span role="alert">
        <strong class="errMess text-danger">{{ $errors->first('message') }}</strong>
      </span>
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>

  </form>
</div>

@endsection