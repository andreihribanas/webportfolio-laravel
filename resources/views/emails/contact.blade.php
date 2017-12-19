@component('mail::message')
# You have received a new message through the contact form.

  ##  Sender details: {{ $data['name'] }} via {{ $data['email'] }} <br>

  ## Phone number: {{ $data['phone_no'] }} <br>

  <hr> <br>

  ##  Subject: {{ $data['subject'] }}

  <hr><br>


{{ $data['content']}}

@component('mail::button', ['url' => 'https://andreihribanas.co.uk/portfolio'])
Browse projects
@endcomponent

@component('mail::panel')
  I will contact you soon regarding your enquiry.
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
