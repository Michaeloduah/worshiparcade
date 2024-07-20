<!DOCTYPE html>

<html lang="zxx">
  <head>
    <!-- Meta Options -->

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->

    <title>Worship Arcade</title>

    <!-- Bootstrap -->

    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/scss/bootstrap.min.css') }}"
    />

    <!-- Favicon -->

    <link
      rel="icon"
      type="image/x-icon"
      href="{{ asset('assets/img/pastor-icon.webp') }}"
    />

    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/scss/slick.css') }}" />

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/scss/animate.min.css') }}" />

    <!-- Animate on scroll -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/scss/aos.css') }}" />

    <!-- Fancy Box -->
    <link rel="stylesheet" href="{{ asset('assets/scss/jquery.fancybox.min.css') }}" />

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/scss/style.css') }}" />

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/scss/color.css') }}" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/scss/responsive.css') }}" />
  </head>

  <body>
    <!-- Loader Start -->
    <div class="preloader" id="preloader">
      <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
        <path
          d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"
        ></path>
      </svg>
      <div class="inner">
        <canvas
          class="progress-bar"
          id="progress-bar"
          width="200"
          height="200"
        ></canvas>
        <figure><img src="{{ asset('assets/img/icon-white.png') }}" alt="Image" /></figure>
        <small>Christ is coming soon....</small>
      </div>
      <!-- end inner -->
    </div>

    <!-- Loader End -->

    <!-- Header One Start -->

    <header class="header-one">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <ul class="login">
                <li>
                  <a href="JavaScript:void(0)"
                    ><img src="{{ asset('assets/img/bell.svg') }}" alt="Bell" />One in
                    Christ Jesus, engaged in parent’s mission, empowered by the
                    Spirit.</a
                  >
                </li>
              </ul>
            </div>

            <div class="col-lg-2 offset-1">
              <ul class="social-medias">
                <li>
                  <a href="JavaScript:void(0)"
                    ><img src="{{ asset('assets/img/facebook.svg') }}" alt="facebook"
                  /></a>
                </li>

                <li>
                  <a href="JavaScript:void(0)"
                    ><img src="{{ asset('assets/img/twitter.svg') }}" alt="twitter"
                  /></a>
                </li>

                <li>
                  <a href="JavaScript:void(0)"
                    ><img src="{{ asset('assets/img/instagram.svg') }}" alt="instagram"
                  /></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="desktop-nav" id="stickyHeader">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav>
                <div class="logo">
                  <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/img/church-logo.png') }}" alt="Logo" />
                  </a>
                </div>

                <div class="nav-bar">
                  <ul>
                    <li class="menu-item-has-children">
                      <a href="">Home</a>
                    </li>

                    <li class="menu-item-has-children">
                      <a href="JavaScript:void(0)">Sermons</a>

                      <ul class="sub-menu">
                        <li><a href="{{ route('sermon') }}">Our Sermons</a></li>
                      </ul>
                    </li>

                    <li class="menu-item-has-children">
                      <a href="JavaScript:void(0)">Events</a>

                      <ul class="sub-menu">
                        <li><a href="{{ route('event') }}">Our Events</a></li>
                      </ul>
                    </li>

                    <li class="menu-item-has-children">
                      <a href="JavaScript:void(0)">Devotionals</a>

                      <ul class="sub-menu">
                        
                        <li><a href="{{ route('devotional') }}">Our Devotions</a></li>
                      </ul>
                    </li>

                    <li><a href="{{ route('contact') }}">Contact</a></li>
                  </ul>
                </div>

                <div class="donation">
                  <a href="{{ route('shop') }}" class="pr-cart">
                    <svg
                      id="Shoping-bags"
                      enable-background="new 0 0 512 512"
                      viewBox="0 0 512 512"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g>
                        <path
                          d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z"
                        />
                      </g>
                    </svg>
                  </a>

                  <a
                    href="JavaScript:void(0)"
                    class="theme-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"
                    >Give Now</a
                  >
                </div>

                <div id="nav-icon4">
                  <span></span>

                  <span></span>

                  <span></span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <div class="mobile-nav" id="mobile-nav">
        <div class="res-log">
          <a href="{{ route('index') }}">
            <img src="{{ asset('assets/img/church-logo.png') }}" alt="Responsive Logo" />
          </a>
        </div>

        <ul>
          <li class="menu-item-has-children">
            <a href="">Home</a>
          </li>

          <li class="menu-item-has-children">
            <a href="JavaScript:void(0)">Sermons</a>

            <ul class="sub-menu">
              <li><a href="{{ route('sermon') }}">Our Sermons</a></li>
            </ul>
          </li>

          <li class="menu-item-has-children">
            <a href="JavaScript:void(0)">Events</a>

            <ul class="sub-menu">
              <li><a href="{{ route('event') }}">Our Events</a></li>
            </ul>
          </li>

          <li class="menu-item-has-children">
            <a href="JavaScript:void(0)">Devotionals</a>

            <ul class="sub-menu">
              <!-- Third Level Menu Html Code -->
              
              <li><a href="{{ route('devotional') }}">Our Devotions</a></li>
            </ul>
          </li>

          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>

        <a href="JavaScript:void(0)" id="res-cross"></a>
      </div>
    </header>
    <!-- Header One Start -->

    <!-- Hero One here -->

    <section class="hero-one">
      <div class="hero-one-slider">
        <div>
          <img src="{{ asset('assets/img/hero-image.png') }}" alt="hero-one-slider" />
          <div class="hero-data text-center">
            <h1>
              WORSHIP ARCADE </br>
              (THE COMMUNITY CHURCH, ASABA)
            </h1>
            <p>Where we believe in sharing the love of God with everyone we
              meet, Whether you're a long-time member of our congregation
              or a first-time visitor, you are not too small for us to know you neither
              are we too big to identify with you.</p>
          </div>
        </div>
        <div>
        </div>
        <div>
        </div>
      </div>
    </section>

    <!-- banner part end -->

    <!-- Hero One End -->

   
   

    <!-- About One Start -->

    <section class="gap no-top about-one">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="about-data">
              <h2>More About Us</h2>

              <p>
                Worship Arcade [The Community Church] Asaba held its inaugural service on the 12th day of October, 2014
due to the mandate given by God to Rev. Peter Kola Mayah whom he sent from Lagos to Asaba to pioneer a
unique vision for the land of Delta to the world with the clear vision of VISION:Raising Market-place
Christains for all round societal relevance (Matt. 5:14,16). MISSION: Positive, Practical, Systematic,
Bible-based transformation in Character, Career, Relationship & Family (2Peter 1:3). 
              </p>

              <a href="{{ route('about') }}" class="theme-btn">More About us</a>
            </div>

            <div class="about-gallery gallery">
              <figure>
                <img src="{{ asset('assets/img/wac1.png') }}" alt="about image" />

                <a data-fancybox="gallery" href="{{ asset('assets/img/wac1.png') }}"
                  ><img src="{{ asset('assets/img/wac1.png') }}" alt="Plus"
                /></a>
              </figure>

              <figure>
                <img src="{{ asset('assets/img/wac3.png') }}" alt="about image" />

                <a data-fancybox="gallery" href="{{ asset('assets/img/wac3.png') }}"
                  ><img src="{{ asset('assets/img/wac3.png') }}" alt="Plus 1"
                /></a>
              </figure>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="prayers-slider green-bg">
              <div>
                <img
                  class="img-fluid w-100"
                  src="{{ asset('assets/img/wac1.png') }}"
                  alt="About Image"
                />

                <div class="slider-data">
                  <h2 class="text-white">
                    O Lord, you have searched me out and known me; you know my
                    sitting down and my rising up.
                  </h2>

                  <h3 class="text-white">Psalm 139: 1-2</h3>
                </div>
              </div>

              <div>
                <img
                  class="img-fluid w-100"
                  src="{{ asset('assets/img/wac1.png') }}"
                  alt="about image 1"
                />

                <div class="slider-data">
                  <h2 class="text-white">
                    Unless the Lord builds the house, those who build it labour
                    in vain.
                  </h2>

                  <h3 class="text-white">Psalm 127: 1-2</h3>
                </div>
              </div>

              <div>
                <img
                  class="img-fluid w-100"
                  src="{{ asset('assets/img/wac3.png') }}"
                  alt="about image 3"
                />

                <div class="slider-data">
                  <h2 class="text-white">
                    God is with you, wherever you may be and whatever you may
                    choose to do.
                  </h2>

                  <h3 class="text-white">Psalm 127: 1-2</h3>
                </div>
              </div>

              <div>
                <img
                  class="img-fluid w-100"
                  src="{{ asset('assets/img/wac3.png') }}"
                  alt="about image 4"
                />

                <div class="slider-data">
                  <h2 class="text-white">
                    Any concern too small to be turned into a prayer is too
                    small to be made into a burden.
                  </h2>

                  <h3 class="text-white">Corrie Ten Boom</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About One End -->

     <!-- Donation Start -->

     <section class="donation light-bg overflow-hidden">
      <div class="container-fluid p-0">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <img
              class="img-fluid sideimage"
              src="{{ asset('assets/img/donation-img.webp') }}"
              alt="Donation Image"
            />
          </div>

          <div class="col-lg-6">
            <div
              class="parallax pattren"
              style="background-image: url({{asset('assets/img/pattren.jpg') }})"
            ></div>
            <div class="donation-data">
              <h2 data-aos="fade-up" data-aos-duration="900">
                Give Towards our Building project
              </h2>

              <p data-aos="fade-up" data-aos-duration="1100">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                totam rem ape eaque ipsa quae ab illo inven tore Loaperiam,
                eaque ipsa quae ab illo invento eaqu e ipsa quae ab ille ab illo
                inventore.
              </p>

              <div class="donation-form">
                <div
                  class="custom-donation-amount"
                  data-aos="fade-up"
                  data-aos-duration="1300"
                >
                  <span class="text-white">N</span>
                  <input
                    class="donated_amount"
                    type="number"
                    placeholder="Custom Amount"
                  />
                </div>

                <ul
                  class="list-unstyled"
                  data-aos="fade-up"
                  data-aos-duration="1400"
                >
                  <li>
                    <a class="donating" href="JavaScript:void(0)"
                      >N<span class="donation_amount">5000</span></a
                    >
                  </li>

                  <li>
                    <a class="donating" href="JavaScript:void(0)"
                      >N<span class="donation_amount">10,000</span></a
                    >
                  </li>

                  <li>
                    <a class="donating" href="JavaScript:void(0)"
                      >N<span class="donation_amount">20,000</span></a
                    >
                  </li>

                  <li>
                    <a class="donating" href="JavaScript:void(0)"
                      >N<span class="donation_amount">30,000</span></a
                    >
                  </li>
                </ul>

                <a
                  class="theme-btn"
                  href="JavaScript:void(0)"
                  data-aos="fade-up"
                  data-aos-duration="1500"
                  >Give Now</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Donation End -->

    <!-- Recent Sermons One Start -->

    <section class="gap light-bg recent-sermon-one">
      <div class="container">
        <div class="heading">
          <img src="{{ asset('assets/img/heading-img.webp') }}" alt="Heading Image" />

          <p>Scandoulous Things Jesus did in his Ministry</p>

          <h2>Recent Sermons</h2>
        </div>

        <div class="row">
          <div class="sermon" data-aos="zoom-in-right" data-aos-duration="1000">
            <div class="sermon-img">
              <div class="sermon-media">
                <img src="{{ asset('assets/img/sermon-img.webp') }}" alt="Sermon Image" />

                <iframe
                  width="560"
                  height="315"
                  src="https://www.youtube.com/embed/uemObN8_dcw"
                  title="YouTube video player"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen
                ></iframe>

                <div class="audio-player style2">
                  <audio controls>
                    <!-- <source src="audio.ogg" type="audio/ogg"> -->

                    <source src="{{ asset('assets/music/ADULLAM.mp3') }}" type="audio/mpeg" />

                    Your browser does not support the audio element.
                  </audio>
                </div>
              </div>

              <ul>
                <li>
                  <a class="s_audio" href="JavaScript:void(0)"
                    ><img src="{{ asset('assets/img/music-note.svg') }}" alt="volume"
                  /></a>
                </li>

                <li>
                  <a class="s_video" href="JavaScript:void(0)"
                    ><img
                      src="{{ asset('assets/img/play-button-2.svg') }}"
                      alt="Play Button"
                  /></a>
                </li>

                
              </ul>
            </div>

            <div class="sermon-data">
              <ul>
                <li>Rev. Peter Mayah</li>

                <li>Nov 19, 2021</li>
              </ul>

              <h3>
                <a href="{{ route('sermons') }}"
                  >The Cave of Adullam</a
                >
              </h3>

              <p>
                Lorem ipsum dolor sit amet, consectetur adipi elit, sed totam
                rem ape eaque ipsa quae ab illo e ipsa quae ab ille ab illo
                inventore.
              </p>
            </div>
          </div>

          <div class="sermon" data-aos="zoom-in-right" data-aos-duration="1000">
            <div class="sermon-img">
              <div class="sermon-media">
                <img
                  src="{{ asset('assets/img/sermon-img-1.webp') }}"
                  alt="Sermon Image 1"
                />

                <iframe
                  src="https://player.vimeo.com/video/182276651?h=4319e87fd1"
                  width="640"
                  height="360"
                  allow="autoplay; fullscreen; picture-in-picture"
                  allowfullscreen
                ></iframe>

                <div class="audio-player style2">
                  <audio controls>
                    <!-- <source src="audio.ogg" type="audio/ogg"> -->

                    <source src="{{ asset('assets/music/audio-2.mp3') }}" type="audio/mpeg" />

                    Your browser does not support the audio element.
                  </audio>
                </div>
              </div>

              <ul>
                <li>
                  <a class="s_audio" href="JavaScript:void(0)"
                    ><img src="{{ asset('assets/img/music-note.svg') }}" alt="volume"
                  /></a>
                </li>

                <li>
                  <a class="s_video" href="JavaScript:void(0)"
                    ><img
                      src="{{ asset('assets/img/play-button-2.svg') }}"
                      alt="Play Button"
                  /></a>
                </li>

                
              </ul>
            </div>

            <div class="sermon-data">
              <ul>
                <li>Rev. Peter Mayah</li>

                <li>Nov 19, 2021</li>
              </ul>

              <h3>
                <a href="{{ route('sermons') }}"
                  >Spiritually Reborn As parent’s Children</a
                >
              </h3>

              <p>
                Lorem ipsum dolor sit amet, consectetur adipi elit, sed totam
                rem ape eaque ipsa quae ab illo e ipsa quae ab ille ab illo
                inventore.
              </p>
            </div>
          </div>

          <div class="sermon" data-aos="zoom-in-right" data-aos-duration="1000">
            <div class="sermon-img">
              <div class="sermon-media">
                <img
                  src="{{ asset('assets/img/sermon-img-2.webp') }}"
                  alt="Sermon Image 2"
                />

                <iframe
                  src="https://www.dailymotion.com/embed/video/x7l8bb8?autoplay=0"
                  width="100%"
                  height="100%"
                  allowfullscreen
                >
                </iframe>

                <div class="audio-player style2">
                  <audio controls>
                    <!-- <source src="audio.ogg" type="audio/ogg"> -->

                    <source src="{{ asset('assets/music/audio-3.mp3') }}" type="audio/mpeg" />

                    Your browser does not support the audio element.
                  </audio>
                </div>
              </div>

              <ul>
                <li>
                  <a class="s_audio" href="JavaScript:void(0)"
                    ><img src="{{ asset('assets/img/music-note.svg') }}" alt="volume"
                  /></a>
                </li>

                <li>
                  <a class="s_video" href="JavaScript:void(0)"
                    ><img
                      src="{{ asset('assets/img/play-button-2.svg') }}"
                      alt="Play Button"
                  /></a>
                </li>

              </ul>
            </div>

            <div class="sermon-data">
              <ul>
                <li>Rev. Peter Mayah</li>

                <li>Nov 19, 2021</li>
              </ul>

              <h3>
                <a href="{{ route('sermons') }}"
                  >Spiritually Reborn As parent’s Children</a
                >
              </h3>

              <p>
                Lorem ipsum dolor sit amet, consectetur adipi elit, sed totam
                rem ape eaque ipsa quae ab illo e ipsa quae ab ille ab illo
                inventore.
              </p>
            </div>
          </div>
        </div>

       
      </div>
    </section>

    <!-- Recent Sermons One End -->



    <!-- Live Stream Start -->

    <section class="gap no-bottom live-stream">
      <div class="container">
        <div class="heading">
          <img src="{{ asset('assets/img/heading-img.webp') }}" alt="Heading Image 2" />

          <p>Scandoulous Things Jesus did in his Ministry</p>

          <h2>Watch our Live Stream</h2>
        </div>

        <div class="row">
          <div class="audio-player">
            <audio id="myAudio" ontimeupdate="onTimeUpdate()">
              <!-- <source src="audio.ogg" type="audio/ogg"> -->

              <source
                id="source-audio"
                src="{{ asset('assets/music/audio-1.mp3') }}"
                type="audio/mpeg"
              />

              Your browser does not support the audio element.
            </audio>

            <div class="player-ctn" data-aos="fade-up" data-aos-duration="1000">
              <div class="audio-run">
                <div
                  class="parallax"
                  style="background-image: url{{ asset('assets/img/audio.webp') }}"
                ></div>

                <div class="btn-ctn">
                  <div
                    class="btn-action first-btn next-prev"
                    onclick="previous()"
                  >
                    <div id="btn-faws-back">
                      <i class="fas fa-step-backward"></i>
                    </div>
                  </div>

                  <div class="btn-action" onclick="toggleAudio()">
                    <div id="btn-faws-play-pause">
                      <i class="fas fa-play" id="icon-play"></i>

                      <i
                        class="fas fa-pause"
                        id="icon-pause"
                        style="display: none"
                      ></i>
                    </div>
                  </div>

                  <div class="btn-action next-prev" onclick="next()">
                    <div id="btn-faws-next">
                      <i class="fas fa-step-forward" aria-hidden="true"></i>
                    </div>
                  </div>

                  <div class="btn-mute" id="toggleMute" onclick="toggleMute()">
                    <div id="btn-faws-volume">
                      <i id="icon-vol-up" class="fas fa-volume-up"></i>

                      <i
                        id="icon-vol-mute"
                        class="fas fa-volume-mute"
                        style="display: none"
                      ></i>
                    </div>
                  </div>
                </div>

                <div class="infos-ctn">
                  <div class="timer">00:00</div>

                  <div class="title"></div>

                  <div class="duration">00:00</div>
                </div>

                <div id="myProgress">
                  <div id="myBar"></div>
                </div>
              </div>

              <div
                class="playlist-ctn"
                data-aos="fade-up"
                data-aos-duration="1500"
              ></div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center loadmore">
          <a href="JavaScript:void(0)" class="theme-btn">View All Playlist</a>
        </div>
      </div>
    </section>

    <!-- Live Stream End -->

    <!-- Events Carousal Start -->

    <section class="gap events-carousal">
      <div class="container">
        <div class="heading">
          <p>Our Events</p>

          <h2>Don't Miss Your Chance to Get Closer to God</h2>
        </div>
      </div>

      <div class="">
        <div class="events-carousal-slider">
          <div>
            <div class="event">
              <img src="{{ asset('assets/img/events-img.webp') }}" alt="Event Image 2" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}"
                    >Morning Glory</a
                  >
                </h4>

                <ul>
                  <li>
                    <img
                      src="{{ asset('assets/img/calendar.svg') }}"
                      alt="calendar 2"
                    />Thursday, June 4, 2020
                  </li>

                  <li>
                    <img src="{{ asset('assets/img/clock.svg') }}" alt="clock 2" />1:00 pm -
                    2:00 pm
                  </li>
                </ul>

                <a class="theme-btn" href="JavaScript:void(0)">View Event Details</a>
              </div>
            </div>
          </div>

          <div>
            <div class="event">
              <img src="{{ asset('assets/img/event-img-1.webp') }}" alt="Event Image 3" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}"
                    >Prayer Rain</a
                  >
                </h4>

                <ul>
                  <li>
                    <img
                      src="{{ asset('assets/img/calendar.svg') }}"
                      alt="calendar 3"
                    />Thursday, June 4, 2020
                  </li>

                  <li>
                    <img src="{{ asset('assets/img/clock.svg') }}" alt="clock 3" />1:00 pm -
                    2:00 pm
                  </li>
                </ul>
                <a class="theme-btn" href="JavaScript:void(0)">View Event Details</a>
              </div>
            </div>
          </div>

          <div>
            <div class="event">
              <img src="{{ asset('assets/img/events-img-2.webp') }}" alt="Event Image 4" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}"
                    >Morning Glory</a
                  >
                </h4>

                <ul>
                  <li>
                    <img
                      src="{{ asset('assets/img/calendar.svg') }}"
                      alt="calendar 4"
                    />Thursday, June 4, 2020
                  </li>

                  <li>
                    <img src="{{ asset('assets/img/clock.svg') }}" alt="clock 4" />1:00 pm -
                    2:00 pm
                  </li>
                </ul>
				<a class="theme-btn" href="JavaScript:void(0)">View Event Details</a>
              </div>
            </div>
          </div>

          <div>
            <div class="event">
              <img src="{{ asset('assets/img/event-img-3.webp') }}" alt="Event Image 5" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}"
                    >Prayer Rain</a
                  >
                </h4>

                <ul>
                  <li>
                    <img
                      src="{{ asset('assets/img/calendar.svg') }}"
                      alt="calendar 5"
                    />Thursday, June 4, 2020
                  </li>

                  <li>
                    <img src="{{ asset('assets/img/clock.svg') }}" alt="clock 5" />1:00 pm -
                    2:00 pm
                  </li>
				  <a class="theme-btn" href="JavaScript:void(0)">View Event Details</a>
                </ul>
              </div>
            </div>
          </div>

          <div>
            <div class="event">
              <img src="{{ asset('assets/img/events-img.webp') }}" alt="Event Image 6" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}"
                    >Prayer Rain</a
                  >
                </h4>

                <ul>
                  <li>
                    <img
                      src="{{ asset('assets/img/calendar.svg') }}"
                      alt="calendar 6"
                    />Thursday, June 4, 2020
                  </li>

                  <li>
                    <img src="{{ asset('assets/img/clock.svg') }}" alt="clock 6" />1:00 pm -
                    2:00 pm
                  </li>
                </ul>
				<a class="theme-btn" href="JavaScript:void(0)">View Event Details</a>
              </div>
            </div>
          </div>

          <div>
            <div class="event">
              <img src="{{ asset('assets/img/event-img-1.webp') }}" alt="Event Image 7" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}"
                    >Join us every wednesday for prayers</a
                  >

                </h4>

                <ul>
                  <li>
                    <img
                      src="{{ asset('assets/img/calendar.svg') }}"
                      alt="calendar 7"
                    />Thursday, June 4, 2020
                  </li>

                  <li>
                    <img src="{{ asset('assets/img/clock.svg') }}" alt="clock 7" />1:00 pm -
                    2:00 pm
                  </li>
                </ul>
				<a class="theme-btn" href="JavaScript:void(0)">View Event Details</a>
              </div>
            </div>
          </div>

          <div>
            <div class="event">
              <img src="{{ asset('assets/img/events-img-2.webp') }}" alt="Event Image 8" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}"
                    >Join us every wednesday for prayers</a
                  >
                </h4>

                <ul>
                  <li>
                    <img
                      src="{{ asset('assets/img/calendar.svg') }}"
                      alt="calendar 8"
                    />Thursday, June 4, 2020
                  </li>

                  <li>
                    <img src="{{ asset('assets/img/clock.svg') }}" alt="clock 8" />1:00 pm -
                    2:00 pm
                  </li>
                </ul>

                <a class="theme-btn" href="JavaScript:void(0)">View Event Details</a>
              </div>
            </div>
          </div>

          <div>
            <div class="event">
              <img src="{{ asset('assets/img/event-img-3.webp') }}" alt="Event Image 9" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}"
                    >Join us every wednesday for prayers</a
                  >
                </h4>

                <ul>
                  <li>
                    <img
                      src="{{ asset('assets/img/calendar.svg') }}"
                      alt="calendar 9"
                    />Thursday, June 4, 2020
                  </li>

                  <li>
                    <img src="{{ asset('assets/img/clock.svg') }}" alt="clock 9" />1:00 pm -
                    2:00 pm
                  </li>
                </ul>
				<a class="theme-btn" href="JavaScript:void(0)">View Event Details</a>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Events Carousal End -->


    <!-- Blog Start -->

    <section class="gap blog">
      <div class="container">
        <div class="heading">
          <img src="{{ asset('assets/img/heading-img.webp') }}" alt="Heading Image 5" />

          <p>Scandoulous Things Jesus did in his Ministry</p>

          <h2>Recent Devotions</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="blog-meta"
              data-aos="fade-up"
              data-aos-delay="400"
              data-aos-duration="600"
            >
              <figure>
                <img
                  class="img-fluid"
                  src="{{ asset('assets/img/blog-img.webp') }}"
                  alt="Blog image 1"
                />
              </figure>

              <ul>
                <li class="date">21 Dec, 2021</li>
              </ul>

              <a href="{{ route('devotionals') }}" class="font-bold"
                >Public Health By Allowing California Order</a
              >

              <p>
                Alienum phaedrum toquatoeu, vis detraxit iculis eiex petenis in
                mei Mei an peri sl gra an peri sl graecis vix apernihil.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="blog-meta"
              data-aos="fade-up"
              data-aos-delay="500"
              data-aos-duration="900"
            >
              <figure>
                <img
                  class="img-fluid"
                  src="{{ asset('assets/img/blog-img-2.webp') }}"
                  alt="Blog image 2"
                />
              </figure>

              <ul>
                <li class="date">21 Dec, 2021</li>
              </ul>

              <a href="{{ route('devotionals') }}" class="font-bold"
                >Public Health By Allowing California Order</a
              >

              <p>
                Alienum phaedrum toquatoeu, vis detraxit iculis eiex petenis in
                mei Mei an peri sl gra an peri sl graecis vix apernihil.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="blog-meta"
              data-aos="fade-up"
              data-aos-delay="700"
              data-aos-duration="1000"
            >
              <figure>
                <img
                  class="img-fluid"
                  src="{{ asset('assets/img/blog-img-3.webp') }}"
                  alt="Blog image 3"
                />
              </figure>

              <ul>
                <li class="date">21 Dec, 2021</li>
              </ul>

              <a href="{{ route('devotionals') }}" class="font-bold"
                >Public Health By Allowing California Order</a
              >

              <p>
                Alienum phaedrum toquatoeu, vis detraxit iculis eiex petenis in
                mei Mei an peri sl gra an peri sl graecis vix apernihil.
              </p>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center loadmore">
          <a href="{{ route('devotional') }}" class="theme-btn">View All Devotions</a>
        </div>
      </div>
    </section>

    <!-- Blog End -->


    <!-- Footer One Start -->

    <footer class="gap footer-one no-bottom green-overlay">
      <div
        class="parallax"
        style="background-image: url({{ asset('assets/img/footer-bg.webp') }})"
      ></div>

      <div class="container">
        <div class="row part-one">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <a href="{{ route('index') }}">
              <img
                class="footer-logo"
                src="{{ asset('assets/img/church-logo.png') }}"
                alt="footer logo"
              />
            </a>

            <p class="text-white">
				CHURCH AUDITORIUM: PAMOR CENTER, Interbua
				Roundabout, by First Bank Plc, Asaba, Delta State.
            </p>

            <div class="footer-contact">
              <p class="text-white">
                <span class="theme-clr">Telephone:</span> +2348146046680
              </p>

              <p class="text-white">
                <span class="theme-clr">Telephone:</span> +2348053715200
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <h2 class="text-white">Quick Links</h2>

            <ul class="quick-links">
              <li><a href="{{ route('sermon') }}">Sermons & Exhortations</a></li>

              <li><a href="{{ route('our-ministries') }}">Our Ministries</a></li>

              <li><a href="{{ route('event') }}">Our Events</a></li>

              <li><a href="{{ route('devotional') }}">Devotionals</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <h2 class="text-white">Recent Events</h2>

            <ul class="footer-events">
              <li>
                <figure>
                  <img src="{{ asset('assets/img/f-event-2.webp') }}" alt="Event Image" />
                </figure>

                <div>
                  <a href="{{ route('events') }}"
                    >Domestic Violence and Impact on Ministry</a
                  >

                  <p class="post-date">Thrusday, june 4, 2021</p>
                </div>
              </li>

              <li>
                <figure>
                  <img src="{{ asset('assets/img/f-event.webp') }}" alt="Event Image 2" />
                </figure>

                <div>
                  <a href="{{ route('events') }}"
                    >Support Groups: May the God Be with</a
                  >

                  <p class="post-date">Thrusday, june 4, 2021</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="copy-right">
          <div class="social">
            <ul class="social-medias">
              <li>
                <a href="JavaScript:void(0)"
                  ><img src="{{ asset('assets/img/facebook.svg') }}" alt="facebook"
                /></a>
              </li>

              <li>
                <a href="JavaScript:void(0)"
                  ><img src="{{ asset('assets/img/twitter.svg') }}" alt="twitter"
                /></a>
              </li>

              <li>
                <a href="JavaScript:void(0)"
                  ><img src="{{ asset('assets/img/instagram.svg') }}" alt="instagram"
                /></a>
              </li>
            </ul>
          </div>

          <div class="footer-rights">
            <p class="text-white">
              © Copyright <span>2024 Worship Arcade</span>. All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Footer One End -->

    <!-- Scroll to top -->

    <button id="scrollTop" class="scrollTopStick">
      <svg viewBox="0 0 490.523 490.523" fill="#fff" height="15">
        <path
          style="fill: #7D0202"
          d="M487.411,355.047L252.744,120.38c-4.165-4.164-10.917-4.164-15.083,0L2.994,355.047 c-4.093,4.237-3.976,10.99,0.262,15.083c4.134,3.993,10.687,3.993,14.821,0l227.115-227.115l227.115,227.136 c4.237,4.093,10.99,3.976,15.083-0.261c3.993-4.134,3.993-10.688,0-14.821L487.411,355.047z"
        ></path>
        <path
          d="M479.859,373.266c-2.831,0.005-5.548-1.115-7.552-3.115L245.192,143.015L18.077,370.151 c-4.237,4.093-10.99,3.976-15.083-0.262c-3.993-4.134-3.993-10.687,0-14.821l234.667-234.667c4.165-4.164,10.917-4.164,15.083,0 l234.667,234.667c4.159,4.172,4.148,10.926-0.024,15.085C485.388,372.146,482.681,373.265,479.859,373.266z"
        ></path>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
      </svg>
    </button>

    <!-- Donation Modal -->
    <div
      class="modal fade donation-model"
      id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Give Now</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="donation-data">
              <h2>Give towards our building Project</h2>

              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                totam rem ape eaque.
              </p>

              <div class="donation-form">
                <div class="custom-donation-amount">
                  <span class="text-white">N</span>
                  <input
                    class="donated_amount"
                    type="number"
                    placeholder="Custom Amount"
                  />
                </div>

                <ul class="list-unstyled aos-init aos-animate">
                  <li>
                    <a class="donating" href="JavaScript:void(0)"
                      >N<span class="donation_amount">5000</span></a
                    >
                  </li>

                  <li>
                    <a class="donating" href="JavaScript:void(0)"
                      >N<span class="donation_amount">10,000</span></a
                    >
                  </li>

                  <li>
                    <a class="donating" href="JavaScript:void(0)"
                      >N<span class="donation_amount">20,000</span></a
                    >
                  </li>

                  <li>
                    <a class="donating" href="JavaScript:void(0)"
                      >N<span class="donation_amount">30,000</span></a
                    >
                  </li>
                </ul>

                <a class="theme-btn" href="JavaScript:void(0)">Give Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Jquery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- Waypoint -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>

    <!-- Counter -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

    <!-- Slick Slider Js -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!-- Animate on scroll Js -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>

    <!-- Fontawesome Js -->
    <script src="{{ asset('assets/js/fontawesome.js') }}"></script>

    <!-- Fancybox Js -->
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>

    <!-- Bootstrap Js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Custom Js -->

    <script src="{{ asset('assets/js/custom.js') }}"></script>
  </body>
</html>
