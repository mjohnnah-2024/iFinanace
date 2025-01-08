<x-mail::message>
# Contact Form Message from {{ data['name'] }}

Name: {{ $data['name'] }}
Email: {{ $data['email'] }}
Number: {{ $data['subject'] }}
Message:{{ $data['message'] }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
