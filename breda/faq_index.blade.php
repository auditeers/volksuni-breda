<!DOCTYPE html>
<html lang="en">

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
                        <li><span>FAQ</span></li>
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
            <div class="col-xl-10 col-lg-10">
                <div class="faq-title">Veel gestelde vragen</div>
            </div>
        </div>
    </div>
</div>

@foreach($cats as $cat)

<div class="faq-area @if($loop->odd) bg-gray @endif pt-35 pb-25">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10">
                <div class="faq-accordion">
                    <h4 class="title">{{ $cat->title }}</h4>
                    <div class="accordion" id="accordion-{{ $cat->id }}">
                        
                        @foreach($cat->faqs as $faq)
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-h{{ $faq->id }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-collapse-{{ $faq->id }}" aria-expanded="false"
                                        aria-controls="faq-collapse-{{ $faq->id }}">
                                    {{ $faq->title }}
                                </button>
                            </h2>
                            <div id="faq-collapse-{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="faq-h{{ $faq->id }}"
                                 data-bs-parent="#accordion-{{ $cat->id }}">
                                <div class="accordion-body">
                                    <p>
                                        {{ $faq->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach

<!-- faq area end -->

<x-footer />

<x-pagefooter />

</body>

</html>