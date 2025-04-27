<!DOCTYPE html>
<?php include 'header.php'; ?>

	<!-- Page Contact Start -->
	<div class="page-contact">
		<div class="container">
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
							<p><a href="mailto:info@cortexneurocentre.cz">info@cortexneurocentre.cz</a></p>
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
	 </div>
	<!-- Page Contact End -->

	<!-- Contact Form Start -->
	<div class="contact-us-form">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
				<div class="contact-form">
						<!-- Section Title Start -->
						<div class="section-title">
                            <h3 class="wow fadeInUp">Kudy, kam?</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Jak</span> se k nám dostanente?</h2>
                        </div>
                        <!-- Section Title End -->


						<div id="contactInfo" class="wow fadeInUp" data-wow-delay="0.25s">
    <div class="row">
        <div class="col-12 mb-4">
            <h4>Tramvaj:</h4>
            <p>3, 10, 24 (stanice Bulovka)</p>

            <h4>Metro:</h4>
            <p>
                B (stanice Palmovka) + tramvaj 3, 10, 24 (stanice Bulovka)<br>
                C (stanice Kobylisy) + tramvaj 3, 10, 24 (stanice Bulovka)
            </p>

            <h4>Budova:</h4>
            <p>Bulovka Medical & Business Centre</p>

            <h4>Parkování:</h4>
            <p>
                V ulici Na Korábě a Chlumčanského ZDARMA (není zde žádná zóna)<br><br>
                V areálu: Příjezd z levé strany budovy viz. Mapa (ulice Na Korábě). 
                Po příjezdu k závoře je potřeba zazvonit na ostrahu a sdělit, že jedete do Cortexu. 
                V případě potřeby můžete také zavolat přímo na recepci – <a href="tel:+420733342834">733 342 834</a>.
            </p>


					<!-- Tlačítko -->
					<div class="mt-4">
						<a href="#popupImage" class="btn btn-default">Mapa</a>
					</div>

					<!-- Popup modal -->
					<div id="popupImage" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8); text-align:center; padding-top:50px; z-index:1000;">
						<img src="images/cortex-podklady/map-1.png" alt="Mapa" style="max-width:90%; max-height:80%; border-radius: 15px;">
						<br>
						<a href="#" style="color:white; font-size:24px;">Zavřít</a>
					</div>

					<script>
						const popup = document.getElementById('popupImage');
						const popupImg = popup.querySelector('img');
						const popupClose = popup.querySelector('a');

						document.querySelector('a[href="#popupImage"]').addEventListener('click', function(e) {
							e.preventDefault();
							popup.style.display = 'block';
						});

						popupClose.addEventListener('click', function(e) {
							e.preventDefault();
							popup.style.display = 'none';
						});

						popup.addEventListener('click', function(e) {
							// zavře se jen když klikneš mimo obrázek
							if (e.target !== popupImg && e.target !== popupClose) {
								popup.style.display = 'none';
							}
						});
					</script>


        </div>
    </div>
</div>

					</div>
				</div>


	
				<div class="col-lg-6">
										<!-- Contact Us Image Start -->
										<div class="contact-us-img">
										<iframe 
											src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2558.4836496382063!2d14.467651!3d50.114671099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470beb1a537b06dd%3A0xab5c1e4e6b028356!2sCortex%20Neuro%20Centre%20s.r.o%20-%20Neurorehabilitace%20%2F%20Fyzioterapie!5e0!3m2!1sen!2scz!4v1674496479418!5m2!1sen!2scz" 
											width="100%" 
											height="750" 
											style="border:0; border-radius: 15px;" 
											allowfullscreen="" 
											loading="lazy" 
											referrerpolicy="no-referrer-when-downgrade">
										</iframe>

					 </div>
					<!-- Contact Us Image End -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Form End -->

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

	<!-- Google Map Start -->
	<div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-iframe">
					<iframe src="https://www.google.com/maps/embed?pb=!4v1673947905840!6m8!1m7!1sCAoSLEFGMVFpcE94ZWVnZ2h6TWtJVjVNZjZsSnFPQXgyekFkdVZwYi1MMlYwS25C!2m2!1d50.11471333795689!2d14.46762470388565!3f351.2822015915119!4f-9.687586206896569!5f0.4000000000000002" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map Iframe End -->
                </div>
            </div>
        </div>
    </div>
	<!-- Google Map End -->

    <?php include 'footer.php'; ?>
</body>
</html>