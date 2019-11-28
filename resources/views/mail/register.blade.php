@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            NAIOP EDITORIAL
        @endcomponent
    @endslot

    {{-- Body --}}
    Hi {{ $writer->name }},<br>

   You just registered on NAIOP.ORG.NG, the official website for the Nigerian Association of Industrial and Organisational Psychologists(NAIOP) as an author. Do login with the registration details you provided and upload your article for review.<br>

   We would also like you to update your profile with us. Click on the button below to update your profile
@component('mail::button', ['url' => url('/writer/profile')])
Update Profile
@endcomponent
    

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