@component('mail::message')
Inquiry send by {{$inquiry->name}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
