<!-- footer area start -->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="about-widget mb-30">
                    <h4 class="title">Volksuniversiteit Breda</h4>
                    <p>
                        Molenstraat 6, 4811GS Breda<br/>
                        Open van ma t/m do 10.00-16.00 uur<br/>
                        m.u.v. schoolvakanties.
                    </p>
                    <p>
                        <a href="mailto:breda@volksuniversiteit.nl">breda@volksuniversiteit.nl</a> <br>
                        <span>076 521 72 33</span>
                    </p>
                    <p>Volg ons op social media </p>
                    <div class="social-link">
                        <a href="https://www.linkedin.com/company/volksuniversiteit-breda/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.facebook.com/volksuniversiteitbreda.nl/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/volksuniversiteitbreda/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="widget-menu mb-30">
                    <ul>
                        <li><a href="aanbod">Ons aanbod</a></li>
                        <li><a href="/zakelijk/collectie/bedrijfsleven">Zakelijk aanbod</a></li>
                        <li><a href="/aanbod">Inschrijven</a></li>
                    </ul>
                </div>
                <div class="widget-menu mb-30">
                    <ul>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/over-ons">Over ons</a></li>
                        <li><a href="/faq">Veelgestelde vragen</a></li>
                    </ul>
                </div>
                <div class="widget-menu mb-30">
                    <ul>
                        <li><a href="/algemene-voorwaarden-en-privacyreglement">Algemene voorwaarden,</a></li>
                        <li><a href="/algemene-voorwaarden-en-privacyreglement">Privacy & Cookies</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="email-widget mb-30">
                    <h3 class="title">ONZE INSPIRATIE <br> IN JOUW MAILBOX</h3>
                    <p>
                        Natuurlijk kijk je niet dagelijks op onze website.<br/>
                        Dat snappen we! We brengen graag onze nieuwste
                        workshops, cursussen, lezingen en acties naar jou.<br/>
                        Schrijf je in voor onze nieuwsbrief!
                    </p>
                    <form action="/subscribe" method="post">
                        @csrf
                        <div class="input-wrap">
                            <input type="text" name="name" maxlength="100" placeholder="NAAM / ACHTERNAAM">
                        </div>
                        <div class="input-flex">
                            <div class="input-wrap">
                                <input type="text" name="email" maxlength="100" placeholder="E-MAILADRES">
                            </div>
                            <div class="input-btn">
                                <button type="submit">OK</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="copy-right">
                    © {{ date('Y') }} VOLKSUNIVERSITEIT BREDA / ONTWIKKELING: 
                    <a href="https://deontwerpers.nl/" target="_blank" style="color:#ffffff">DE ONTWERPERS</a> 
                    / BOUW: 
                    <a href="https://auditeers.nl/" target="_blank" style="color:#ffffff">AUDITEERS</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer area end -->

<div class="popup-wrapper popup-2" style="display:none;">
    <div class="popup-body-2">
        <div class="popup-wrap-2 popup-shadow mb-60">
            <div class="close">
                <a href="#" class='popupClose'><i class="far fa-times"></i></a>
            </div>
            <h4 class="title">
                Schrijf je in op onze nieuwsbrief!
            </h4>
            <p>
                Natuurlijk kijk je niet dagelijks op onze website, Dat snappen we! We brengen graag onze nieuwste
                workshops, cursussen, lezingen en acties naar jou. Schrijf je in voor onze nieuwsbrief!
            </p>
            <form action="/subscribe" method="post">
                @csrf
                <div class="input-wrap">
                    <input type="text" placeholder="naam / achternaam" name="name" maxlength="100">
                </div>
                <div class="input-wrap">
                    <input type="text" placeholder="E-mailadres" name="email" maxlength="100">
                </div>
                <div class="input-btn">
                    <button type="submit">Inschrijven</button>
                </div>
            </form>
        </div>
    </div>
</div>