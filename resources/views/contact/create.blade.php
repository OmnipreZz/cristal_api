@extends('home')

@section('content')

<div class="container">
  <form action="/contact" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Votre nom</label>
      <input type="text" name="name" value="" class="form-control">
      <div>{{ $errors->first('name') }}</div>
    </div>

    <div class="form-group">
      <label for="email">Votre email</label>
      <input type="text" name="email" value="" class="form-control">
      <div>{{ $errors->first('email') }}</div>
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <textarea type="text" name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
      <div>{{ $errors->first('message') }}</div>
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>

  </form>
</div>

@endsection