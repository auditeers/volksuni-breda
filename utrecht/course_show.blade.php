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
                        <li><a href="/aanbod">ONS AANBOD</a></li>
                        @if(!empty($course->category_id))
                        <li><a href="/aanbod?cat[]={{ $course->category->id}}">{{ $course->category->name}}</a></li>
                        @endif
                        <li>{{ $course->type }}: {{ $course->title }}</li>
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
                    <h1 class="title">{{ $course->title }}</h1>
                    <h2 class="subtitle">{{ $course->type }}</h2>
                    <p>{{ $course->sessiontime }}</p>
                    <div class="price">€ {{ number_format($course->price, 2, ",", ".") }}</div>

                    @if($results)
                    
                    <form method="get" class="product-form mt-50">
                        <h6>Kies startdatum</h6>

                        <div class="select-option clearfix">
                            <select class="nice-select" name="program_id" onchange="this.form.submit()">


                                @foreach($course->programs()->get() as $program)

                                @if(in_array($program->status, ["Aanmelden wachtlijst >", "Inschrijving nog open >", "Inschrijving geopend >"]) )
                                
                                <option value="{{ $program->id }}" @if($program->id == $selected_program->id) selected @endif>{{ date('d-m-Y', strtotime($program->lections()->min('date'))) }} {{ $program->title }} {{ $program->code }}</option>
                                
                                @endif

                                @endforeach
                               
                            </select>
                        </div>

                        @if($selected_program->status == "Aanmelden wachtlijst >")
                    
                        <div class="input-btn">
                            <button class="popup1Open">ZET ME OP DE WACHTLIJST ›</button>
                        </div>
                        
                        @else

                        <div class="input-btn">
                            <a href="/cart/add/{{ $selected_program->id }}">INSCHRIJVEN ›</a>
                        </div>

                        @endif

                    </form>

                    

                    @endif

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
                                        De cursus {{ $course->title }} zit inmiddels vol!
                                    </h4>
                                    <p>
                                        Wil je toch deelnemen of andere opties bespreken? Geef ons dan je gegevens door voor de wachtlijst.
                                    </p>
                                    <form action="/waitinglist" method="post">
                                        @csrf

                                        <input type="hidden" name="cursus" value="{{ $course->title }}">
                                        <input type="hidden" name="program_id" value="{{ $selected_program->id ?? 0 }}">

                                        <div class="input-wrap">
                                            <input type="text" placeholder="naam / achternaam" name="name">
                                        </div>

                                        <div class="input-wrap">
                                            <input type="text" placeholder="E-mailadres" name="email">
                                        </div>

                                        <div class="btn-wrap">
                                            <button type="submit">Zet me op de wachtlijst ›</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- einde wachtlijst -->
                

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-7">
                <div class="tekst-content">
                    <h2 class="subtitle">{{ $course->type }}</h2>
                    <h2 class="contenttitle">{{ $course->title }}</h2>
                    {!! $course->text !!}
                </div>
            </div>

            @if(!empty($course->programs()->where('enrollable', true)->count()))
            
            <div class="col-xl-4 col-lg-5 col-md-5">
                <div class="product-accordion">
                    
                    <div class="accordion" id="accordionExample">
                        
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    PROGRAMMA
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" 
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    @if(!empty($selected_program->info_program))
                                    <p>
                                        {!! $selected_program->info_program !!}
                                    </p>
                                    @else

                                    <p>
                                        <ul>
                                        @php Carbon\Carbon::setLocale('nl'); @endphp
                                        @foreach($selected_program->lections as $i=>$lection)
                                            <li>
                                                <strong>Dag {{ $i + 1 }}</strong> : {{ Carbon\Carbon::parse($lection->date)->translatedFormat('l j F') }} van {{ date('H:i', strtotime($lection->starttime)) }} </li>
                                        @endforeach
                                        </ul>
                                    </p>

                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    EXTRA INFO
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        {!! $selected_program->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>

                        @if(!empty($selected_program->info_materials))
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwoExtra">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoExtra" aria-expanded="false" aria-controls="collapseTwoExtra">
                                    MATERIALEN
                                </button>
                            </h2>
                            <div id="collapseTwoExtra" class="accordion-collapse collapse" aria-labelledby="headingTwoExtra" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        {!! $selected_program->info_materials !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    LOCATIE
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        <strong>{{ $selected_program->location->title }}</strong><br />
                                        {{ $selected_program->location->address }}<br />
                                        {{ $selected_program->location->zip }}, {{ $selected_program->location->city }}<br />
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    DOCENT
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="accordion-thumb">
                                                <img src="/storage/{{ $selected_program->teacher->image ?? 'default-docent.png'  }}" alt="thumb">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                <b>{{ $selected_program->teacher->name }}</b> <br>
                                                {{ $selected_program->teacher->seo_description }}
                                            </p>
                                            <p>
                                                <strong><a href="/docent/{{ $selected_program->teacher->slug }}">BEKIJK MIJN PAGINA > </a></strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif


        </div>
    </div>
</div>
<!-- product details area end -->

<!-- feature area start -->
@foreach($page->blocks()->orderBy('order')->get() as $block)
<div class="feature-area bg-{{ $block->color }} pt-35 pb-35 mb-30">
    <div class="container">
        <div class="row align-items-center">
            @if($block->direction == "left")

            <div class="col-xl-6 col-lg-6 mb-md-30 mb-xs-30">
                <div class="feature-thumb">
                    <img src="/storage/{{ $block->image }}" alt="{{ $block->title }}">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="feature-content">
                    <h3 class="title">{{ $block->title }}</h3>
                    <p>
                        {{ $block->text }}
                    </p>

                    @if($block->button_text)
                    <a href="{{ $block->button_link ?? '' }}" class="read-more-black">{{ $block->button_text }} ›</a>
                    @endif

                </div>
            </div>

            @else

            <div class="col-xl-6 col-lg-6 mb-md-30 mb-xs-30 text-lg-end">
                <div class="feature-content">
                    <h3 class="title">{{ $block->title }}</h3>
                    <p>
                        {{ $block->text }}
                    </p>

                    @if($block->button_text)
                    <a href="{{ $block->button_link ?? '' }}" class="read-more-black">{{ $block->button_text }} ›</a>
                    @endif

                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="feature-thumb">
                    <img src="/storage/{{ $block->image }}" alt="{{ $block->title }}">
                </div>
            </div>

            @endif

        </div>
    </div>
</div>
@endforeach
<!-- feature area end -->

<!--testimonial area start -->
<div class="testimonial-area pt-50 pb-50">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-xl-4">
                <div class="title-wrap-2">
                    <h5 class="title">ERVARINGEN</h5>
                </div>
            </div>
            <div class="col-xl-6 text-end">
                <div class="read-more-wrap">
                    <a href="/referenties">Bekijk alle ervaringen</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-slider owl-carousel">

                    @foreach($reviews as $review)
                    <div class="testimonial-slide">
                        <div class="testimonial-wrap">
                            <h4 class="title">{{ $review->title }}</h4>
                            <div class="rating">
                                @for($i = 0;$i < $review->score; $i++)
                                    <i class="fas fa-star"></i>
                                    @endfor
                            </div>
                            <p>
                                {{ $review->text }}
                            </p>

                            <div class="meta">{{ date('d-m-Y', strtotime($review->updated_at)) }} / {{ $review->name }} , {{ $review->city }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!--testimonial area end -->

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