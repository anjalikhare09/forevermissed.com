@component('mail::message')
# Contact Form Submission

**Type of Inquiry:** {{ $data['type_of_inquiry'] }}
**Name:** {{ $data['name'] }}
**Email:** {{ $data['email'] }}
@if(isset($data['memorial_name']))
**Memorial Name:** {{ $data['memorial_name'] }}
@endif
**Message Subject:** {{ $data['message_subject'] }}

{{ $data['message_details'] }}
@endcomponent
