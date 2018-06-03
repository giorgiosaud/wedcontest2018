@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url'),'logo'=>$logo])
        @endcomponent
    @endslot

    {{-- Body --}}
    # Un Ultimo Paso

    Solo necesitamos confirmar que tu correo no le pertenece a un Robot y que los recibes bien.
    ¿Nos entiendes cierto? , Cool.
@component('mail::button',  ['url' => url('/register/confirm?token=' . $user->confirmation_token)])
Confirma tu Correo
@endcomponent

Gracias,<br>
{{ config('app.name') }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        @endcomponent
    @endslot
@endcomponent