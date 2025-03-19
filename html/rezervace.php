<!DOCTYPE html>
<?php include 'header.php'; ?>

    <!-- Page Appointment Start -->
    <div class="page-book-appointment">
        <div class="container">
			<div class="book-appointment-form">
				<div class="row section-row">
					<div class="col-lg-12">
						<!-- Section Title Start -->
						<div class="section-title">
							<h3 class="wow fadeInUp">booking</h3>
							<h2 class="text-anime-style-2" data-cursor="-opaque"><span>Book</span> Appointment</h2>
						</div>
						<!-- Section Title End -->
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="appointment-form wow fadeInUp">
							<!-- Form Start -->
							<form id="appointmentForm" action="#" method="POST" data-toggle="validator">
								<div class="row">
									<div class="form-group col-md-6 mb-4">
										<input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="email" name ="email" class="form-control" id="email" placeholder="Enter Email" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<select name="services" class="form-control form-select" id="services" required>
											<option value="" disabled selected>Select Service</option>
											<option value="manual_therapy">manual therapy</option>
											<option value="chronic_pain">chronic pain</option>
											<option value="hand_therapy">hand therapy</option>
											<option value="sports_therapy">sports therapy</option>
											<option value="cupping_therapy">cupping therapy</option>
											<option value="ultrasound_therapy">ultrasound therapy</option>
											<option value="laser_therapy">laser therapy</option>
											<option value="craniosacral_therapy">craniosacral therapy</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-12 mb-5">
										<input type="date" name="date" class="form-control" id="date" required>
										<div class="help-block with-errors"></div>
									</div>

									<div class="col-md-12 form-group">
										<button type="submit" class="btn-default">book appointment</button>
										<div id="msgSubmit" class="h3 hidden"></div>
									</div>
								</div>
							</form>
							<!-- Form End -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Page Appointment End -->
    
    <!-- Client Testimonial Start -->
    <div class="our-testimonial parallaxie">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">review</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>What</span> Our Client Say</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt.</p>									
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-1.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>johan duo</h3>
                                                <p>professional athlete</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
            
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt.</p>	
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-2.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>jane smith</h3>
                                                <p>retired teacher</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt.</p>	
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-3.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>robert lee</h3>
                                                <p>construction worker</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>We understand that injuries and acute pain can happen unexpectedly. Our emergency physiotherapy services are designed to provide prompt.</p>	
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-4.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>banson doe</h3>
                                                <p>marathon runner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Client Testimonial End -->
    
    <!-- Therapy Process Start -->
    <div class="therapy-process">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">therapy process</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>What</span> is Therapy Process</h2>
                    </div>
                    <!-- Section Title End -->
                </div>  
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Therapy Process Item Start -->
                    <div class="therapy-process-item wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <figure class="image-anime">
                                <img src="images/therapy-process-1.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Icon Box End -->

                        <!-- Therapy Process Content Start -->
                        <div class="therapy-process-content">
                            <h3>get paired with a therapist</h3>
                            <p>We understand that injuries and acute pain can happen unexpectedly.</p>
                        </div>
                        <!-- Therapy Process Content End -->
                    </div>
                    <!-- Therapy Process Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Therapy Process Item Start -->
                    <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <figure class="image-anime">
                                <img src="images/therapy-process-2.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Icon Box End -->

                        <!-- Therapy Process Content Start -->
                        <div class="therapy-process-content">
                            <h3>choose your preferred way to receive care</h3>
                            <p>We understand that injuries and acute pain can happen unexpectedly.</p>
                        </div>
                        <!-- Therapy Process Content End -->
                    </div>
                    <!-- Therapy Process Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Therapy Process Item Start -->
                    <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <figure class="image-anime">
                                <img src="images/therapy-process-3.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Icon Box End -->

                        <!-- Therapy Process Content Start -->
                        <div class="therapy-process-content">
                            <h3>we help you get better, faster!</h3>
                            <p>We understand that injuries and acute pain can happen unexpectedly.</p>
                        </div>
                        <!-- Therapy Process Content End -->
                    </div>
                    <!-- Therapy Process Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Therapy Process Item Start -->
                    <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <figure class="image-anime">
                                <img src="images/therapy-process-4.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Icon Box End -->

                        <!-- Therapy Process Content Start -->
                        <div class="therapy-process-content">
                            <h3>what psychotherapy can help with</h3>
                            <p>We understand that injuries and acute pain can happen unexpectedly.</p>
                        </div>
                        <!-- Therapy Process Content End -->
                    </div>
                    <!-- Therapy Process Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Therapy Process End -->

    <?php include 'footer.php'; ?>
</body>
</html>