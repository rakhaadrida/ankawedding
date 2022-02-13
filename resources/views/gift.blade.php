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
        <section class="section-gift-title" id="gift-title">
            <div class="container">
                <div class="section-gift-title-header row justify-content-center">
                    <div class="col-2">
                        <img src="{{ asset('assets/icons/gift-title.png') }}" class="gift-icon">
                    </div>
                    <div class="col-5">
                        <h3>
                            Wedding Gift
                        </h3>
                        <h6>Silahkan transfer hadiah melalui nomor rekening maupun dompet digital berikut :</h6>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-gift-card" id="gift-card">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-gift-card-image">
                        <img src="{{ asset('assets/images/bank-card.jpg') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center section-gift-card-button">
                        <button type="button" class="btn btn-outline-dark btn-copy-card-number">
                            Salin No. Rekening
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-gift-ewallet" id="gift-card">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-4 text-center section-gift-ewallet-image">
                        <img src="{{ asset('assets/images/dana.png') }}" class="dana-logo">
                    </div>
                    <div class="col-12 col-lg-4 text-center section-gift-ewallet-image">
                        <img src="{{ asset('assets/images/ovo.png') }}" class="ovo-logo">
                    </div>
                    <div class="col-12 col-lg-4 text-center section-gift-ewallet-image">
                        <img src="{{ asset('assets/images/shopee-pay.png') }}" class="shopee-logo">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center section-gift-ewallet-button">
                        <button type="button" class="btn btn-outline-dark btn-copy-phone-number">
                            Salin No. Ponsel
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-gift-thanks" id="gift-thanks">
            <div class="container">
                <div class="section-gift-thanks-message row justify-content-center">
                    <div class="col-6 text-center">
                        <h5>
                            Sebelumnya, kami ucapkan terima kasih atas perhatian dan bentuk tanda cinta Bapak/ Ibu/ Saudara/ i untuk kami
                        </h5>
                        <h3>- Terima Kasih -</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('assets/libraries/jquery/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/libraries/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
