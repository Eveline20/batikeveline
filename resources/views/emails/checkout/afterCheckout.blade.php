@component('mail::message')
# Checkout Product: {{$checkout->Product->title}}

Hi {{$checkout->User->name}}
<br>
Thank you for your order <b>{{$checkout->Product->title}}</b>, please see payment instruction by click the button below.

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Best Regards,<br>
{{ config('app.name') }}
@endcomponent
