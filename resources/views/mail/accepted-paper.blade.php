@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            NAIOP EDITORIAL
        @endcomponent
    @endslot

    {{-- Body --}}
 
  Dear {{ $name }},<br><br>

<b>ACCEPTANCE OF PAPER FOR PUBLICATION</b><br>
I am pleased to convey the decision of the editorial team to accept your paper for publication, in the maiden issue of the Journal of Industrial and Organizational Behaviour in Africa (JIOBA). In view of this, you are requested to guarantee that the paper is not sent to any other publisher. <br><br>

Please note as well that the acceptance of your paper is subject to payment of the sum of thirty five thousand naira (₦35, 000.00) only or the equivalent of one hundred dollar ($100) for authors outside of Nigeria, latest August 15th 2019.<br><br>

Payment is to be made to Nigerian Association of Industrial and Organisational Psychologists (NAIOP) at:<br><br>

First Bank,<br>
<b>Account No: 2032467136,</b><br><br>

Kindly notify the editorial team by replying this male as soon as payment is made<br>
Thank you.<br>
Ijide, W. O.V. PhD.,<br>
Department of psychology,<br>
Faculty of the Social Sciences,<br>
University of Ibadan.<br>

Ibadan, Nigeria. <br>
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