@extends('layouts.header')


@section('content')

	<!-- Product Detail Start -->
	<section class="gap product-detail">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="pd-gallery">
						<div class="pd-main-img">
							<img id="NZoomImg" data-NZoomscale="2" style="width: 100%;height: 100%;" src="{{ asset('assets/img/book.png') }}">
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="pd-data">
						<span class="theme-clr">Worship Arcade Book</span>
						<h2>Winning Your Daily Spiritual Battles</h2>
						<ul class="pd-price">
							<li class="pd-sale-price"><span>N</span>1800</li>
							<li class="pd-regular-price"><span>N</span>2500</li>
						</ul>
						
					
						<div class="pd-cart-heart">
							<input type="number" name="number" placeholder="N">
							<a href="JavaScript:void(0)" class="theme-btn">Order</a>
								
							</a>
						</div>
					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="pd-content">
						
						<h3 id="description">Description</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad min
						im veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volu
						ptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mol
						lit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn
						a aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo
						r in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culp
						qui officia deserunt mollit anim id est laborum.</p>

						 <p>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volu
						ptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mol
						lit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magn
						a aliqua. Ut enim ad minim veniam, quis nostrud</p>			
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Product Detail End -->

@endsection