<x-mail::message>
# Register Camp: {{ $checkout->Camp->title }}

Hi {{ $checkout->User ? $checkout->User->name : 'User' }}
<br>
Anda telah mendaftar di kelas <b>{{ $checkout->Camp->title }}</b>, jangan lupa bayar yahh!

<x-mail::button :url="route('user.dashboard')">
My Dashboard
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
