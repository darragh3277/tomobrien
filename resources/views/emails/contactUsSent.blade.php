@component('mail::message')

Hi,

{{$form['name']}}({{$form['email']}}) has sent you the following email: 

@component('mail::panel')
{{$form['message']}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
