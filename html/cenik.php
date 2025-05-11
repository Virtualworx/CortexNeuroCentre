<!DOCTYPE html>
<?php include 'header.php'; ?>
     

<div class="container mt-4">
        <div class="year-selector text-center">
            <button class="btn btn-success" style="pointer-events: none;" onclick="showYear(2025)">aktuální ceník</button>
        </div>
    
        <div id="year-2025" class="year-content" style="display: block;">

            <div class="custom-div-sasa">
                <div class="accordion" id="accordionExample">
                    
                    <!-- Fyzioterapie -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                fyzioterapie
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>služba</th>
                                            <th>cena</th>
                                            <th>doba trvání</th>
                                            <th>věk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>baby therapy - ambulance dětí</td>
                                            <td>1 500 Kč</td>
                                            <td>do 50 minut</td>
                                            <td>0 - 2 roky</td>
                                        </tr>
                                        <tr>
                                            <td>junior therapy - ambulance dětí</td>
                                            <td>1 500 Kč</td>
                                            <td>do 50 minut</td>
                                            <td>2 - 15 let</td>
                                        </tr>
                                        <tr>
                                            <td>ambulance dospělí</td>
                                            <td>1 500 Kč</td>
                                            <td>50 minut</td>
                                            <td>15+</td>
                                        </tr>
                                        <tr>
                                            <td>fyzioterapie domů</td>
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
                                ergoterapie
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>služba</th>
                                            <th>cena</th>
                                            <th>doba trvání</th>
                                            <th>věk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>vstupní konzultace</td>
                                            <td>1 000 Kč</td>
                                            <td>do 45 minut</td>
                                            <td>2 - 15 let</td>
                                        </tr>
                                        <tr>
                                            <td>ergoterapie</td>
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
                                vývojová poradna
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>služba</th>
                                            <th>cena</th>
                                            <th>doba trvání</th>
                                            <th>věk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>vývojová poradna</td>
                                            <td>1 500 Kč</td>
                                            <td>30 - 50 minut</td>
                                            <td>0 - 2 roky</td>
                                        </tr>
                                        <tr>
                                            <td>vývojový balíček</td>
                                            <td>6 000 Kč</td>
                                            <td>preventivní vývojový program: vstupní vyšetření + 4x terapie I.-VI. trimenon + SCODIAC screening hlavičky</td>
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
                                intenzivní terapie
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>služba</th>
                                            <th>cena</th>
                                            <th>doba trvání</th>
                                            <th>věk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>vstupní konzultace</td>
                                            <td>1 000 Kč</td>
                                            <td>do 45 minut</td>
                                            <td>2 - 15 let</td>
                                        </tr>
                                        <tr>
                                            <td>intenzivní terapie</td>
                                            <td>1 500 Kč/hod</td>
                                            <td>50 minut</td>
                                            <td>2 - 15 let</td>
                                        </tr>
                                        <tr>
                                            <td>pomocný terapeut</td>
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
                            <button class="accordion-button collapsed" id="gold-accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                speciální balíčky
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>služba</th>
                                            <th>cena</th>
                                            <th>doba trvání</th>
                                            <th>věk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>5x ergoterapie</td>
                                            <td>5 000 Kč</td>
                                            <td>5x 50 minut</td>
                                            <td>2 - 15 let</td>
                                        </tr>
                                        <tr>
                                            <td>fyzio ambulance děti + ergoterapie děti</td>
                                            <td>2 500 Kč</td>
                                            <td>2x 50 minut</td>
                                            <td>2 - 15 let</td>
                                        </tr>
                                        <tr>
                                            <td>10x ergoterapie</td>
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
            </div>
        </div> <!-- End Year Content -->
    </div> <!-- End Container -->

</div>
<!-- Page Contact Start -->
		<div class="container pt-5">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<!-- Contact Info Item Start -->
					<div class="contact-info-item wow fadeInUp">
						<!-- Icon Box Start -->
						 <div class="icon-box">
							<img src="images/icon-green-location.svg" alt="">
						 </div>
						<!-- Icon Box End -->

						<!-- Contact Info Content Start -->
						<div class="contact-info-content">
							<h3>Adresa</h3>
							<p>Chlumčanského 497/5 Praha, 180 00</p>
                            
						</div>
						<!-- Contact Info Content End -->
					</div>
					<!-- Contact Info Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Contact Info Item Start -->
					<div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
						<!-- Icon Box Start -->
						 <div class="icon-box">
							<img src="images/icon-green-mail.svg" alt="">
						 </div>
						<!-- Icon Box End -->

						<!-- Contact Info Content Start -->
						<div class="contact-info-content">
							<h3>E-mail</h3>
							<p><a href="mailto:sasazitny@seznam.cz">info@cortexneurocentre.cz</a></p>
						</div>
						<!-- Contact Info Content End -->
					</div>
					<!-- Contact Info Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Contact Info Item Start -->
					<div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
						<!-- Icon Box Start -->
						 <div class="icon-box">
							<img src="images/icon-green-phone.svg" alt="">
						 </div>
						<!-- Icon Box End -->

						<!-- Contact Info Content Start -->
						<div class="contact-info-content">
							<h3>Zavolejte nám</h3>
							<p ><a href="tel:+420 773 916 324">+420 702 127 286</a></p>
						</div>
						<!-- Contact Info Content End -->
					</div>
					<!-- Contact Info Item End -->
				</div>

				<div class="col-lg-3 col-md-6">
					<!-- Contact Info Item Start -->
					<div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
						<!-- Icon Box Start -->
						 <div class="icon-box">
							<img src="images/icon-green-hour.svg" alt="">
						 </div>
						<!-- Icon Box End -->

						<!-- Contact Info Content Start -->
						<div class="contact-info-content">
							<h3>Otevírací doba</h3>
							<p>Po - Pá : 8:00 až 17:00</p>
						</div>
						<!-- Contact Info Content End -->
					</div>
					<!-- Contact Info Item End -->
				</div>
			</div>
		</div>


<?php include 'footer.php'; ?>


</body>
</html>