@component('mail::message')
# Message from {{ $data['name'] }} <<{{ $data['email'] }}>>

{{ $data['message'] }}

@component('mail::button', ['url' => route('services.home')])
Our Services
@endcomponent

Thanks,<br>
info@uniquep.com
@endcomponent
