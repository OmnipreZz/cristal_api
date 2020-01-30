@component('mail::message')

# Contact Mail RocknBurger
## Vous avez reçu un message

<strong>Nom </strong> 
{{ $data['name'] }}

<strong>Email </strong> 
{{ $data['email'] }}

<strong>Téléphone </strong> 
{{ $data['phone'] }}

<strong>Message</strong> 

{{ $data['message'] }}


@endcomponent
