@component('mail::message')
# Your Transaction Has Been Confirmed

Hi {{$checkout->User->name}}
<br>
Your transaction has been confirmed, your <b>{{$checkout->Product->title}}</b> is being prepared and will be sent soon..

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Best Regards,<br>
{{ config('app.name') }}
@endcomponent
