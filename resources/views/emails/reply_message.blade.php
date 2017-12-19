
@component('mail::message')
# You have received a new message.

<hr> <br>

Sent by:  {{ $data['name'] }}  via {{ $data['email'] }} <br>

<hr> <br>

{{ $data['content'] }}

<br>


@component('mail::button', ['url' => 'https://andreihribanas.co.uk'])
Browse portfolio
@endcomponent


@component('mail::panel')
    Do not hesitate to contact me for any other queries.
@endcomponent

Thank you,<br>
{{ config('app.name') }}
@endcomponent
