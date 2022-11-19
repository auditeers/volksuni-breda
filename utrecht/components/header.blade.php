<!-- Header area start -->
<header class="heaer--aera sticky-top">
    <div class="heaer__top__area d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start mb-md-10 mb-xs-10">
                    <div class="header_top_menu heaer_top_left_menu">
                        <ul>
                            <li><a href="/aanbod"><span>✓</span>Groot cursusaanbod</a></li>
                            <li><a href="/over-ons"><span>✓</span>Betaalbaar</a></li>
                            <li><a href="/docent"><span>✓</span>Professionele docenten</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <div class="header_top_menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/faq">FAQ</a></li>
                            <li class="has-dropdown">
                                <a href="/aanbod">Volg een cursus </a>
                                <ul class="sub-menu">
                                    <li><a href="/nt2">Intake procedure voor NT2 courses</a></li>
                                    <li><a href="/inschrijfformulier">Inschrijfformulier</a></li>
                                    <li><a href="/betalingen">Betalingen</a></li>
                                    <li><a href="/mijn-Volksuniversiteit">Mijn Volksuniversiteit</a></li>
                                    <li><a href="/boeken-en-lesmaterialen">Boeken en lesmateriaal</a></li>
                                    <li><a href="/europees-referentiekader">Europees referentiekader</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="/over-ons">Over ons</a>
                                <ul class="sub-menu">
                                    <li><a href="/over-ons">Wie zijn wij</a></li>
                                    <li><a href="/referenties">Ervaringen</a></li>
                                    <li><a href="/ons-verhaal">Ons verhaal</a></li>
                                    <li><a href="/bestuur">Bestuur</a></li>
                                    <li><a href="/partners">Partners</a></li>
                                    <li><a href="/docent">Docenten</a></li>
                                    <li><a href="/beleidsplan">Beleidsplan</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="/contact">Contact</a>
                                <ul class="sub-menu">
                                    <li><a href="/contact">Contactgegevens</a></li>
                                    <li><a href="/openingstijden">Openingstijden</a></li>
                                    <li><a href="/locatie">Cursuslocaties</a></li>
                                    <li><a href="/faq">Veelgestelde vragen</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header-right-btn">
                        <a href="#" class="popup2Open">Nieuwsbrief</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 d-lg-flex align-items-center d-none">
                    <div class="header_main_menu">
                        <ul>
                            <li class="has-dropdown">
                                <a href="/aanbod">ONS AANBOD</a>
                                <ul class="sub-menu">
                                    <li><a href="/aanbod">Volledig aanbod</a></li>
                                    <li class="has-dropdown menu-col-2">
                                        <a href="/collectie/buitenlandse-talen">Buitenlandse talen ></a>
                                        <ul class="sub-menu">
                                            <li><a href="/collectie/taalcursus-arabisch">› Arabisch</a></li>
                                            <li><a href="/collectie/taalcursus-chinees">› Chinees</a></li>
                                            <li><a href="/collectie/taalcursus-duits">› Duits</a></li>
                                            <li><a href="/collectie/taalcursus-engels">› Engels</a></li>
                                            <li><a href="/collectie/taalcursus-frans">› Frans</a></li>
                                            <li><a href="/collectie/taalcursus-nieuw-grieks">› Grieks</a></li>
                                            <li><a href="/collectie/taalcursus-italiaans">› Italiaans</a></li>
                                            <li><a href="/collectie/taalcursus-japans">› Japans</a></li>
                                            <li><a href="/collectie/taalcursus-noors">› Noors</a></li>
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
                                    </li>
                                    @foreach($collections_private as $item)
                                    <li><a href="/collectie/{{ $item->slug }}">{{ $item->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="/zakelijk/collectie/bedrijfsleven">ZAKELIJK AANBOD</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-4">
                    <div class="site-logo">
                        <a href="/"><img src="/assets/img/site-logo.png" alt="Volksuniversiteit Breda"></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-10 col-8 d-flex align-items-center justify-content-end">
                    <div class="header_main_right_actions">
                        <div class="searc_blk d-none d-lg-inline-block">
                            <!--
                            <form action="/zoeken" method="post">
                                <div class="search_inner">
                                    <i class="fal fa-search"></i>
                                    <input type="text" placeholder="Zoeken">
                                </div>
                            </form>
                            -->
                        </div>
                        <div class="action_buttons">
                            <div class="single-action-blk">
                                <!-- <a href=""><img src="/assets/img/icons/user.svg" alt=""></a> -->
                            </div>
                            <div class="single-action-blk @if(session('heart')) active-mode @endif">
                                <a href="/favorieten">
                                    <img src="/assets/img/icons/love.svg" alt="Favorieten">
                                </a>
                            </div>
                            <div class="single-action-blk">
                                @if(session('cart'))
                                <span class="anmt-blk">
                                    {{ count(session('cart')) }}
                                </span>
                                @endif
                                <a href="/cart"><img src="/assets/img/icons/cart.svg" alt="Winkelwagen bekijken"></a>
                            </div>
                        </div>
                        <div class="open-mobile-menu d-inline-block d-lg-none">
                            <a href="#"><i class="far fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header area end -->

<!-- off-canvas menu start -->
<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
    </div>
    <div class="searc_blk">
        <form action="">
            <div class="search_inner">
                <i class="fal fa-search"></i>
                <input type="text" placeholder="Zoeken">
            </div>
        </form>
    </div>
    <nav class="side-mobile-menu">
        <ul id="mobile-menu-active">
            <li class="has-dropdown">
                <a href="/aanbod">Ons aanbod</a>
                <ul class="sub-menu">
                    <li><a href="/aanbod">Gehele programma</a></li>
                    <li class="has-dropdown menu-col-2">
                        <a href="/collectie/buitenlandse-talen">Buitenandse talen</a>
                        <ul class="sub-menu">
                            <li><a href="/collectie/taalcursus-arabisch">› Arabisch</a></li>
                            <li><a href="/collectie/taalcursus-chinees">› Chinees</a></li>
                            <li><a href="/collectie/taalcursus-duits">› Duits</a></li>
                            <li><a href="/collectie/taalcursus-engels">› Engels</a></li>
                            <li><a href="/collectie/taalcursus-frans">› Frans</a></li>
                            <li><a href="/collectie/taalcursus-nieuw-grieks">› Grieks</a></li>
                            <li><a href="/collectie/taalcursus-italiaans">› Italiaans</a></li>
                            <li><a href="/collectie/taalcursus-japans">› Japans</a></li>
                            <li><a href="/collectie/taalcursus-noors">› Noors</a></li>
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
                    </li>
                    @foreach($collections_private as $item)
                        <li><a href="/collectie/{{ $item->slug }}">{{ $item->title }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="/zakelijk/collectie/bedrijfsleven">Zakelijk aanbod</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li class="has-dropdown">
                <a href="/aanbod">Volg een cursus </a>
                <ul class="sub-menu">
                    <li><a href="/nt2">Intake procedure voor NT2 courses</a></li>
                    <li><a href="/inschrijfformulier">Inschrijfformulier</a></li>
                    <li><a href="/betalingen">Betalingen</a></li>
                    <li><a href="/mijn-Volksuniversiteit">Mijn Volksuniversiteit</a></li>
                    <li><a href="/boeken-en-lesmaterialen">Boeken en lesmateriaal</a></li>
                    <li><a href="/vakantie">Vakanties en vrije dagen</a></li>
                    <li><a href="/europees-referentiekader">Europees referentiekader</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="/over-ons">Over ons</a>
                <ul class="sub-menu">
                    <li><a href="/over-ons">Wie zijn wij</a></li>
                    <li><a href="/referenties">Ervaringen</a></li>
                    <li><a href="/ons-verhaal">Ons verhaal</a></li>
                    <li><a href="/bestuur">Bestuur</a></li>
                    <li><a href="/partners">Partners</a></li>
                    <li><a href="/docent">Docenten</a></li>
                    <li><a href="/beleidsplan">Beleidsplan</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="contact">Contact</a>
                <ul class="sub-menu">
                    <li><a href="/contact">Contactgegevens</a></li>
                    <li><a href="/openingstijden">Openingstijden</a></li>
                    <li><a href="/locatie">Cursuslocaties</a></li>
                    <li><a href="/faq">Veelgestelde vragen</a></li>
                </ul>
            </li>
        </ul>
        <div class="header-right-btn">
            <a href="/nieuwsbrief">Nieuwsbrief</a>
        </div>
    </nav>
</aside>
<div class="body-overlay"></div>
<!-- off-canvas menu end -->
