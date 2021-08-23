@component('mail::message')
HI 

your password reset link 



@component('mail::button', ['url' => "http://127.0.0.1:8000/changepwd.{$token}", 'color' => 'success'])
reset password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
