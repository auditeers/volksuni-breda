<!DOCTYPE html>
<html lang="en">

<x-head />

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
                        <li><a href="/over-ons">OVER ONS</a></li>
                        <li><a href="/docent">DOCENTEN</a></li>
                        <li>{{ $teacher->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- Categorybanner area start -->
<div class="feature-area bg-bright-green pt-35 pb-35 mb-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="feature-thumb" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <img src="/storage/{{ $teacher->image }}" alt="{{ $teacher->name }}">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 mb-md-30 mb-xs-30">
                <div class="feature-content-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
                    <h5 class="sub-title">{{ $teacher->subtitle }}</h5>
                    <h3 class="title">{{ $teacher->name }}</h3>
                    <p>
                        {{ $teacher->seo_description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categorybanner area end -->

<!-- tekst content area start -->
<div class="tekst-area pt-45 pb-25">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="tekst-content">
                    {!! $teacher->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tekst content area end -->


@if(!empty(count($courses)))

<!-- course area start -->
<div class="course-area pt-35 pb-35">
    <div class="container">
        <div class="row justify-content-between align-items-end" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <div class="row mb-30">
                <div class="col-xl-12">
                    <div class="separator"></div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="title-wrap">
                    <h5 class="sub-title">{{ $teacher->name }}</h5>
                    <h5 class="title">Dit zijn de cursussen die ik bij de Volksuniversiteit geef:</h5>
                </div>
            </div>
            <div class="col-xl-6 text-end">
                <div class="read-more-wrap">
                    <a href="/aanbod">Bekijk alle cursussen</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="product-carousel-2 owl-carousel">
                    @foreach($courses as $course)
                    <div class="single-product-slide">
                        <div class="product-wrap">
                            <div class="thumb">
                                <img src="/storage/{{ $course->image }}" alt="{{ $course->title }}">
                                <a class="wishlist" href="/favorieten/add/{{ $course->id }}">
                                    <i class="fal fa-heart"></i>
                                </a>
                                @if($course->highlight_text)
                                <div class="labels">{{ $course->highlight_text }}</div>
                                @endif
                                @if($course->status)
                                <div class="p-badge">{{ $course->status }}</div>
                                @endif
                            </div>
                            <div class="content">
                                <h4 class="title">
                                    <a href="/aanbod/{{ $course->slug }}">{{ $course->title }}</a>
                                    <a href="/aanbod/{{ $course->slug }}" class="cat">{{ $course->type }}</a>
                                </h4>
                                <p class="price">€ {{ number_format($course->price, 2, ",", ".") }}</p>
                            </div>
                            <a href="/aanbod/{{ $course->slug }}" class="read-more">meer info ›</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- course area end -->

@endif

<x-footer />

<x-pagefooter />

</body>

</html>