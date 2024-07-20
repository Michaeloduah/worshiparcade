@extends('layouts.header')

@section('content')

    <!-- Sermon Detail Start -->

    <section class="gap sermon-detail">
      <div class="container">
        <div class="row">
          <div class="sermon-meta w-85 m-auto">
            <ul class="meta justify-content-start">
              <li>Rev Peter Mayah</li>

              <li>Nov 19, 2021</li>
            </ul>

            <div
              class="sermon-box d-flex justify-content-between align-items-center"
            >
              <h2 class="w-60">Spiritually Reborn </h2>

              <ul class="sermon-icons d-flex">
                <li>
                  <a
                    class="flex-all green-bg rounded-circle s_audio2"
                    href="JavaScript:void(0)"
                    ><svg
                      viewBox="-20 0 352 352.137"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m61.753906 352.132812c34.050782-.039062 61.648438-27.632812 61.683594-61.683593v-147.257813c23.082031-35.71875 66.914062-51.996094 107.714844-39.996094 40.796875 11.996094 68.84375 49.40625 68.914062 91.933594 0 3.316406 2.6875 6 6 6 3.316406 0 6-2.683594 6-6 0-107.59375-87.308594-195.128906-194.628906-195.128906-3.3125 0-6 2.6875-6 6v247.949219c-17.214844-23.433594-48.464844-31.65625-74.988281-19.734375-26.519531 11.925781-41.109375 40.757812-35.007813 69.1875 6.101563 28.433594 31.234375 48.742187 60.3125 48.734375zm0 0"
                      /></svg
                  ></a>
                </li>

                <li>
                  <a
                    class="flex-all green-bg rounded-circle s_video2"
                    href="JavaScript:void(0)"
                    ><svg
                      id="playgdfg-btn"
                      enable-background="new 0 0 494.942 494.942"
                      viewBox="0 0 494.942 494.942"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="m35.353 0 424.236 247.471-424.236 247.471z"
                      /></svg
                  ></a>
                </li>


              </ul>
            </div>
          </div>
          <div class="sermon-img">
            <div class="sermon-featured-img sermon-media">
              <img
                class="img-fluid w-100"
                src="{{ asset('assets/img/event1.jpeg') }}"
                alt="Sermon"
              />
              <video controls>
                <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4" />

                Your browser does not support the video tag.
              </video>

              <div class="audio-playerstyle2">
                <audio controls>
                  <!-- <source src="audio.ogg" type="audio/ogg"> -->

                  <source src="{{ asset('assets/music/audio-2.mp3') }}" type="audio/mpeg" />

                  Your browser does not support the audio element.
                </audio>
              </div>
            </div>
          </div>
          <div class="content w-85 m-auto">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis a aliqua. Ut enim ad minim
              veniam, quis nostrud exercitation ullamco laboris ni si ut aliquip
              ex eu fugiat nulla pariatur sint occaecat cupidatat non proident,
              sunt in culpa qu dolor in reprehenderit in voluptate velit esse
              cillum dolore eu f nulla pariatur. Excepteur sint occaecat
              cupidatat non pr exercitation ullamco laboris nisi ut aliqu
              exercitation ullam oident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.
            </p>

            <p>
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
              ullamco laboris ni si ut aliquip ex eu fugiat nulla cepteur sint
              occaecat cupidatat non proident, sunt in culpa qui officia
              deserunt mollit anim id est laborum.
            </p>

            <div class="gallery">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <figure>
                    <img
                      class="img-fluid w-100"
                      src="{{ asset('assets/img/event1.jpeg') }}"
                      alt="event-gal-1"
                    />
                    <a
                      data-fancybox="gallery"
                      href="{{ asset('assets/img/event2.jpeg') }}"
                      ></a>
                  </figure>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                  <figure>
                    <img
                      class="img-fluid w-100"
                      src="{{ asset('assets/img/event1.jpeg') }}"
                      alt="event-gal-2"
                    />
                    <a
                      data-fancybox="gallery"
                      href="{{ asset('assets/img/event2.jpeg') }}"
                      ></a>
                  </figure>
                </div>
              </div>
            </div>

            <p>
              sint occaecat cupidatat non proident, sunt in culpa qu dolor in
              reprehenderit in voluptate velit esse cillum dolore eu nulla
              pariatur. Excepteur sint occaecat cupidatat non pr exercitation
              ullamco laboris nisi ut aliqu exercitation ullam oident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <ul class="church-list">
              <li>Consectetur adipiscing elit vtae elit libero</li>

              <li>Nullam id dolor id eget lacinia odio posuere erat a ante</li>

              <li>Integer posuere erat dapibus posuere velit</li>
            </ul>
          </div>

              <!-- Sermon Detail End -->
@endsection
