<!DOCTYPE html>
<html lang="nl">

<x-head :element="$page" />

<body>

<x-header />

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-shadow pt-30 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-2 text-center text-md-start mb-xs-10">
                <div class="breadcrumb-link">
                    <a href="{{ url()->previous() }}"><i class="fal fa-long-arrow-left"></i> TERUG</a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="breadcrumb-wrap text-center text-lg-center text-md-end">
                    <ul>
                        <li><a href="/">HOME</a></li>
                        <li><span>{{ $page->title }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->


<!-- tekst area start -->
<div class="tekst-area pt-45 pb-25">
    <div class="container">
        <div class="row justify-content-center mb-30">
            <div class="col-md-8">
                <div class="tekst-content">
                    @if(!empty($page->subtitle))
                    <h2 class="subtitle">{{ $page->subtitle }}</h2>
                    @endif
                    <h1 class="contenttitle">{{ $page->title }}</h1>
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<div class="tekst-area bg-gray pt-45 pb-35 mb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10">
                <div class="tekst-info">
                    <h4>Korting met Bredapas</h4>
                    <p>
                        Dolorest que laut re ditasim net del ium facerum est aut etur sae simus doluptiature porumenes
                        autet abor anitium et, et vellam rem enima inveri delendu ciasimagnis evellant, id unt
                        voluptaquat fugit enihicidunt estiur?
                    </p>
                    <div class="url">www.breda.nl/bredapas-aanvragen</div>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<x-footer />

<x-pagefooter />

</body>

</html>