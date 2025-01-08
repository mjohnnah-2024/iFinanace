<x-mail::message>
# Contact Form Message from {{$this->data['name']}}

{{$this->data['message']}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
