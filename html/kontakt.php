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
	 </div>
	<!-- Page Contact End -->

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
                        <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=cz&amp;q=Chlum%C4%8Dansk%C3%A9ho%20497/5+(Cortex%20Neuro%20Center)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
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