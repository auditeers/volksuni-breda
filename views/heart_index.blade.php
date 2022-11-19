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
                        <li><span>FAVORIETEN</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->


<!-- faq area start -->
<div class="faq-area pt-45 pb-25 h-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="faq-title text-center">FAVORIETEN</div>
            </div>
        </div>

        <!-- products loop -->

        @if(session('heart'))

        <div class="row justify-content-center">
            <div class="col-lg-6">

                @foreach(session('heart') as $id => $details)

                <div class="row mt-5">

                    <div class="col-md-4">
                        <div class="thumb">
                            <img src="/storage/{{ $details['image'] }}" alt="{{ $details['name'] }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ $details['link'] }}">
                            <h4 class="mb-0 fs-5">
                                {{ $details['name'] }}
                            </h4>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <p class="text-end">
                            <a href="/favorieten/remove/{{ $id }}"><i class="far fa-times"></i></a>
                        </p>

                    </div>
                </div>

                @endforeach

                <div class="row">

                    <div class="col-12 product-form">
                        <div class="input-btn">
                            <a href="/aanbod" class="read-more-black text-center ml-5 ">VERDER WINKELEN</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        @endif

        <!-- end products loop -->
    </div>
</div>


<x-footer />

<x-pagefooter />

</body>

</html>