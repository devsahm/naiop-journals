@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            NAIOP EDITORIAL
        @endcomponent
    @endslot

    {{-- Body --}}
    Hi<br>

   Your article titled <b>{{$article->title}}</b> was successfully submitted. We will get back to you as soon as possible.
    {{-- Subcopy --}}
    @slot('subcopy')
        @component('mail::subcopy')
           Best Regards
        @endcomponent
    @endslot


    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
           NAIOP.ORG.NG. All right reserved
        @endcomponent
    @endslot
@endcomponent