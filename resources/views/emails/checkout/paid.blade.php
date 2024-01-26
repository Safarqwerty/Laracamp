<x-mail::message>
# Konfirmasi Pembayaran

Hi {{ $checkout->User ? $checkout->User->name : 'User' }}
<br>
Pembayaran Berhasil, silahkan nikmati fasilitas yang ada di {{ $checkout->Camp->title }}

<x-mail::button :url="route('user.dashboard')">
My Dashboard
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
