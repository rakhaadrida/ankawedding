<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Anka Wedding </title>
    <link rel="stylesheet" href="{{ asset('assets/libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Muli:wght@300;400;500;600;700;800&family=Pacifico&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    <main>
        <section class="section-header" id="header">
            <div class="container">
                <div class="section-header-title col-12">
                    <h6>
                        WE ARE GETTING MARRIED
                    </h6>
                    <div class="col-3 text-center">
                        <h4>Anisa & Rakha</h4>
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
                        <h3>The Wedding Of</h3>
                    </div>
                </div>
                <div class="row justify-content-center section-couple-info-detail">
                    <div class="col-10 col-lg-4 text-center section-couple-info-detail-both">
                        <img src="{{ asset('assets/images/anisa.jpg') }}" class="couple-foto" />
                        <div class="couple-both-detail">
                            <h3>Anisa</h3>
                            <h6>Anisa Bekti Lestari S.Kom</h6>
                            <p>Putri Pertama dari Keluarga<br>Alm Bapak Supardi<br>& Ibu Winarni</p>
                            <button type="button" class="btn btn-outline-dark btn-instagram-couple">
                                Instagram
                            </button>
                        </div>
                    </div>
                    <div class="col-10 col-lg-2 text-center section-couple-info-detail-icon">
                        <img src="{{ asset('assets/icons/just-married.png') }}" class="couple-girl-foto" />
                    </div>
                    <div class="col-10 col-lg-4 text-center section-couple-info-detail-both">
                        <img src="{{ asset('assets/images/rakha.jpg') }}" class="couple-foto" />
                        <div class="couple-both-detail">
                            <h3>Rakha'</h3>
                            <h6>Rakha' Adrida Bagaspati S.Kom</h6>
                            <p>Putra Kedua dari Keluarga<br>Bapak Bambang Adriyanto<br>& Ibu Ermida</p>
                            <button type="button" class="btn btn-outline-dark btn-instagram-couple">
                                Instagram
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-engagement-video" id="engagement-video">
            <div class="container">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ asset('assets/videos/engagement.mp4') }}" allowfullscreen>
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
                    <div class="col-8 col-lg-2 text-center section-countdown-days">
                        <h3>00</h3>
                        <p>Hari</p>
                    </div>
                    <div class="col-8 col-lg-2 text-center section-countdown-hours">
                        <h3>00</h3>
                        <p>Jam</p>
                    </div>
                    <div class="col-8 col-lg-2 text-center section-countdown-minutes">
                        <h3>00</h3>
                        <p>Menit</p>
                    </div>
                    <div class="col-8 col-lg-2 text-center section-countdown-seconds">
                        <h3>00</h3>
                        <p>Detik</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-outline-dark btn-save-the-date">
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
                    <div class="col-10 col-lg-4 text-center section-wedding-info-detail-both">
                        <h2>Akad</h2>
                        <div class="wedding-both-detail">
                            <h6>Sabtu, 26 Februari 2022<br>Jakarta Selatan, Indonesia<br>08.00 - 09.00 WIB</h6>
                            <p>*sesuai dengan protokol kesehatan,<br>Akad nikah hanya dihadiri<br>keluarga dan kerabat terdekat</p>
                        </div>
                    </div>
                    <div class="col-10 col-lg-2 text-center section-wedding-info-detail-icon">
                        <img src="{{ asset('assets/icons/wedding-location.png') }}" class="wedding-location-icon" />
                    </div>
                    <div class="col-10 col-lg-4 text-center section-wedding-info-detail-both">
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
                    <div class="col-10 col-lg-4 text-center section-wedding-info-detail-button-both">
                        <button type="button" class="btn btn-outline-dark btn-check-location">
                            Lihat Lokasi
                        </button>
                    </div>
                    <div class="col-10 col-lg-2 text-center">
                    </div>
                    <div class="col-10 col-lg-4 text-center section-wedding-info-detail-both">
                        <button type="button" class="btn btn-outline-dark btn-live-streaming">
                            Live Streaming
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-covid-protocol" id="covid-protocol">
            <div class="container">
                <div class="row justify-content-center section-covid-protocol-detail">
                    <div class="col-8 col-lg-4 text-center">
                        <img src="{{ asset('assets/icons/prokes-1.png') }}" class="protocol-icon" />
                        <p>Membawa dan Menggunakan Masker</p>
                    </div>
                    <div class="col-8 col-lg-4 text-center">
                        <img src="{{ asset('assets/icons/prokes-2.png') }}" class="protocol-icon" />
                        <p>Mencuci Tangan dengan Sabun / Hand Sanitizer</p>
                    </div>
                    <div class="col-8 col-lg-4 text-center">
                        <img src="{{ asset('assets/icons/prokes-3.png') }}" class="protocol-icon" />
                        <p>Cek Suhu Tubuh</p>
                    </div>
                    <div class="col-8 col-lg-4 text-center">
                        <img src="{{ asset('assets/icons/prokes-4.png') }}" class="protocol-icon" />
                        <p>Menjaga Jarak Aman</p>
                    </div>
                    <div class="col-10 col-lg-4 text-center">
                        <img src="{{ asset('assets/icons/prokes-5.png') }}" class="protocol-icon" />
                        <p>Tidak Melakukan Kontak Fisik</p>
                    </div>
                    <div class="col-10 col-lg-4 text-center">
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
                        <h6>Anisa <strong>&</strong> Rakha</h6>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-sm-12 text-center">
                        <img src="{{ asset('assets/images/gallery-1.jpg') }}" class="img-fluid gallery-photo-one"/>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-12 text-center section-wedding-prayer-prayings">
                        <img src="{{ asset('assets/images/gallery-2.jpg') }}" class="img-fluid gallery-photo-one" />
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-sm-12 text-center">
                        <img src="{{ asset('assets/images/gallery-3.jpg') }}" class="img-fluid gallery-photo-two-left"/>
                    </div>
                    <div class="col-12 col-lg-6 col-sm-12 text-center section-gallery-photo-two-right">
                        <img src="{{ asset('assets/images/gallery-4.jpg') }}" class="img-fluid gallery-photo-two-right-one" />
                        <img src="{{ asset('assets/images/gallery-5.jpg') }}" class="img-fluid gallery-photo-two-right-two" />
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-sm-12 text-center section-gallery-photo-three-left">
                        <img src="{{ asset('assets/images/gallery-6.jpg') }}" class="img-fluid gallery-photo-three-left-one" />
                        <img src="{{ asset('assets/images/gallery-7.jpg') }}" class="img-fluid gallery-photo-three-left-two" />
                    </div>
                    <div class="col-12 col-lg-6 col-sm-12 text-center section-gallery-photo-three-right">
                        <img src="{{ asset('assets/images/gallery-8.jpg') }}" class="img-fluid gallery-photo-three-right"/>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 text-center section-gallery-button-gift">
                        <a href="{{ route('gift') }}" class="btn btn-outline-dark btn-send-gift">
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
                    <div class="col-12 col-lg-2 text-center">
                        <img src="{{ asset('assets/icons/bird-message.png') }}" class="bird-message-icon" />
                    </div>
                    <div class="col-12 col-lg-10 text-center">
                        <div class="form-group row">
                            <input type="text" name="name" class="form-control input-name" placeholder="Nama Anda">
                            <textarea rows="4" name="message" class="form-control input-message" placeholder="Doa & Ucapan"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-12 col-lg-2 text-right">
                            <button type="button" class="btn btn-outline-dark btn-submit-message">
                                Kirim
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-footer" id="footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 text-center section-footer-title">
                        <div class="row">
                            <img src="{{ asset('assets/icons/bride.png') }}" class="footer-icon" />
                            <h3>Anisa <strong>&</strong> Rakha</h3>
                        </div>
                        <p>Copyright sakhaproject.co - All Rights Reserved<br>@anisabekti @rakhaadrida</p>
                    </div>
                </div>
            </div>
        </section>
{{--        <section class="section-remember-content" id="remember-content">--}}
{{--            <div class="container">--}}
{{--                <div class="section-remember-moment row justify-content-center">--}}
{{--                    <div class="col-10 col-lg-5">--}}
{{--                        <div class="card-moment text-center d-flex flex-column"--}}
{{--                             style="background-image: url('images/moment/moment_1.jpg')">--}}
{{--                            <div class="moment-title">When We First Met</div>--}}
{{--                            <div class="moment-button mt-auto">--}}
{{--                                <a href="first.html" class="btn btn-moment-details px-4">--}}
{{--                                    Remember--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-10 col-lg-5">--}}
{{--                        <div class="card-moment text-center d-flex flex-column"--}}
{{--                             style="background-image: url('images/moment/moment_2.jpg')">--}}
{{--                            <div class="moment-title">Up and Down</div>--}}
{{--                            <div class="moment-button mt-auto">--}}
{{--                                <a href="updown.html" class="btn btn-moment-details px-4">--}}
{{--                                    Remember--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                    <div class="col-10 col-lg-5">--}}
{{--                        <div class="card-moment text-center d-flex flex-column"--}}
{{--                             style="background-image: url('images/moment/moment_3.jpg')">--}}
{{--                            <div class="moment-title">One More Smile</div>--}}
{{--                            <div class="moment-button mt-auto">--}}
{{--                                <a href="smile.html" class="btn btn-moment-details px-4">--}}
{{--                                    Remember--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-10 col-lg-5">--}}
{{--                        <div class="card-moment text-center d-flex flex-column"--}}
{{--                             style="background-image: url('images/moment/moment_4.jpg')">--}}
{{--                            <div class="moment-title">Trivia & Reward</div>--}}
{{--                            <div class="moment-button mt-auto">--}}
{{--                                <a href="trivia/satu.html" class="btn btn-moment-details px-4">--}}
{{--                                    Remember--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="section-chapter" id="chapter">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="div col text-center section-chapter-heading">--}}
{{--                        <h2>Ready for New Chapter?</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="section-chapter-content" id="chapter-content">--}}
{{--            <div class="container">--}}
{{--                <div class="section-chapter-stats row justify-content-center">--}}
{{--                    <div class="col-10 col-sm-5 col-md-4 col-lg-2 stats-detail text-center">--}}
{{--                        <h2>36</h2>--}}
{{--                        <p>Months</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-10 col-sm-5 col-md-4 col-lg-2 stats-detail text-center">--}}
{{--                        <h2>1096</h2>--}}
{{--                        <p>Days</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-10 col-sm-5 col-md-4 col-lg-2 stats-detail text-center">--}}
{{--                        <h2 style="transform: rotate(90deg);">8</h2>--}}
{{--                        <p>Smiles</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-10 col-sm-5 col-md-4 col-lg-2 stats-detail text-center">--}}
{{--                        <h2>974</h2>--}}
{{--                        <p>Moments</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-10 col-sm-5 col-md-4 col-lg-2 stats-detail text-center">--}}
{{--                        <h2>More</h2>--}}
{{--                        <p>to Come</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="section-ready">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12 text-center">--}}
{{--                        <button type="button" class="btn btn-ready" data-toggle="modal" data-target="#vidChapter">--}}
{{--                            I'm Ready--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="modal fade" id="vidChapter" tabindex="-1" role="dialog" aria-labelledby="vidChapterLabel"--}}
{{--                 aria-hidden="true">--}}
{{--                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="modal-body mt-0 p-0">--}}
{{--                            <div class="embed-responsive embed-responsive-16by9">--}}
{{--                                <!----}}
{{--                                <iframe class="embed-responsive-item" src="images/videos/new_chapter.mp4" allowfullscreen>--}}
{{--                                </iframe>--}}
{{--                                -->--}}
{{--                                <video class="video-fluid" controls >--}}
{{--                                    <source--}}
{{--                                        src="images/videos/new_chapter.mp4"--}}
{{--                                        type="video/mp4"--}}
{{--                                    />--}}
{{--                                </video>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="modal-footer chapter-close justify-content-center">--}}
{{--                            <span class="title-footer mr-2">Finish Watching?</span>--}}
{{--                            <button type="button" class="btn btn-finish btn-rounded btn-md ml-3" data-dismiss="modal">Close</button>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <section class="section-footer">--}}
{{--            <div class="container">--}}
{{--                <div class="section-footer-title col-12 text-center">--}}
{{--                    <h1>--}}
{{--                        Thank You--}}
{{--                        <br>--}}
{{--                        Key--}}
{{--                    </h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
    </main>

    <script src="{{ asset('assets/libraries/jquery/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/libraries/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
