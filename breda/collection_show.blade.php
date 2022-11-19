<!DOCTYPE html>
<html lang="en">

<x-head :element="$collection" />

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
                        <li>collectie: <span>{{ $collection->title }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- Categorybanner area start -->
<div class="feature-area bg-{{ $collection->color ?? 'yellow' }} pt-35 pb-35">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="feature-thumb">
                    <img src="/storage/{{ $collection->image }}" alt="{{ $collection->title }}">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 mb-md-30 mb-xs-30">
                <div class="feature-content-2">
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
<!-- Categorybanner area end -->

<!-- tekst content area start -->
<div class="tekst-area pt-45 pb-25">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="tekst-content">
                    {!! $collection->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tekst content area end -->


<!-- filter area start -->
<div class="filter-section pt-20 pb-35">
    <div class="container">
        <div class="row mb-35">
            @if(count($all_courses->unique('type')) > 1)
            <div class="col-xl-12">
                <div class="filter-tags text-center">

                    @foreach($all_courses->unique('type') as $type)

                    @if(in_array($type->type, request()->get('types') ?? []))

                    <a href="{{ request()->fullUrlWithoutQuery(['types']) }}" class="active">
                        <i class="fas fa-times"></i> {{ strtoupper($type->type) }}
                    </a>

                    @else

                    <a href="{{ request()->fullUrlWithQuery(['types[]' => $type->type]) }}">
                        {{ strtoupper($type->type) }}
                    </a>

                    @endif

                    @endforeach

                </div>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{ request()->fullUrl() }}" method="get">
                    <div class="filter-select">
                        @if(count($categories) > 1)
                        <div class="select-wrap">
                            <select class="nice-select" data-js-placeholder="CATEGORIE" name="cat[]" multiple="true" onchange="this.form.submit()">

                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if(in_array($category->id, (array)request()->get('cat') ?? [])) selected @endif>
                                    {{ $category->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        @endif

                        <div class="select-wrap">
                            <select class="nice-select" name="startday[]" multiple="true" onchange="this.form.submit()" data-js-placeholder="STARTDAG">

                                <option value="1" @if(in_array('1', (array)request()->get('startday') ?? [])) selected @endif>
                                    Maandag
                                </option>

                                <option value="2" @if(in_array('2', (array)request()->get('startday') ?? [])) selected @endif>
                                    Dinsdag
                                </option>

                                <option value="3" @if(in_array('3', (array)request()->get('startday') ?? [])) selected @endif>
                                    Woensdag
                                </option>

                                <option value="4" @if(in_array('4', (array)request()->get('startday') ?? [])) selected @endif>
                                    Donderdag
                                </option>

                                <option value="5" @if(in_array('5', (array)request()->get('startday') ?? [])) selected @endif>
                                    Vrijdag
                                </option>

                                <option value="6" @if(in_array('6', (array)request()->get('startday') ?? [])) selected @endif>
                                    Zaterdag
                                </option>

                                <option value="7" @if(in_array('7', (array)request()->get('startday') ?? [])) selected @endif>
                                    Zondag
                                </option>
                            </select>
                        </div>
                        <div class="select-wrap">
                            <select class="nice-select" name="startmonth[]" multiple="true" onchange="this.form.submit()" data-js-placeholder="STARTMAAND">

                                <option value="1" @if(in_array('1', (array)request()->get('startmonth') ?? [])) selected @endif>
                                    Januari
                                </option>

                                <option value="2" @if(in_array('2', (array)request()->get('startmonth') ?? [])) selected @endif>
                                    Februari
                                </option>

                                <option value="3" @if(in_array('3', (array)request()->get('startmonth') ?? [])) selected @endif>
                                    Maart
                                </option>

                                <option value="4" @if(in_array('4', (array)request()->get('startmonth') ?? [])) selected @endif>
                                    April
                                </option>

                                <option value="5" @if(in_array('5', (array)request()->get('startmonth') ?? [])) selected @endif>
                                    Mei
                                </option>

                                <option value="6" @if(in_array('6', (array)request()->get('startmonth') ?? [])) selected @endif>
                                    Juni
                                </option>

                                <option value="7" @if(in_array('7', (array)request()->get('startmonth') ?? [])) selected @endif>
                                    Juli
                                </option>

                                <option value="8" @if(in_array('8', (array)request()->get('startmonth') ?? [])) selected @endif>
                                    Augustus
                                </option>

                                <option value="9" @if(in_array('9', (array)request()->get('startmonth') ?? [])) selected @endif>
                                    September
                                </option>

                                <option value="10" @if(in_array('10', (array)request()->get('startmonth') ?? [])) selected @endif>
                                    Oktober
                                </option>

                                <option value="11" @if(in_array('11', (array)request()->get('startmonth') ?? [])) selected @endif>
                                    November
                                </option>

                                <option value="12" @if(in_array('12', (array)request()->get('startmonth') ?? [])) selected @endif>
                                    December
                                </option>
                            </select>
                        </div>
                        
                        <div class="select-wrap">
                            <select class="nice-select" name="available" onchange="this.form.submit()" data-js-placeholder="BESCHIKBAAR" placeholder="BESCHIKBAAR">
                                <option value="" @if(empty(request()->get('available')))) selected @endif>
                                    Alle
                                </option>

                                <option value="1" @if(in_array('1', (array)request()->get('available') ?? [])) selected @endif>
                                    Beschikbaar
                                </option>

                            </select>
                        </div>


                        <div class="input-wrap">
                            <input type="reset" value="wis alles" class="reset" onclick="window.location.href='{{ request()->url() }}'">
                        </div>
                        <div class="select-wrap sorting-select float-none float-xl-end">
                            <select class="nice-select" name="sort" onchange="this.form.submit()" data-js-placeholder="SORTEER OP">
                                <option value="price" @if(in_array('price', (array)request()->get('sort') ?? [])) selected @endif
                                    >
                                    Prijs
                                </option>
                                <option value="created_at" @if(in_array('created_at', (array)request()->get('sort') ?? [])) selected @endif
                                    >
                                    Nieuw
                                </option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- filter area end -->

<!-- product area start -->
<div class="product-overview-area">
    <div class="container">
        <div class="row">

            @foreach($courses as $course)
            
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
<!-- product area end -->

<x-footer />

<x-pagefooter />

</body>

</html>