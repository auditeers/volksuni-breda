<!DOCTYPE html>
<html lang="en">

<x-head />

<body>

<x-header />

<!-- breadcrumb area start -->
<section class="breadcrumb-area pt-30 pb-30">
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
                        <li>{{ $collection->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- cta area start -->
<div class="cta-area bg-blue pt-45 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="feature-content-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                    <h5 class="sub-title">{{ $collection->subtitle }}</h5>
                    <h3 class="title">{{ $collection->title }}</h3>
                    <p>
                        {{ $collection->intro }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cta area end -->


<!-- cta area start -->
<div class="cta-area pt-40">
    <div class="container">
        <div class="row justify-content-center mb-25">
            <div class="col-xl-8 col-lg-10">
                <div class="cta-content-wrap">
                    {!! $collection->content !!}
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="cta-list">
                    <ul>
                        <li><i class="fas fa-check"></i> 100% afstemming op jouw organisatie</li>
                        <li><i class="fas fa-check"></i> Aantrekkelijke prijs-kwaliteit verhouding</li>
                        <li><i class="fas fa-check"></i> Jij bepaalt doel inhoud en resultaat</li>
                        <li><i class="fas fa-check"></i> Groepstrainingen en individueel aanbod</li>
                        <li><i class="fas fa-check"></i> Gratis digitale leerondersteuning thuis</li>
                        <li><i class="fas fa-check"></i> In-company, data en tijd bepaal jij</li>
                        <li><i class="fas fa-check"></i> Docenten met ervaring in het werkveld</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cta area end -->

<!-- filter area start -->
<div class="filter-area-3">
    <div class="container">
        <div class="row mb-35 text-center">
            <div class="col-xl-12">
                <div class="filter-title">AANBOD: {{ strtoupper($collection->title) }}</div>
            </div>
        </div>
        <div class="row">
            @foreach($collection->courses as $course)
            
            <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                <div class="product-wrap">
                    <div class="thumb">
                        <img src="/storage/{{ $course->image }}" alt="{{ $course->title }}">
                        <a class="wishlist" href="/favorieten/add/{{ $course->id }}">
                            <i class="fal fa-heart"></i>
                        </a>
                        @if($course->highlight_text)
                        <div class="labels">{{ $course->highlight_text }}</div>
                        @endif
                    </div>
                    <div class="content mb-15">
                        <h4 class="title">
                            <a href="/aanbod/{{ $course->slug }}">{{ $course->title }}</a>
                            <a href="/aanbod/{{ $course->slug }}" class="cat">{{ $course->type }}</a>
                        </h4>
                    </div>
                    <a href="/zakelijk/aanbod/{{ $course->slug }}" class="read-more">offerte ›</a>
                </div>
            </div>
            
            @endforeach
            
        </div>
        <div class="row mb-30">
            <div class="col-xl-12">
                <div class="separator"></div>
            </div>
        </div>
       
    </div>
</div>
<!-- filter area end -->

<x-footer />

<x-pagefooter />

</body>

</html>