<x-mail::message>
# Welcome

Hi {{ $user['name'] }}

Welcome to Laracamp

<x-mail::button :url="route('login')">
Login Sekarang
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
