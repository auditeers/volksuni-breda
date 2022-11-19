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
                        <li><span>WINKELWAGEN</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- faq area start -->
<div class="faq-area pt-45 pb-25">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="faq-title text-center">WINKELWAGEN</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="input-btn">
                    <a href="/aanbod" class="read-more-light text-center w-100">DOORGAAN MET WINKELEN</a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-btn">
                    <a href="/order" class="read-more-black text-center w-100">BESTELLEN</a>
                </div>
            </div>
        </div>

        <!-- products loop -->
        @php $total = 0 @endphp

        @if(session('cart'))

        <div class="row justify-content-center">
            <div class="col-lg-6">

                @foreach(session('cart') as $id => $details)

                @php $total += $details['price'] @endphp

                <div class="row mt-5">

                    <div class="col-md-4">
                        <div class="thumb">
                            <img src="/storage/{{ $details['image'] }}" alt="{{ $details['name'] }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ $details['link'] }}">
                            <h4 class="mb-0 fs-5">
                                {{ $details['name'] }} - {{ $details['code'] }}
                            </h4>
                        </a>
                        <p>
                            Startdatum: {{ date('d-m-Y', strtotime($details['start']) )}}
                        </p> 
                    </div>
                    <div class="col-md-2">
                        <p class="text-end">
                            <a href="/cart/remove/{{ $id }}"><i class="far fa-times"></i></a>
                        </p>
                        
                    </div>
                    <div class="col-md-12 mt-2">
                        <p class="text-end cart-price">
                            &euro;{{ $details['price'] }}
                        </p>
                    </div>

                </div>

                @endforeach

                <div class="row mt-5">
                    <div class="faq-title text-center">BESTELLINGSOVERZICHT</div>
                </div>

                <div class="row mt-1 bg-light text-dark pt-5 pb-5">
                    <div class="col-10">
                        Totaal artikelen ({{count(session('cart'))}})
                    </div>
                    <div class="col-2">
                        <p class="text-end cart-price">
                            &euro; {{ number_format($total, 2, ',', '') }}
                        </p>
                    </div>

                    <div class="col-10">
                        Verwerking
                    </div>
                    <div class="col-2 text-dark">
                        <p class="text-end">
                            Gratis
                        </p>
                    </div>


                    <div class="col-10 fw-bold text-dark">
                        <p class="text-dark">
                            TOTAALBEDRAG
                        </p>
                    </div>
                    <div class="col-2">
                        <p class="text-end cart-price">
                            &euro; {{ number_format($total, 2, ',', '') }}
                        </p>
                    </div>

                </div>
                <div class="row">

                    <div class="col-12 product-form">
                        <div class="input-btn">
                            <a href="/order" class="read-more-black text-center ml-5 ">BESTELLEN</a>
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