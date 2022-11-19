<!DOCTYPE html>
<html lang="en">

<x-head :element="$page" />

<body>

<x-header />

<!-- Hero area start -->
<section>
    <div class="hero_slider_block owl-carousel">
        <div class="single_hero_slide" style="background-image: url(assets/img/herobanner2.jpg);background-position:left center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
                        <div class="hero_slide_content">
                            <h2>Ontdek het bonte en boeiende aanbod en laat je verrassen!</h2>
                            <div class="hero_button_blk">
                                <a href="/aanbod?types[]=Cursus" class="site-btn">Cursussen</a>
                                <a href="/aanbod?types[]=Workshop" class="site-btn">Workshops</a>
                                <a href="/aanbod?types[]=Lezing" class="site-btn">lezingen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_hero_slide" style="background-image: url(assets/img/fotografiebanner.jpg);background-position:left center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
                        <div class="hero_slide_content">
                            <h2>
                                Wil je beter leren fotograferen op een camera of smartphone?
                            </h2>
                            <div class="hero_button_blk" >
                                <a href="/collectie/fotografie" class="site-btn">
                                    Bekijk hier alle fotografie cursussen 
                                    <i class="far fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_hero_slide" style="background-image: url(assets/img/herobanner4.jpg);background-position:left center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
                        <div class="hero_slide_content">
                            <h2>Bekijk onze meest populaire taalcursussen en schrijf je in voor de zomer!</h2>
                            <div class="hero_button_blk">
                                <a href="/aanbod?types[]=Cursus" class="site-btn">Cursussen</a>
                                <a href="/aanbod?types[]=Workshop" class="site-btn">Workshops</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero area end -->

<!-- Category area start -->
<section class="catrgory_area_section">
    <div class="catrgory__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3><span>Categorie</span>Om het je makkelijk te maken, <br> kun je per categorie verder kijken.
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row mt-20">
                <div class="col-xl-12">
                    <div class="cat_all" >
                        <a href="/collectie/buitenlandse-talen" class="single_cat_blk">
                            <h4>TALEN</h4>
                            <img src="/assets/img/cat1.jpeg" alt="">
                        </a>
                        <a href="/collectie/nt2-nederlands-als-tweede-taal" class="single_cat_blk">
                            <h4>NT2 (learn Dutch)</h4>
                            <img src="/assets/img/cat2.jpeg" alt="">
                        </a>
                        <a href="/collectie/kunst-en-cultuur" class="single_cat_blk">
                            <h4>KUNST en CULTUUR
                            </h4>
                            <img src="/assets/img/cat3.jpg" alt="">
                        </a>
                        <a href="/collectie/muziek-film-en-literatuur" class="single_cat_blk">
                            <h4>Muziek, film en Literatuur</h4>
                            <img src="/assets/img/cat4.jpg" alt="">
                        </a>
                        <a href="/collectie/creativiteit-en-fotografie" class="single_cat_blk">
                            <h4>Creativiteit, fotografie en culinair</h4>
                            <img src="/assets/img/cat5.jpeg" alt="">
                        </a>
                        <a href="/collectie/persoonlijke-ontwikkeling" class="single_cat_blk">
                            <h4>PERSOONLIJKE ONTWIKKELING
                            </h4>
                            <img src="/assets/img/cat6.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category area end -->

<!-- Call to action area start -->
<section class="call_to_action_section">
    <div class="call_to_action_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call_to_ac_inner_content">
                        <h3>CURSUSSEN EN WORKSHOPS IN BREDA</h3>
                        <p>Volksuniversiteit Breda biedt een groot aantal betaalbare <a href="/aanbod?types[]=Cursus">cursussen</a>, <a href="/aanbod?types[]=Workshop">workshops</a> en <a href="/aanbod?types[]=Lezing">lezingen</a>,
                            die een bijdrage leveren aan je ontwikkeling of een leuke invulling geven aan je vrije
                            tijd. </p>
                            <a href="/aanbod" class="read-more-semi-transparent">bekijk gehele aanbod  ›</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action area end -->

<!-- course area start -->
<div class="course-area pt-35 pb-35">
    <div class="container">
        <div class="row justify-content-between align-items-end" data-aos="none" data-aos-delay="400"
             data-aos-duration="1000">
            <div class="col-xl-4">
                <div class="title-wrap">
                    <h5 class="sub-title">TIPS & INSPIRATIE</h5>
                    <h5 class="title">Een selectie uit ons programma aanbod ter inspiratie voor jou!</h5>
                </div>
            </div>
            <div class="col-xl-6 text-end">
                <div class="read-more-wrap">
                    <a href="/aanbod">Gehele aanbod</a>
                </div>
            </div>
        </div>
        <div class="row" data-aos="none" data-aos-delay="600" data-aos-duration="1000">
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
                                <a href="/aanbod/{{ $course->slug }}" class="read-more">meer info  ›</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- course area end -->

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

<!-- course area start -->
<div class="course-area pt-35 pb-35">
    <div class="container">
        <div class="row justify-content-between align-items-end" data-aos="none" data-aos-delay="400"
             data-aos-duration="1000">
            <div class="col-xl-4">
                <div class="title-wrap">
                    <h5 class="sub-title">POPULAIR EN TRENDING</h5>
                    <h5 class="title">Deze cursussen, workshops en lezingen zijn momenteel het meest favoriet:</h5>
                </div>
            </div>
            <div class="col-xl-6 text-end">
                <div class="read-more-wrap">
                    <a href="/collectie/favorieten">Bekijk alle favorieten</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="product-carousel-2 owl-carousel">
                    @foreach($courses_favs as $course)
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
                                <a href="/aanbod/{{ $course->slug }}" class="read-more">meer info  ›</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- course area end -->


<!--business + course area start -->
@foreach($featured_collections as $collection)
<div class="feature-area bg-{{ $collection->color }} pt-35 pb-35 mb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 mb-md-30 mb-xs-30">
                <div class="feature-thumb">
                    <img src="/storage/{{ $collection->image }}" alt="thumb">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="feature-content">
                    <h3 class="title">{{ $collection->title }}</h3>
                    <p>
                        {{ $collection->intro }}
                    </p>
                    @if($collection->type == "private")
                    <a href="/collectie/{{ $collection->slug }}" class="read-more-text">LEES MEER ›</a>
                    @else
                    <a href="/zakelijk/collectie/{{ $collection->slug }}" class="read-more-text">LEES MEER ›</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="carousel-area bg-{{ $collection->color }} pb-35 mb-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="product-carousel owl-carousel">
                    @foreach($collection->courses as $course)
                        <div class="single-product-slide">
                            <div class="product-wrap">
                                <div class="thumb">
                                    <img src="/storage/{{ $course->image }}" alt="{{ $course->title }}">
                                    <a class="wishlist" href="/favorieten/add/{{ $course->id }}">
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    @if($course->highlight_text)
                                    <div class="labels-business">{{ $course->highlight_text }}</div>
                                    @endif
                                    @if($course->status)
                                    <div class="p-badge">{{ $course->status }}</div>
                                    @endif
                                </div>
                                <div class="content mb-15">
                                    <h4 class="title">
                                        @if($collection->type == "private")
                                        <a href="/aanbod/{{ $course->slug }}">{{ $course->title }}</a>
                                        <a href="/aanbod/{{ $course->slug }}" class="cat">{{ $course->type }}</a>
                                        @else
                                        <a href="/zakelijk/aanbod/{{ $course->slug }}">{{ $course->title }}</a>
                                        <a href="/zakelijk/aanbod/{{ $course->slug }}" class="cat">{{ $course->type }}</a>
                                        @endif
                                        
                                    </h4>
                                    <p class="price">€ {{ number_format($course->price, 2, ",", ".") }}</p>
                                </div>
                                @if($collection->type == "private")
                                <a href="/aanbod/{{ $course->slug }}" class="read-more">MEER INFO ›</a>
                                @else
                                <a href="/zakelijk/aanbod/{{ $course->slug }}" class="read-more">OFFERTE ›</a>
                                @endif
                                
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!--business + course area end -->
@endforeach

<!--testimonial area start -->
<div class="testimonial-area pt-50 pb-50">
    <div class="container">
        <div class="row justify-content-between align-items-end" >
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
                    @foreach($courses_recommends as $course)
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
                                <a href="/aanbod/{{ $course->slug }}" class="read-more">meer info  ›</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- course area end -->

<div class="icon-box-area pt-50 pb-20 mb-0">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-10">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="icon-box-wrap">
                            <img src="/assets/img/thumb/thumb-11.png" alt="aanbod" style="max-width:85%">
                            <h3 class="mt-1">VEELZIJDIG<br/>AANBOD</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="icon-box-wrap">
                            <img src="/assets/img/thumb/thumb-12.png" alt="betaalbaar" style="max-width:85%">
                            <h3 class="mt-1">BETAALBARE<br/>KWALITEIT</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="icon-box-wrap">
                            <img src="/assets/img/thumb/thumb-13.png" alt="altijd" style="max-width:85%">
                            <h3 class="mt-1">OVERDAG EN<br/>'S AVONDS</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="icon-box-wrap">
                            <img src="/assets/img/thumb/thumb-14.png" alt="gezellig" style="max-width:85%">
                            <h3 class="mt-1">ONTMOETEN EN<br/>GEZELLIGHEID</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="section-links bg-gray pt-35 pb-35">
    <div class="container">
        <div class="row" data-aos="none" data-aos-delay="400" data-aos-duration="1000">
            <div class="col-xl-12">
                <div class="section-links-title">
                    ONS AANBOD
                </div>
            </div>
        </div>
        <div class="row" data-aos="none" data-aos-delay="600" data-aos-duration="1000">
            <div class="col-xl-2 col-lg-4 col-md-3 col-6">
                <div class="s-link-wrap">
                    <div class="title">talen</div>
                    <ul>
                        <li><a href="/collectie/cursus-nt2-nederlands-als-tweede-taal">› Nederlands</a></li>
                        <li><a href="/collectie/taalcursus-arabisch">› Arabisch</a></li>
                        <li><a href="/collectie/taalcursus-chinees">› Chinees</a></li>
                        <li><a href="/collectie/taalcursus-duits">› Duits</a></li>
                        <li><a href="/collectie/taalcursus-engels">› Engels</a></li>
                        <li><a href="/collectie/taalcursus-frans">› Frans</a></li>
                        <li><a href="/collectie/taalcursus-nieuw-grieks">› Grieks</a></li>
                        <li><a href="/collectie/taalcursus-italiaans">› Italiaans</a></li>
                        <li><a href="/collectie/taalcursus-japans">› Japans</a></li>
                        <li><a href="/collectie/taalcursus-noors">› Noors</a></li>
                        <li><a href="/collectie/buitenlandse-talen">› Overig</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-3 col-6">
                <div class="s-link-wrap">
                    <div class="title">&nbsp;</div>
                    <ul>
                        <li><a href="/collectie/taalcursus-oekraiens">› Oekraïens</a></li>
                        <li><a href="/collectie/taalcursus-pools">› Pools</a></li>
                        <li><a href="/collectie/taalcursus-portugees">› Portugees</a></li>
                        <li><a href="/collectie/taalcursus-russisch">› Russisch</a></li>
                        <li><a href="/collectie/taalcursus-spaans">› Spaans</a></li>
                        <li><a href="/collectie/taalcursus-turks">› Turks</a></li>
                        <li><a href="/collectie/taalcursus-zweeds">› Zweeds</a></li>
                        <li><a href="/collectie/online-taalcursussen">› Online taalcursussen</a></li>
                        <li><a href="/collectie/online-prive-taalcursussen">› Online privé taalcursussen</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-3 col-6">
                <div class="s-link-wrap">
                    <div class="title">NT2 (Learn Dutch)</div>
                    <ul>
                        <li><a href="/collectie/cursus-nt2-nederlands-als-tweede-taal">› Alle NT2 Cursussen</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-3 col-6">
                <div class="s-link-wrap">
                    <div class="title">Creativiteit,
                        fotografie en culinair
                    </div>
                    <ul>
                        <li><a href="/collectie/curssussen-fotografie-en-nabewerking">› Fotografie en nabewerking</a></li>
                        <li><a href="/collectie/cursusaanbod-tekenen-en-schilderen">› Tekenen en schilderen</a></li>
                        <li><a href="/collectie/cursusaanbod-3-dimensionaal">› 3-dimensionaal</a></li>
                        <li><a href="/collectie/interieur-cursussen">› Interieur</a></li>
                        <li><a href="/collectie/cursusaanbod-eten-en-drinken">› Eten en drinken</a></li>
                        <li><a href="/collectie/cursus-creativiteit-fotografie-culinair">› Overig</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-3 col-6">
                <div class="s-link-wrap">
                    <div class="title">muziek, film
                        en Literatuur
                    </div>
                    <ul>
                        <li><a href="/collectie/architectuur-cursussen">› Architectuur</a></li>
                        <li><a href="/collectie/muziek-cursussen">› Muziek</a></li>
                        <li><a href="/collectie/literatuur">› Literatuur</a></li>
                    </ul>
                </div>
                <div class="s-link-wrap">
                    <div class="title">Persoonlijke ontwikkeling</div>
                    <ul>
                        <li><a href="/collectie/persoonlijke-groei">› Persoonlijke Groei</a></li>
                        <li><a href="/collectie/filosofie">› Filosofie</a></li>
                        <li><a href="/collectie/cursus-persoonlijke-ontwikkeling">› Overig</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-3 col-6">
                <div class="s-link-wrap">
                    <div class="title">Kunst en Cultuur</div>
                    <ul>
                        <li><a href="/collectie/geschiedenis-en-cultuur">› Geschiedenis en cultuur</a></li>
                        <li><a href="/collectie/natuur-en-milieu">› Natuur en milieu</a></li>
                        <li><a href="/collectie/wetenschap">› Wetenschap</a></li>
                        <li><a href="/collectie/kunst-en-tentoonstellingen">› Kunst en tentoonstellingen</a></li>
                    </ul>
                </div>
                <div class="s-link-wrap">
                    <div class="title">Themajaar</div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer />

<x-pagefooter />

</body>

</html>