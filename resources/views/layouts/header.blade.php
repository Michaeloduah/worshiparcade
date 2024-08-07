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
        <small>Loading</small>
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

    

  



    
    @yield('content')
             

       




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

              <li><a href="{{ route('devotionals') }}">Devotionals</a></li>
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

                  <p class="post-date">Thrusday, june 4, 2023</p>
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

                  <p class="post-date">Thrusday, june 4, 2023</p>
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
