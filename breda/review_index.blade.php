<!DOCTYPE html>
<html lang="nl">

<x-head :element="$page" />

<body>

<x-header />

<!-- breadcrumb area start -->
<section class="breadcrumb-area bg-off-white pt-30 pb-30">
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
                        <li><span>ervaringen</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- filter area start -->
<div class="filter-section bg-off-white pt-20 pb-35">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <form action="{{ request()->fullUrl() }}" method="get">
                    <div class="filter-select">
                        <div class="input-wrap">
                            <input type="reset" value="wis alles" class="reset" onclick="window.location.href='{{ request()->url() }}'">
                        </div>
                        <div class="select-wrap sorting-select float-none float-xl-end">
                            <select class="nice-select" name="sort" onchange="this.form.submit()" data-js-placeholder="SORTEER OP">
                                <option value="score" @if(in_array('score', (array)request()->get('sort') ?? [])) selected @endif
                                    >
                                    Score
                                </option>
                                <option value="created_at" @if(in_array('created_at', (array)request()->get('sort') ?? [])) selected @endif
                                    >
                                    Datum
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

<!-- review area start -->
<div class="product-overview-area bg-off-white pb-70">
    <div class="container">
        
        @foreach($reviews as $review)

         <div class="row justify-content-center mb-30">
             <div class="col-xl-10 col-lg-10">
                 <div class="filter-author">
                     <div class="thumb" style="width:96px;height:96px;background-image:url(/assets/img/author.png);background-repeat:no-repeat;text-align:center;">
                        <span style="color:white;font-size:40px;line-height:96px;">{{ (int)$review->score * 2 }}</span>
                     </div>
                     <div class="content">
                         <div class="rating">
                            @for($i = 0;$i < $review->score; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                         </div>
                         <h4>{{ $review->title }}</h4>
                         <p>
                            {{ $review->text }}
                         </p>
                         <span class="meta">{{ date('d-m-Y', strtotime($review->updated_at)) }} / {{ $review->name }} , {{ $review->city }}</span>
                     </div>
                 </div>
             </div>
         </div>

        @endforeach

    </div>
</div>
<!-- review area end -->



<x-footer />

<x-pagefooter />

</body>

</html>