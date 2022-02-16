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
        <section class="section-gift-title" id="gift-title">
            <div class="container">
                <div class="section-gift-title-header row justify-content-center">
                    <div class="col-12 col-lg-2 icon-gift-title">
                        <img src="{{ asset('assets/icons/gift-title.png') }}" class="gift-icon">
                    </div>
                    <div class="col-12 col-lg-5 col-md-8">
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
                        <button type="button" onclick="copyAccountNumber()" class="btn btn-outline-dark btn-copy-card-number">
                            <i class="fa fa-files-o fa-lg mb-1 mr-1"></i>
                            <input type="hidden" id="accountNumber" value="16400019165">
                            Salin No. Rekening
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-gift-ewallet" id="gift-card">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-4 col-md-6 text-center section-gift-ewallet-image">
                        <img src="{{ asset('assets/images/dana.png') }}" class="dana-logo">
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 text-center section-gift-ewallet-image">
                        <img src="{{ asset('assets/images/ovo.png') }}" class="ovo-logo">
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 text-center section-gift-ewallet-image">
                        <img src="{{ asset('assets/images/shopee-pay.png') }}" class="shopee-logo">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center section-gift-ewallet-button">
                        <button type="button" onclick="copyPhoneNumber()" class="btn btn-outline-dark btn-copy-phone-number">
                            <i class="fa fa-files-o fa-lg mb-1 mr-1"></i>
                            <input type="hidden" id="phoneNumber" value="089623034000">
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

    <script type="text/javascript">
        function copyAccountNumber(id) {
            $("#accountNumber").attr("type", "text").select();

            document.execCommand('copy');
            $("#accountNumber").attr("type", "hidden");
        }

        function copyPhoneNumber(id) {
            $("#phoneNumber").attr("type", "text").select();

            document.execCommand('copy');
            $("#phoneNumber").attr("type", "hidden");
        }
    </script>
</body>
</html>
