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
                    <a href="#"><i class="fal fa-long-arrow-left"></i> TERUG</a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="breadcrumb-wrap text-center text-lg-center text-md-end">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><span>INSCHRIJVING</span></li>
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
            <div class="col-md-6">
                <div class="faq-title">Persoonsgegevens</div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="nice-form" method="post">
                @csrf

                <div class="row">
                    <div class="col-12">
                        <p>
                            Bedankt voor je interesse in een cursus van de Volksuniversiteit Breda.
                            Vul hieronder je gegevens in om jezelf in te schrijven.
                        </p>
                        <p>
                            <strong>
                                Wil je liever cash betalen, kom dan langs op kantoor voor inschrijving en betaling.
                            </strong>
                        </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group  col-md-12">
                        <label for="sex">Titel *</label>
                        <select name="sex" id="sex" class="nice-select">
                            <option value="">Geen antwoord</option>
                            <option value="dhr.">Dhr.</option>
                            <option value="mevr.">Mevr.</option>
                        </select>
                    </div>
                    <div class="form-group  col-md-12">
                        <label for="firstname">Voornaam *</label>
                        <input type="text" class="form-control" id="firstname" required placeholder="Voornaam" name="firstname">
                    </div>
                    <div class="form-group  col-md-12">
                        <label for="lastname">Achternaam *</label>
                        <input type="text" class="form-control" id="lastname" required placeholder="Achternaam" name="lastname">
                    </div>
                    <div class="form-group  col-md-12">
                        <label for="birthdate">Geboortedatum *</label>
                        <input type="date" class="form-control" id="birthdate" required placeholder="31-01-1985" name="birthdate">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group  col-md-12">
                        <label for="email">E-mail *</label>
                        <input type="text" class="form-control" id="email" required placeholder="mijn@emailadres.nl" name="email">
                    </div>
                    <div class="form-group  col-md-12">
                        <label for="phone1">Telefoonnummer *</label>
                        <input type="text" class="form-control" id="phone1" required placeholder="073 1234567" name="phone1">
                    </div>
                    
                </div>
                

                <div class="row">
                    <div class="form-group  col-md-12">
                        <label for="address">Straat + huisnr *</label>
                        <input type="text" class="form-control" id="address" required placeholder="Straatnaam 12" name="address">
                    </div>
                    <div class="form-group  col-md-8">
                        <label for="zip">Postcode *</label>
                        <input type="text" class="form-control" id="zip" required placeholder="1234AA" name="zip">
                    </div>
                     <div class="form-group  col-md-4">
                         <label for="city">Plaats *</label>
                         <input type="text" class="form-control" id="city" required placeholder="Breda" name="city">
                     </div>
                </div>

                <div class="row">
                    <div class="form-group  col-md-12">
                        <label for="address">Opmerkingen</label>
                        <textarea  class="form-control" id="remark"  name="remark"></textarea>
                    </div>
                </div>

                <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" value="1" required id="accept">
                    <label class="form-check-label" for="accept">
                        Ik ga akkoord met de <a href="/algemene-voorwaarden-en-privacyreglement" target="_blank">algemene voorwaarden</a> van Volksuniversiteit Breda
                    </label>
                </div>

                
                <button type="submit" class="btn btn-primary">Naar Betalen</button>
            </form>

        </div>
    </div>

    
</div>


<x-footer />

<x-pagefooter />

</body>

</html>