@component('mail::message')

Hi {{$form['name']}},

Thank you for contacting {{ config('app.name') }}.

Your email has been received and we shall respond shortly.

@component('mail::panel')
{{$form['message']}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
