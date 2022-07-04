@component('mail::message')
# Welcome!

Hi {{$user->name}}
<br>
Welcome to Batik Store, your account has been created successfully. Now you can choose your best match fashion for your style!

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Best Regards,<br>
{{ config('app.name') }}
@endcomponent
