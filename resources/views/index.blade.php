@extends('layouts.app')
@section('content')

    <div class="first-section">
        <h2 class="pl-2 title">¿Porque una pagina web?</h2>

        <p class="paragraph">En la actualidad, tener una página web nos brinda credibilidad ante los
            clientes potenciales y nos ayuda a ser visibles en los buscadores, de ahí<br>
            la importancia de crear una estructura en la que el contenido resulte
            relevante. Considera que muchas visitas a tu sitio serán de personas que<br>
            no conocen tu marca, incluye su ubicación física, número telefónico, mail
            de contacto y/o redes sociales, así como fotografías de alta calidad de<br> tus
            productos.</p>

    </div>
    <div class="second-section">
        <h2 class="pl-2 title">¿Qué ofrecemos?</h2>
        <p class="paragraph">
            Ofrecemos desarrollo web a la medida, paginas web profesionales para tu negocio, Spicy jalapeno
            doner sausage hamburger short loin ham hock,<br> ground round pork chop alcatra jowl venison frankfurter
            cow leberkas. Shoulder tenderloin beef ribs, pork belly burgdoggen kielbasa ham <br>turducken tongue picanha
            capicola sirloin pork landjaeger. Picanha pork belly ribeye brisket tenderloin swine short loin spare ribs
            ground round <br>fatback. Ground round t-bone turducken andouille pork chop filet mignon. Pork salami pig
            sausage shank, flank buffalo brisket corned beef beef <br>frankfurter turkey ball tip sirloin.
        </p>
    </div>
    <div class="third-section" >
        <div class="banner-2">
            <div class="item-c">
                <img src="/img/slider_first.jpg" alt="" class="img-carousel">
            </div>
            <div class="item-c" style="display:none;">
                <img src="/img/slider_second.jpg" alt="" class="img-carousel">
            </div>
            <div class="item-c" style="display:none;">
                <img src="/img/slider_third.jpg" alt="" class="img-carousel">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="mr-3 ml-3" id="arrow-left">
                <i class="fa fa-arrow-left text-white" aria-hidden="true"></i>
            </div>
            <div class="mr-3 ml-3" id="arrow-right">
                <i class="fa fa-arrow-right text-white" aria-hidden="true"></i>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

<script type="text/javascript">

    $('#arrow-left').click(function(){
        $('.item-c').animate({"margin-right":"+=100%"})
    })

</script>

@endpush

