@component('mail::message')
# Register Product: {{$checkout->Product->title}}

Hi {{$checkout->User->name}}
<br>
Thank you for your order <b>{{$checkout->Product->title}}</b>, please see payment instruction by click the button below.

@component('mail::button', ['url' => route('user.checkout.invoice', $checkout->id)])
Get Invoice
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
