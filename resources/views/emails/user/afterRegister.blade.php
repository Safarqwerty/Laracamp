<x-mail::message>
# Welcome

Hi {{ $user['name'] }}

The body of your message.

<x-mail::button :url="route('login')">
Login Sekarang
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
