@extends('layouts.header')

@section('content')

	<!-- Contact Us Start -->

	<section class="gap sermons">

		<div class="container">

			<div class="row">

				<div class="sermon aos-init aos-animate" data-aos="zoom-in-right" data-aos-duration="1000">

					<div class="sermon-img">

						<div class="sermon-media">

							<img src="assets/images/sermon-img.webp" alt="Sermon Image 1">

							<video controls>

								<source src="assets/videos/video.mp4" type="video/mp4">

								Your browser does not support the video tag.

							</video>

							<div class="audio-playerstyle2">

								<audio controls>

								  <!-- <source src="audio.ogg" type="audio/ogg"> -->

								  <source src="assets/music/audio-2.mp3" type="audio/mpeg">

								  Your browser does not support the audio element.

								</audio>

							</div>

						</div>

						<ul>

							<li><a class="s_audio" href="JavaScript:void(0)"><img src="assets/images/music-note.svg" alt="volume"></a></li>

							<li><a class="s_video" href="JavaScript:void(0)"><img src="assets/images/play-button-2.svg" alt="Play Button"></a></li>


						</ul>

					</div>

					<div class="sermon-data">

						<ul>

							<li>Rev Peter Mayah</li>

							<li>Nov 19, 2023</li>

						</ul>

						<h3><a href="{{ route('sermons') }}">Spiritually Reborn </a></h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed totam rem ape eaque ipsa quae ab illo e ipsa quae ab ille ab illo inventore.</p>

					</div>

				</div>

				<div class="sermon aos-init" data-aos="zoom-in-right" data-aos-duration="1000">

					<div class="sermon-img">

						<div class="sermon-media">

							<img src="assets/images/sermon-img-1.webp" alt="Sermon Image 1">

							<video controls>

								<source src="assets/videos/video.mp4" type="video/mp4">

								Your browser does not support the video tag.

							</video>

							<div class="audio-playerstyle2">

								<audio controls>

								  <!-- <source src="audio.ogg" type="audio/ogg"> -->

								  <source src="assets/music/audio-2.mp3" type="audio/mpeg">

								  Your browser does not support the audio element.

								</audio>

							</div>

						</div>

						<ul>

							<li><a class="s_audio" href="JavaScript:void(0)"><img src="assets/images/music-note.svg" alt="volume"></a></li>

							<li><a class="s_video" href="JavaScript:void(0)"><img src="assets/images/play-button-2.svg" alt="Play Button"></a></li>


						</ul>

					</div>

					<div class="sermon-data">

						<ul>

							<li>Rev Peter Mayah</li>

							<li>Nov 19, 2023</li>

						</ul>

						<h3><a href="{{ route('sermons') }}">Spiritually Reborn </a></h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed totam rem ape eaque ipsa quae ab illo e ipsa quae ab ille ab illo inventore.</p>

					</div>

				</div>

				<div class="sermon aos-init" data-aos="zoom-in-right" data-aos-duration="1000">

					<div class="sermon-img">

						<div class="sermon-media">

							<img src="assets/images/sermon-img-2.webp" alt="Sermon Image 1">

							<video controls>

								<source src="assets/videos/video.mp4" type="video/mp4">

								Your browser does not support the video tag.

							</video>

							<div class="audio-playerstyle2">

								<audio controls>

								  <!-- <source src="audio.ogg" type="audio/ogg"> -->

								  <source src="assets/music/audio-2.mp3" type="audio/mpeg">

								  Your browser does not support the audio element.

								</audio>

							</div>

						</div>

						<ul>

							<li><a class="s_audio" href="JavaScript:void(0)"><img src="assets/images/music-note.svg" alt="volume"></a></li>

							<li><a class="s_video" href="JavaScript:void(0)"><img src="assets/images/play-button-2.svg" alt="Play Button"></a></li>


						</ul>

					</div>

					<div class="sermon-data">

						<ul>

							<li>Rev Peter Mayah</li>

							<li>Nov 19, 2023</li>

						</ul>

						<h3><a href="{{ route('sermons') }}">Spiritually Reborn </a></h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed totam rem ape eaque ipsa quae ab illo e ipsa quae ab ille ab illo inventore.</p>

					</div>

				</div>

				

			</div>

			

		</div>

	</section>

	<!-- Contact Us End -->
@endsection