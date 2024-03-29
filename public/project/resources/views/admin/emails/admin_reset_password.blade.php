@component('mail::message')
# Reset Account

{{-- Welcome {{ admin()->user()->name}} <br> --}}

Welcome {{ $data['data']->name }} <br>
The body of your message.

@component('mail::button', ['url' => aurl('reset/password/'.$data['token'])])
Click Here To Reset Your Password
@endcomponent
Or <br>
Copy this Link
<a href="{{ aurl('reset/password/'.$data['token']) }}"> {{aurl('reset/password/'.$data['token'])}}</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent

