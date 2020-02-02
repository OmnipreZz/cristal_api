@extends('home')

@section('content')

<div class="container-fluid contactPage  pt-4 pb-4 d-flex align-items-center justify-content-center">
  <div class="col-sm-12 col-md-12 col-lg-10 col-xl-8">
    <div class="row">
    <div class="col-12 text-center">
      <h2 class="textShad Iamarock text-white">Contactez-nous !</h2>
    </div>
    <div class="contactForm  shadow-sm col-sm-12 col-md-6 p-3">
      <form action="/contact" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Votre nom *</label>
        <input type="text" name="name" value="" class="form-control">
        <span class="errMess" role="alert">
          {{ $errors->first('name') }}
        </span>
      </div>

      <div class="form-group">
        <label for="email">Votre email *</label>
        <input type="text" name="email" value="" class="form-control">
        <span class="errMess" role="alert">
          {{ $errors->first('email') }}
        </span>
      </div>

      <div class="form-group">
        <label for="phone">Votre numéro de téléphone</label>
        <input type="text" name="phone" value="" class="form-control">
        <span class="errMess" role="alert">
          {{ $errors->first('phone') }}
        </span>
      </div>

      <div class="form-group">
        <label for="message">Message *</label>
        <textarea type="text" name="message" id="message" rows="5" class="form-control"></textarea>
        <span class="errMess" role="alert">
          {{ $errors->first('message') }}
        </span>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-shadow btnContact text-white">Envoyer</button>
      </div>
      

      </form>
    </div>
    <div class="contactInfo bg-white text-center shadow-sm col-sm-12 col-md-6 p-3">
      <p class="contactPhoneMess Iamarock">Pour toutes réservations sur place ou commandes à emporter contactez-nous uniquement par téléphone</p>
      <p class="contactPhone p-3">+33 6 64 64 64 64</p>
    
        <hr class='bg-dark'>
        </hr>
        <div class="col-12 p-3">
        <p class="mt-4"><span class="Rockit">Le Rock'n Burger</span><br>12 rue du Port Vieux <br> 64200 Biarritz <br>Ouvert tous les jours <br> De 12h00 à 22h30</p>
        </div>
   
    </div>
    </div>
    
  </div>
</div>
<div class="Redhr"></div>
<div class="mapPoint text-white text-center">
  <p class="mapPointText Iamarock"><i class="fas fa-map-marker-alt"></i> Où nous trouver</p>
</div>
<iframe class="plan" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1023.5235622843728!2d-1.5666715934842528!3d43.482267443821954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd516b2f7a3753f3%3A0xc16312733970622d!2sMoony!5e0!3m2!1sfr!2sfr!4v1580401147243!5m2!1sfr!2sfr" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

@endsection