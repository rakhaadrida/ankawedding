<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Anka Wedding </title>
    <link rel="stylesheet" href="{{ asset('assets/libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libraries/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Muli:wght@300;400;500;600;700;800&family=Pacifico&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    <main>
{{--        <audio controls autoplay>--}}
{{--            <source src="https://open.spotify.com/embed/track/0xiHNGGiSfrFfOJZGpxpJY?utm_source=generator" />--}}
{{--        </audio>--}}
{{--        <embed src="https://www.youtube.com/watch?v=BjN21UNKIWQ" loop="true" autostart="true" width="2" height="0">--}}
        <section class="section-header" id="header">
            <div class="container">
                <div class="section-header-title">
                    <div class="col-12 col-lg-4 col-md-6 text-center">
                        <h6>
                            WE ARE GETTING MARRIED
                        </h6>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 text-center">
                        <h4>Anisa <span class="and-symbol">&</span> Rakha</h4>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 text-center">
                        <h5>
                            26 Februari 2022
                        </h5>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-prayer" id="prayer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 text-center section-prayer-greetings">
                        <p>Assalamualaikum warahmatullahi wabarakatuh...</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 text-center section-prayer-prayings">
                        <p>“Mahasuci (Allah) yang telah menciptakan semuanya berpasang-pasangan, baik dari apa yang ditumbuhkan oleh bumi dan dari diri mereka sendiri, maupun dari apa yang tidak mereka ketahui.”</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-couple-info" id="couple-info">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center section-couple-info-title">
                        <h3 id="coupeInfoTitle">The Wedding Of</h3>
                    </div>
                </div>
                <div class="row justify-content-center section-couple-info-detail">
                    <div class="col-5 col-lg-5 text-center section-couple-info-detail-both">
                        <img src="{{ asset('assets/images/anisa.jpg') }}" class="couple-foto" />
                        <div class="couple-both-detail">
                            <h3>Anisa</h3>
                            <h6>Anisa Bekti Lestari S.Kom</h6>
                            <p>Putri Pertama dari Keluarga<br>Alm Bapak Supardi<br>& Ibu Winarni</p>
                            <a href="https://www.instagram.com/anisabekti/" target="_blank" class="btn btn-light btn-outline-dark btn-instagram-couple">
                                <i class="fa fa-instagram fa-lg mb-1"></i>
                                Instagram
                            </a>
                        </div>
                    </div>
                    <div class="col-2 col-lg-2 text-center section-couple-info-detail-icon">
                        <img src="{{ asset('assets/icons/just-married.png') }}" class="icon-married" />
                    </div>
                    <div class="col-5 col-lg-5 text-center section-couple-info-detail-both">
                        <img src="{{ asset('assets/images/rakha.jpg') }}" class="couple-foto" />
                        <div class="couple-both-detail">
                            <h3>Rakha</h3>
                            <h6>Rakha' Adrida Bagaspati S.Kom</h6>
                            <p>Putra Kedua dari Keluarga<br>Bapak Bambang Adriyanto<br>& Ibu Ermida</p>
                            <a href="https://www.instagram.com/rakhaadrida/" target="_blank" class="btn btn-light btn-outline-dark btn-instagram-couple">
                                <i class="fa fa-instagram fa-lg mb-1"></i>
                                Instagram
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-engagement-video" id="engagement-video">
            <div class="container">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kZesBMZOFxg" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>
        <section class="section-wedding-prayer" id="wedding-prayer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 text-center section-wedding-prayer-title">
                        <h3>Doa Pernikahan</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 text-center section-wedding-prayer-prayings">
                        <p>“ Dan Diantara tanda-tanda  kekuasaan Allah, ialah Diciptakan-Nya  untukmu pasangan hidup<br>dari jenismu sendiri  supaya kamu merasa tentram disamping-Nya.<br>dan dijadikan-Nya rasa kasih sayang  diantara kamu.<br>Sesungguhnya yang demikian itu menjadi  bukti kekuasaan Allah bagi kaum yang berfikir. “</p>
                        <h6>( QS. Ar- Rum 21 )</h6>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-countdown" id="countdown">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-2 col-lg-2 col-md-2 col-sm-2 text-center section-countdown-days">
                        <h3 id="daysCountdown">00</h3>
                        <p>Hari</p>
                    </div>
                    <div class="col-2 col-lg-2 col-md-2 col-sm-2 text-center section-countdown-hours">
                        <h3 id="hoursCountdown">00</h3>
                        <p>Jam</p>
                    </div>
                    <div class="col-2 col-lg-2 col-md-2 col-sm-2 text-center section-countdown-minutes">
                        <h3 id="minutesCountdown">00</h3>
                        <p>Menit</p>
                    </div>
                    <div class="col-2 col-lg-2 col-md-22 col-sm-2 text-center section-countdown-seconds">
                        <h3 id="secondsCountdown">00</h3>
                        <p>Detik</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-light btn-outline-dark btn-save-the-date">
                        <img src="{{ asset('assets/icons/love.png') }}" class="icon-save-date">
                        Save The Date
                    </button>
                </div>
            </div>
        </section>
        <section class="section-middle-image" id="middle-image">
            <div class="container">
            </div>
        </section>
        <section class="section-wedding-info" id="wedding-info">
            <div class="container">
                <div class="row justify-content-center section-wedding-info-detail">
                    <div class="col-4 col-lg-4 text-center section-wedding-info-detail-both">
                        <h2>Akad</h2>
                        <div class="wedding-both-detail">
                            <h6>Sabtu, 26 Februari 2022<br>Jakarta Selatan, Indonesia<br>08.00 - 09.00 WIB</h6>
                            <p>*sesuai dengan protokol kesehatan,<br>Akad nikah hanya dihadiri<br>keluarga dan kerabat terdekat</p>
                        </div>
                    </div>
                    <div class="col-3 col-lg-2 text-center section-wedding-info-detail-icon">
                        <img src="{{ asset('assets/icons/wedding-location.png') }}" class="wedding-location-icon" />
                    </div>
                    <div class="col-4 col-lg-4 text-center section-wedding-info-detail-both">
                        <h2>Resepsi</h2>
                        <div class="wedding-both-detail">
                            <h6>Sabtu, 26 Februari 2022<br>Jakarta Selatan, Indonesia<br>11.00 - 13.00 WIB</h6>
                            <p>*sesuai dengan protokol kesehatan</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center section-wedding-info-address">
                    <div class="col-10 text-center">
                        <h4>Masjid Agung Al-Azhar (Aula Buya Hamka)<br>Jl. Sisingamangaraja No.1, RT.2/RW.1, Selong, Kec. Kby. Baru, Kota Jakarta Selatan,<br>Daerah Khusus Ibukota Jakarta 12110</h4>
                    </div>
                </div>
                <div class="row justify-content-center section-wedding-info-button">
                    <div class="col-4 col-lg-4 text-center section-wedding-info-detail-button-both">
                        <a href="https://www.google.com/maps/place/Al-Azhar+Great+Mosque/@-6.2350882,106.7969073,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f141e9a9d2f3:0x2974690675d2098a!8m2!3d-6.23509!4d106.7990877" target="_blank"
                           class="btn btn-light btn-outline-dark btn-check-location">
                            <img src="{{ asset('assets/icons/location.png') }}" class="icon-location">
                            Lihat Lokasi
                        </a>
                    </div>
                    <div class="col-2 col-lg-2 text-center">
                    </div>
                    <div class="col-4 col-lg-4 text-center section-wedding-info-detail-button-both">
                        <a href="https://www.instagram.com/anisabekti/" target="_blank" class="btn btn-light btn-outline-dark btn-live-streaming">
                            <img src="{{ asset('assets/icons/ring.png') }}" class="icon-streaming">
                            Live Streaming
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-covid-protocol" id="covid-protocol">
            <div class="container">
                <div class="row justify-content-center section-covid-protocol-detail">
                    <div class="col-4 col-lg-4 col-md-4 text-center">
                        <img src="{{ asset('assets/icons/prokes-1.png') }}" class="protocol-icon" />
                        <p>Membawa dan Menggunakan Masker</p>
                    </div>
                    <div class="col-4 col-lg-4 col-md-4 text-center">
                        <img src="{{ asset('assets/icons/prokes-2.png') }}" class="protocol-icon" />
                        <p>Mencuci Tangan dengan Sabun / Hand Sanitizer</p>
                    </div>
                    <div class="col-4 col-lg-4 col-md-4 text-center">
                        <img src="{{ asset('assets/icons/prokes-3.png') }}" class="protocol-icon" />
                        <p>Cek Suhu Tubuh</p>
                    </div>
                    <div class="col-4 col-lg-4 col-md-4 text-center">
                        <img src="{{ asset('assets/icons/prokes-4.png') }}" class="protocol-icon" />
                        <p>Menjaga Jarak Aman</p>
                    </div>
                    <div class="col-4 col-lg-4 col-md-4 text-center">
                        <img src="{{ asset('assets/icons/prokes-5.png') }}" class="protocol-icon" />
                        <p>Tidak Melakukan Kontak Fisik</p>
                    </div>
                    <div class="col-4 col-lg-4 col-md-4 text-center">
                        <img src="{{ asset('assets/icons/prokes-6.png') }}" class="protocol-icon" />
                        <p>Dianjurkan Untuk Tidak Membawa Anak Kecil</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 text-center section-covid-protocol-title">
                        <h3>Protokol Kesehatan</h3>
                        <h6>Tanpa mengurangi rasa hormat, dikarenakan situasi yang sedang terjadi ditengah pandemi covid-19 ini, kami memohon maaf karena acara akan diselenggarakan sesuai peraturan dan himbauan pemerintah.</h6>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-couple-gallery" id="couple-gallery">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-3 text-center section-couple-gallery-title">
                        <div class="row">
                            <img src="{{ asset('assets/icons/gallery.png') }}" class="gallery-icon" />
                            <h3>Galeri</h3>
                        </div>
                        <h6>Anisa <span class="and-symbol">&</span> Rakha</h6>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-6 col-sm-6 text-center">
                        <img src="{{ asset('assets/images/gallery-1.jpg') }}" class="img-fluid gallery-photo-one"/>
                    </div>
                    <div class="col-6 col-lg-6 col-sm-6 text-center">
                        <img src="{{ asset('assets/images/gallery-2.jpg') }}" class="img-fluid gallery-photo-one" />
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-6 col-sm-6 text-center">
                        <img src="{{ asset('assets/images/gallery-3.jpg') }}" class="img-fluid gallery-photo-two-left"/>
                    </div>
                    <div class="col-6 col-lg-6 col-sm-6 text-center section-gallery-photo-two-right">
                        <img src="{{ asset('assets/images/gallery-4.jpg') }}" class="img-fluid gallery-photo-two-right-one" />
                        <img src="{{ asset('assets/images/gallery-5.jpg') }}" class="img-fluid gallery-photo-two-right-two" />
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-6 col-sm-6 text-center section-gallery-photo-three-left">
                        <img src="{{ asset('assets/images/gallery-6.jpg') }}" class="img-fluid gallery-photo-three-left-one" />
                        <img src="{{ asset('assets/images/gallery-7.jpg') }}" class="img-fluid gallery-photo-three-left-two" />
                    </div>
                    <div class="col-6 col-lg-6 col-sm-6 text-center section-gallery-photo-three-right">
                        <img src="{{ asset('assets/images/gallery-8.jpg') }}" class="img-fluid gallery-photo-three-right"/>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-6 col-sm-6 text-center section-gallery-photo-three-left">
                        <img src="{{ asset('assets/images/gallery-9.jpg') }}" class="img-fluid gallery-photo-four-left" />
                    </div>
                    <div class="col-6 col-lg-6 col-sm-6 text-center section-gallery-photo-three-right">
                        <img src="{{ asset('assets/images/gallery-10.jpg') }}" class="img-fluid gallery-photo-four-right"/>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-6 col-sm-6 text-center section-gallery-photo-three-left">
                        <img src="{{ asset('assets/images/gallery-11.jpg') }}" class="img-fluid gallery-photo-five-left" />
                    </div>
                    <div class="col-6 col-lg-6 col-sm-6 text-center section-gallery-photo-three-right">
                        <img src="{{ asset('assets/images/gallery-12.jpg') }}" class="img-fluid gallery-photo-five-right"/>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 text-center section-gallery-button-gift">
                        <a href="{{ route('gift') }}" class="btn btn-light btn-outline-dark btn-send-gift">
                            <img src="{{ asset('assets/icons/gift.png') }}" class="icon-gift">
                            Kirim Hadiah
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-bottom-image" id="bottom-image">
            <div class="container">
            </div>
        </section>
        <section class="section-wedding-message-title" id="wedding-message-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h3>Ucapkan Sesuatu</h3>
                        <h6>Silahkan Kirimkan Doa & Ucapan Kepada Kedua Mempelai</h6>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-wedding-message-content" id="wedding-message-content">
            <div class="container">
                <div class="row justify-content-center section-wedding-message-detail">
                    <div class="col-2 col-lg-2 text-center">
                        <img src="{{ asset('assets/icons/bird-message.png') }}" class="bird-message-icon" />
                    </div>
                    <div class="col-10 col-lg-10 text-center">
                        <div class="form-group row">
                            <input type="text" name="name" class="form-control input-name" placeholder="Nama Anda">
                            <textarea rows="4" name="message" class="form-control input-message" placeholder="Doa & Ucapan"></textarea>
                        </div>
                    </div>
                    <div class="col-12 text-right">
                        <button type="button" class="btn btn-light btn-outline-dark btn-submit-message">
                            <img src="{{ asset('assets/icons/bird.png') }}" class="icon-submit">
                            Kirim
                        </button>
                    </div>
                    <div class="col-2 col-lg-2">
                        <img src="{{ asset('assets/icons/bird.png') }}" class="bird-message-one-icon" />
                    </div>
                    <div class="col-10 col-lg-10 text-center">
                        <div class="form-group row">
                            <textarea rows="3" name="allMessage" class="form-control input-all-message" placeholder="Okeeee"></textarea>
                        </div>
                    </div>
                    <div class="col-2 col-lg-2">
                        <img src="{{ asset('assets/icons/bird.png') }}" class="bird-message-one-icon" />
                    </div>
                    <div class="col-10 col-lg-10 text-center">
                        <div class="form-group row">
                            <textarea rows="3" name="allMessage" class="form-control input-all-message" placeholder="Bangettttt"></textarea>
                        </div>
                    </div>
                    <div class="col-2 col-lg-2">
                        <img src="{{ asset('assets/icons/bird.png') }}" class="bird-message-one-icon" />
                    </div>
                    <div class="col-10 col-lg-10 text-center">
                        <div class="form-group row">
                            <textarea rows="3" name="allMessage" class="form-control input-all-message" placeholder="Nihhhh"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-footer" id="footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 col-md-12 text-center section-footer-title">
                        <div class="row justify-content-center">
                            <img src="{{ asset('assets/icons/bride.png') }}" class="footer-icon" />
                            <h3>Anisa <span class="and-symbol">&</span> Rakha</h3>
                        </div>
                        <p>Copyright sakhaproject.co - All Rights Reserved<br>@anisabekti @rakhaadrida</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('assets/libraries/jquery/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/libraries/bootstrap/js/bootstrap.js') }}"></script>

    <script type="text/javascript">
        // Set the date we're counting down to
        var countDownDate = new Date("Feb 26, 2022 08:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("daysCountdown").innerHTML = days
            document.getElementById("hoursCountdown").innerHTML = hours
            document.getElementById("minutesCountdown").innerHTML = minutes
            document.getElementById("secondsCountdown").innerHTML = seconds;

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("daysCountdown").innerHTML = "00";
                document.getElementById("hoursCountdown").innerHTML = "00";
                document.getElementById("minutesCountdown").innerHTML = "00";
                document.getElementById("secondsCountdown").innerHTML = "00";
            }
        }, 1000);

        const zoomElement = document.getElementById("#coupleInfoTitle");
        let zoom = 1;
        const ZOOM_SPEED = 0.1;

        document.addEventListener("wheel", function(e) {

            if(e.deltaY > 0){
                zoomElement.style.transform = `scale(${zoom += ZOOM_SPEED})`;
            }else{
                zoomElement.style.transform = `scale(${zoom -= ZOOM_SPEED})`;  }

        });
    </script>
</body>
</html>
