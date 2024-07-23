@extends('layouts.header')


@section('content')
<!-- Banner Start -->

    <section class="banner position-relative">
      <div
        class="parallax"
        style="background-image: url('{{ asset('assets/img/hero-image.png') }}');"
      ></div>

      <div class="banner-data text-center">
        <h2 class="text-white font-bold">Events</h2>

      </div>
    </section>

    <!-- Banner End -->

    <!-- Contact Us Start -->

    <section class="gap events">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="event">
              <img src="{{ asset('assets/img/event1.jpeg') }}" alt="Event Image 1" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}" tabindex="0"
                    >Join Us Online Every Wednesday</a
                  >
                </h4>

                <ul>
                  <li>
                    <img
                      src="{{ asset('assets/img/calendar.svg') }}"
                      alt="calendar 1"
                    />Thursday, June 4, 2020
                  </li>

                  <li>
                    <img src="{{ asset('assets/img/clock.svg') }}" alt="clock 1" />1:00 pm -
                    2:00 pm
                  </li>
                </ul>

                <a class="theme-btn" href="JavaScript:void(0)" tabindex="0"
                  >View Event Details</a
                >
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="event">
              <img src="{{ asset('assets/img/event1.jpeg') }}" alt="Event Image 2" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}" tabindex="0"
                    >Join Us Online Every Wednesday</a
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

                <a class="theme-btn" href="JavaScript:void(0)" tabindex="0"
                  >View Event Details</a
                >
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="event">
              <img src="{{ asset('assets/img/event2.jpeg') }}" alt="Event Image 3" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}" tabindex="0"
                    >Join Us Online Every Wednesday</a
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

                <a class="theme-btn" href="JavaScript:void(0)" tabindex="0"
                  >View Event Details</a
                >
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="event">
              <img src="{{ asset('assets/img/event1.jpeg') }}" alt="Event Image 4" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}" tabindex="0"
                    >Join Us Online Every Wednesday</a
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

                <a class="theme-btn" href="JavaScript:void(0)" tabindex="0"
                  >View Event Details</a
                >
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="event">
              <img src="{{ asset('assets/img/event2.jpeg') }}" alt="Event Image 5" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}" tabindex="0"
                    >Join Us Online Every Wednesday</a
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
                </ul>

                <a class="theme-btn" href="JavaScript:void(0)" tabindex="0"
                  >View Event Details</a
                >
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="event">
              <img src="{{ asset('assets/img/event1.jpeg') }}" alt="Event Image 6" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}" tabindex="0"
                    >Join Us Online Every Wednesday</a
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

                <a class="theme-btn" href="JavaScript:void(0)" tabindex="0"
                  >View Event Details</a
                >
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="event">
              <img src="{{ asset('assets/img/event2.jpeg') }}" alt="Event Image 7" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}" tabindex="0"
                    >Join Us Online Every Wednesday</a
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

                <a class="theme-btn" href="JavaScript:void(0)" tabindex="0"
                  >View Event Details</a
                >
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="event">
              <img src="{{ asset('assets/img/event1.jpeg') }}" alt="Event Image 8" />

              <div class="event-data">
                <p class="text-white">Church Auditorium</p>

                <h4>
                  <a href="{{ route('events') }}" tabindex="0"
                    >Join Us Online Every Wednesday</a
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

                <a class="theme-btn" href="JavaScript:void(0)" tabindex="0"
                  >View Event Details</a
                >
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Contact Us End -->
@endsection