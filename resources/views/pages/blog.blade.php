@extends('layouts.header')


@section('content')    <!-- Banner Start -->

    <section class="banner position-relative">
      <div
        class="parallax"
        style="background-image: url('{{ asset('assets/img/hero-image.png') }}');"
      ></div>

      <div class="banner-data text-center">
        <h2 class="text-white font-bold">Devotionals</h2>

       

      </div>
    </section>

    <!-- Banner End -->

    <!-- Contact Us Start -->

    <div class="gap our-blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="blog-meta aos-init aos-animate"
              data-aos="fade-up"
              data-aos-duration="700"
            >
              <figure>
                <img
                  class="img-fluid"
                  src="{{ asset('assets/img/Pst-Peter.jpeg') }}"
                  alt="Blog image"
                />
              </figure>

              <ul>
                <li class="date">21 Dec, 2021</li>

               
              </ul>

              <a href="{{ route('devotionals') }}" class="font-bold"
                >The Grace of God that gives room for access</a
              >

              <p>
                Alienum phaedrum toquatoeu, vis detraxit iculis eiex petenis in
                mei Mei an peri sl gra an peri sl graecis vix apernihil.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="blog-meta aos-init aos-animate"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <figure>
                <img
                  class="img-fluid"
                  src="{{ asset('assets/img/Pst-Peter.jpeg') }}"
                  alt="Blog image 2"
                />
              </figure>

              <ul>
                <li class="date">21 Dec, 2021</li>

              
              </ul>

              <a href="{{ route('devotionals') }}" class="font-bold"
                >The Grace of God that gives room for access</a
              >

              <p>
                Alienum phaedrum toquatoeu, vis detraxit iculis eiex petenis in
                mei Mei an peri sl gra an peri sl graecis vix apernihil.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="blog-meta aos-init aos-animate"
              data-aos="fade-up"
              data-aos-duration="1300"
            >
              <figure>
                <img
                  class="img-fluid"
                  src="{{ asset('assets/img/Pst-Peter.jpeg') }}"
                  alt="Blog image 3"
                />
              </figure>

              <ul>
                <li class="date">21 Dec, 2021</li>

               
              </ul>

              <a href="{{ route('devotionals') }}" class="font-bold"
                >The Grace of God that gives room for access</a
              >

              <p>
                Alienum phaedrum toquatoeu, vis detraxit iculis eiex petenis in
                mei Mei an peri sl gra an peri sl graecis vix apernihil.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="blog-meta aos-init aos-animate"
              data-aos="fade-up"
              data-aos-duration="700"
            >
              <figure>
                <img
                  class="img-fluid"
                  src="{{ asset('assets/img/Pst-Peter.jpeg') }}"
                  alt="Blog image 4"
                />
              </figure>

              <ul>
                <li class="date">21 Dec, 2021</li>

              </ul>

              <a href="{{ route('devotionals') }}" class="font-bold"
                >The Grace of God that gives room for access</a
              >

              <p>
                Alienum phaedrum toquatoeu, vis detraxit iculis eiex petenis in
                mei Mei an peri sl gra an peri sl graecis vix apernihil.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="blog-meta aos-init aos-animate"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <figure>
                <img
                  class="img-fluid"
                  src="{{ asset('assets/img/Pst-Peter.jpeg') }}"
                  alt="Blog image 5"
                />
              </figure>

              <ul>
                <li class="date">21 Dec, 2021</li>

              </ul>

              <a href="{{ route('devotionals') }}" class="font-bold"
                >The Grace of God that gives room for access</a
              >

              <p>
                Alienum phaedrum toquatoeu, vis detraxit iculis eiex petenis in
                mei Mei an peri sl gra an peri sl graecis vix apernihil.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div
              class="blog-meta aos-init aos-animate"
              data-aos="fade-up"
              data-aos-duration="1300"
            >
              <figure>
                <img
                  class="img-fluid"
                  src="{{ asset('assets/img/Pst-Peter.jpeg') }}"
                  alt="Blog image 6"
                />
              </figure>

              <ul>
                <li class="date">21 Dec, 2021</li>

               
              </ul>

              <a href="{{ route('devotionals') }}" class="font-bold"
                >The Grace of God that gives room for access</a
              >

              <p>
                Alienum phaedrum toquatoeu, vis detraxit iculis eiex petenis in
                mei Mei an peri sl gra an peri sl graecis vix apernihil.
              </p>
            </div>
          </div>
        </div>

       
      </div>
    </div>

    <!-- Contact Us End -->

@endsection