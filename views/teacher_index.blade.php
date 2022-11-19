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
                        <li><span>DOCENTEN</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- docenten area start -->
<div class="docent-area pt-35 pb-35">
    
    @foreach($teachers as $teacher)
    <div class="docent-section-list">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4 mb-md-30 mb-xs-30">
                    <div class="docent-thumb">
                        <img src="/storage/{{ $teacher->image }}" alt="{{ $teacher->name }}">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="docent-content">
                        <div class="sub-title">{{ $teacher->subtitle }}</div>
                        <h4 class="title">{{ $teacher->name }}</h4>
                        <p>
                            {{ $teacher->seo_description }} 
                            <a href="/docent/{{ $teacher->slug }}">LEES MEER ›</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(!$loop->last)
    <div class="separator-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="separator"></div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach

    <div class="separator-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="separator"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- docenten area end -->


<x-footer />

<x-pagefooter />

</body>

</html>