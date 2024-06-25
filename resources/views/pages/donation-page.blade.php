@extends('layouts.header')


@section('content')


	<!-- Banner Start -->

	<section class="banner position-relative">

		<div class="parallax" style="background-image: url('{{ asset('assets/img/hero-image.png') }}');"></div>

			<div class="banner-data text-center">

				<h2 class="text-white font-bold">Giving </h2>

			</div>

	</section>

	<!-- Banner End -->



	<!-- Donation Page Start -->

	<section class="gap donation-page">

		<div class="container">
			<div class="row bg-grey">
				<div class="start-donation w-85 m-auto">
					<form>
						<div class="donation-type">
							<div class="row">
								<div class="col-lg-4">
									<span class="heading">How Often Would You Like to Give?</span>
									<div class="select_box">
										<select class="form-select" aria-label="Default select example">
										  <option selected>Giving Type</option>
										  <option value="1">Tithe</option>
										  <option value="2">Sow a Seed</option>
										  <option value="3">Prophetic Seed</option>
										  <option value="4">Offering</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="select-amount donation-form">
							<span class="heading">Now choose how much.</span>
							<ul class="list-unstyled aos-init aos-animate" data-aos="fade-up" data-aos-duration="1400">

								<li><a class="donating" href="JavaScript:void(0)">N<span class="donation_amount">5000</span></a>

								</li>

								<li><a class="donating" href="JavaScript:void(0)">N<span class="donation_amount">10000</span></a>

								</li>

								<li><a class="donating" href="JavaScript:void(0)">N<span class="donation_amount">20000</span></a>

								</li>

								<li><a class="donating" href="JavaScript:void(0)">N<span class="donation_amount">30000</span></a>

								</li>
								<li><a class="donating" href="JavaScript:void(0)">N<span class="donation_amount">50000</span></a>

								</li>
								<li><a class="donating" href="JavaScript:void(0)">Custom Amount</a>

								</li>

							</ul>
							<div class="custom-donation-amount aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">
								<span class="text-white">N</span> 
								<input class="donated_amount" type="number" placeholder="Custom Amount">
							</div>
						</div>
						<div class="payment-method">
							<span class="heading">Payment Method</span>
							<div class="dp-form">
							  <div class="dp-input">
							  	  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								  <label class="form-check-label">
								    Test Donation
								  </label>
							  </div>
							  <div class="dp-input">
							  	  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								  <label class="form-check-label">
								    Offline Donation
								  </label>
							  </div>
							  <div class="dp-input">
							  	  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								  <label class="form-check-label">
								    Credit Card
								  </label>
							  </div>
							</div>
						</div>
						<div class="personal-info payment-info">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-box">	
										  <h3>Personal Information</h3>							  
										  <div class="col-12">
										  	<label>Email Address</label>
										    <input type="email" class="form-control">
										  </div>
										  <div class="col-md-12">
										  	<label>Complete Name</label>
										    <input type="text" class="form-control">
										  </div>
										  <div class="col-md-12">
										  	<label>State / Zipcode</label>
										    <select class="form-select" aria-label="Default select example">
											  <option selected>State</option>
											  <option value="1">One</option>
											  <option value="2">Two</option>
											  <option value="3">Three</option>
											</select>
										  </div>
										  <div class="row g-3 align-items-end justify-content-between">
										  	<div class="col-md-6">
											  	<label>State / Zipcode</label>
											    <select class="form-select" aria-label="Default select example">
												  <option selected>State</option>
												  <option value="1">One</option>
												  <option value="2">Two</option>
												  <option value="3">Three</option>
												</select>
										  	</div>
											  <div class="col-md-6">
											    <input type="number" class="form-control" placeholder="Zipcode">
											  </div>
										  </div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-box">	
										  <h3>Payment Information</h3>
										  <div class="col-12">
										    <div class="payment-method pay-through">
												<div class="dp-form">
												  <div class="dp-input">
												  	  <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio1">
													  <div>
													  	<img src="assets/images/paypal.webp">
													  	<img src="assets/images/paypal.webp">
													  	<img src="assets/images/paypal.webp">
													  	<img src="assets/images/paypal.webp">
													  </div>
												  </div>
												  <div class="dp-input">
												  	  <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio1">
													  <div>
													  	<img src="assets/images/paypal.webp">
													  	  <label class="form-check-label">
														    Paypal
														  </label>
													  </div>
												  </div>
												</div>
											</div>
										  </div>							  
										  <div class="col-12">
										  	<label>Credit Card Number</label>
										    <input type="number" class="form-control">
										  </div>
										  <div class="col-md-12">
										  	<label>CVV</label>
										    <input type="number" class="form-control">
										  </div>
										  <div class="row g-3 align-items-end justify-content-between">
										  	<div class="col-md-6">
											  	<label>Expiration Date</label>
											    <select class="form-select" aria-label="Default select example">
												  <option selected>Month</option>
												  <option value="1">Jan</option>
												  <option value="2">Feb</option>
												  <option value="3">March</option>
												</select>
										  	</div>
											  <div class="col-md-6">
											    <select class="form-select" aria-label="Default select example">
												  <option selected>Year</option>
												  <option value="1">1995</option>
												  <option value="2">1996</option>
												  <option value="3">1997</option>
												</select>
											  </div>
										  </div>
									</div>
								</div>
							</div>
							<div class="dp-agree">
						  	  <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
							  <label class="form-check-label">
							    Agree to Terms and condition?
							  </label>
							</div>
							<div class="total-donation-amount">
								<h4>Donation Total:</h4>
								<div class="total_amount">
									<input class="donated_amount" type="text" disabled>
								</div>
							</div>
							<div class="col-12">
							    <button type="submit" class="theme-btn">Give Now</button>
							 </div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</section>

	<!-- Donation Page End -->


@endsection