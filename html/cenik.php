<!DOCTYPE html>
<?php include 'header.php'; ?>
     

<!-- page start -->

    <div class="container mt-4">
        <div class="year-selector text-center">
            <button class="btn btn-success" onclick="showYear(2025)">Ceník 2025</button>
        </div>
    
        <div id="year-2025" class="year-content" style="display: block;">

    
            <div class="accordion" id="accordionExample">
                
                <!-- Fyzioterapie -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Fyzioterapie
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Služba</th>
                                        <th>Cena</th>
                                        <th>Doba trvání</th>
                                        <th>Věk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Baby therapy - ambulance dětí</td>
                                        <td>1 500 Kč</td>
                                        <td>do 50 minut</td>
                                        <td>0 - 2 roky</td>
                                    </tr>
                                    <tr>
                                        <td>Junior therapy - ambulance dětí</td>
                                        <td>1 500 Kč</td>
                                        <td>do 50 minut</td>
                                        <td>2 - 15 let</td>
                                    </tr>
                                    <tr>
                                        <td>Ambulance dospělí</td>
                                        <td>1 500 Kč</td>
                                        <td>50 minut</td>
                                        <td>15+</td>
                                    </tr>
                                    <tr>
                                        <td>Fyzioterapie domů</td>
                                        <td>2 000 Kč</td>
                                        <td>50 minut</td>
                                        <td>2 - 15 let</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    
                <!-- Ergoterapie -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Ergoterapie
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Služba</th>
                                        <th>Cena</th>
                                        <th>Doba trvání</th>
                                        <th>Věk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Vstupní konzultace</td>
                                        <td>1 000 Kč</td>
                                        <td>do 45 minut</td>
                                        <td>2 - 15 let</td>
                                    </tr>
                                    <tr>
                                        <td>Ergoterapie</td>
                                        <td>1 500 Kč</td>
                                        <td>do 50 minut</td>
                                        <td>2 - 15 let</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    
                <!-- Vývojová poradna -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Vývojová poradna
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Služba</th>
                                        <th>Cena</th>
                                        <th>Doba trvání</th>
                                        <th>Věk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Vývojová poradna</td>
                                        <td>1 500 Kč</td>
                                        <td>30 - 50 minut</td>
                                        <td>0 - 2 roky</td>
                                    </tr>
                                    <tr>
                                        <td>Vývojový balíček</td>
                                        <td>6 000 Kč</td>
                                        <td>Preventivní vývojový program: vstupní vyšetření + 4x terapie I.-VI. trimenon + SCODIAC screening hlavičky</td>
                                        <td>0 - 2 roky</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    
                <!-- Intenzivní terapie -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Intenzivní terapie
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Služba</th>
                                        <th>Cena</th>
                                        <th>Doba trvání</th>
                                        <th>Věk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Vstupní konzultace</td>
                                        <td>1 000 Kč</td>
                                        <td>do 45 minut</td>
                                        <td>2 - 15 let</td>
                                    </tr>
                                    <tr>
                                        <td>Intenzivní terapie</td>
                                        <td>1 500 Kč/hod</td>
                                        <td>50 minut</td>
                                        <td>2 - 15 let</td>
                                    </tr>
                                    <tr>
                                        <td>Pomocný terapeut</td>
                                        <td>750 Kč</td>
                                        <td>50 minut</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    
                <!-- Speciální balíčky -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Speciální balíčky
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Služba</th>
                                        <th>Cena</th>
                                        <th>Doba trvání</th>
                                        <th>Věk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>5x Ergoterapie</td>
                                        <td>5 000 Kč</td>
                                        <td>5x 50 minut</td>
                                        <td>2 - 15 let</td>
                                    </tr>
                                    <tr>
                                        <td>Fyzio ambulance děti + Ergoterapie děti</td>
                                        <td>2 500 Kč</td>
                                        <td>2x 50 minut</td>
                                        <td>2 - 15 let</td>
                                    </tr>
                                    <tr>
                                        <td>10x Ergoterapie</td>
                                        <td>8 000 Kč</td>
                                        <td>10x 50 minut</td>
                                        <td>2 - 15 let</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    
            </div> <!-- End Accordion -->
        </div> <!-- End Year Content -->
    </div> <!-- End Container -->

</div>
<!-- Contact Form Start -->
<div class="contact-us-form">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Contact Us Image Start -->
                 <div class="contact-us-img">
                    <figure class="reveal image-anime">
                        <img src="images/kontakt.png" alt="">
                    </figure>
                 </div>
                <!-- Contact Us Image End -->
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Kontaktujte nás</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Spojte</span> se s námi</h2>
                    </div>
                    <!-- Section Title End -->

                    <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.25s">
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="name" class="form-control" id="fullname" placeholder="Zadejte jméno" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                
                            <div class="form-group col-md-6 mb-4">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Zadejte E-mail" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Mobil" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Předmět zprávy" required="">
                                <div class="help-block with-errors"></div>
                            </div>
                
                            <div class="form-group col-md-12 mb-5">
                                <textarea name="msg" class="form-control" id="msg" rows="5" placeholder="Vaše zpráva" required=""></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                
                            <div class="col-md-12">
                                <button type="submit" class="btn-default disabled">Odeslat zprávu</button>
                                <div id="msgSubmit" class="h3 hidden"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Form End -->

<?php include 'footer.php'; ?>


</body>
</html>