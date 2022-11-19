<!DOCTYPE html>
<html lang="en">

<x-head :element="$course" />

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
                        <li><a href="/zakelijk/collecties/bedrijfsleven">PROGRAMMA VOOR BEDRIJVEN</a></li>
                        <li><span>{{ $course->title }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- product details area start -->
<div class="product-details-area pt-20 pb-35">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-7">
                <div class="product-details-content">
                    <div class="thumb">
                        <img src="/storage/{{ $course->image }}" alt="{{ $course->title }}">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-5">
                <div class="product-details-right">
                    <h3 class="title">{{ $course->title }}</h3>
                    <h3 class="title">{{ $course->type }}</h3>
                    <p>{{ $course->sessiontime }}</p>
                    <form action="#" class="product-form mt-50">
                        <div class="input-btn">
                            <button class="popup1Open">OFFERTE AANVRAGEN ›</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-7">
                <div class="product-details-content">
                    <h4>{{ $course->title }}</h4>
                    {!! $course->text !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details area end -->

<!-- popup start -->
<div class="popup-wrapper popup-1" style="display:none;">
    <div class="popup-body">
        <div class="popup-wrap bg-blue popup-shadow mb-100">
            <div class="thumb">
                <img src="/storage/{{ $course->image }}" alt="{{ $course->title }}">
                <div class="close">
                    <a href="#" class='popupClose'><i class="far fa-times"></i></a>
                </div>
            </div>
            <div class="content">
                <h4 class="title">
                   {{ $course->title }} | Zakelijk
                </h4>
                <p>
                    Laat je gegevens achter en wij contacteren je met informatie over de zakelijke mogelijkheden.
                </p>
                <form action="/waitinglist" method="post">
                    @csrf

                    <input type="hidden" name="cursus" value="{{ $course->title }}">
                    <input type="hidden" name="type" value="business">

                    <div class="input-wrap">
                        <input type="text" placeholder="naam / achternaam" name="name">
                    </div>

                    <div class="input-wrap">
                        <input type="text" placeholder="E-mailadres" name="email">
                    </div>

                    <div class="btn-wrap">
                        <button type="submit">Stuur mij informatie ›</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- popup end -->

<!-- course area start -->
<div class="course-area pb-35">
    <div class="container">
        <div class="row mb-30">
            <div class="col-xl-12">
                <div class="separator"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="title-wrap-2">
                    <h5 class="title">DEZE VIND JE WELLICHT OOK LEUK</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="product-carousel owl-carousel">

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





<x-footer />

<x-pagefooter />

</body>

</html>