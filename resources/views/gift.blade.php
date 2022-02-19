<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Anka Wedding </title>
    <link rel="stylesheet" href="{{ asset('assets/libraries/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libraries/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libraries/aos/css/aos.css') }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Muli:wght@300;400;500;600;700;800&family=Pacifico&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
    <main>
        <section class="section-gift-title" id="gift-title">
            <div class="container">
                <div class="section-gift-title-header row justify-content-center">
                    <div class="col-12 col-lg-2 icon-gift-title" data-aos="zoom-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
                        <img src="{{ asset('assets/icons/gift-title.png') }}" class="gift-icon">
                    </div>
                    <div class="col-12 col-lg-5 col-md-8">
                        <h3 data-aos="zoom-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
                            Wedding Gift
                        </h3>
                        <h6 data-aos="fade-up" data-aos-easing="ease-out-back" data-aos-duration="1000">
                            Silahkan transfer hadiah melalui nomor rekening maupun dompet digital berikut :
                        </h6>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-gift-card" id="gift-card">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-gift-card-image" data-aos="zoom-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/bank-card.jpg') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center section-gift-card-button">
                        <button type="button" onclick="copyAccountNumber()" class="btn btn-light btn-outline-dark btn-copy-card-number"
                                data-aos="zoom-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
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
                    <div class="col-12 col-lg-4 col-md-6 text-center section-gift-ewallet-image"
                         data-aos="zoom-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/dana.png') }}" class="dana-logo">
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 text-center section-gift-ewallet-image"
                         data-aos="zoom-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/ovo.png') }}" class="ovo-logo">
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 text-center section-gift-ewallet-image"
                         data-aos="zoom-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/shopee-pay.png') }}" class="shopee-logo">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center section-gift-ewallet-button">
                        <button type="button" onclick="copyPhoneNumber()" class="btn btn-light btn-outline-dark btn-copy-phone-number"
                                data-aos="zoom-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
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
                    <div class="col-12 col-lg-6 text-center" data-aos="fade-up" data-aos-easing="ease-out-back" data-aos-duration="1000">
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
    <script src="{{ asset('assets/libraries/aos/js/aos.js') }}"></script>

    <script type="text/javascript">
        AOS.init();
        function copyAccountNumber(id) {
            $("#accountNumber").attr("type", "text").select();

            @if(\Jenssegers\Agent\Facades\Agent::is('iPhone'))
                copyToClipboard($("#link").val());
            @else
                document.execCommand('copy');
            @endif

            $("#accountNumber").attr("type", "hidden");
        }

        function copyPhoneNumber(id) {
            $("#phoneNumber").attr("type", "text").select();

            @if(\Jenssegers\Agent\Facades\Agent::is('iPhone'))
                copyToClipboard($("#link").val());
            @else
                document.execCommand('copy');
            @endif

            $("#phoneNumber").attr("type", "hidden");
        }

        function copyToClipboard(string) {
            let textarea;
            let result;

            try {
                textarea = document.createElement('textarea');
                textarea.setAttribute('readonly', true);
                textarea.setAttribute('contenteditable', true);
                textarea.style.position = 'fixed'; // prevent scroll from jumping to the bottom when focus is set.
                textarea.value = string;

                document.body.appendChild(textarea);

                textarea.focus();
                textarea.select();

                const range = document.createRange();
                range.selectNodeContents(textarea);

                const sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);

                textarea.setSelectionRange(0, textarea.value.length);
                result = document.execCommand('copy');
            } catch (err) {
                console.error(err);
                result = null;
            } finally {
                document.body.removeChild(textarea);
            }

            // manual copy fallback using prompt
            if (!result) {
                const isMac = navigator.platform.toUpperCase().indexOf('MAC') >= 0;
                const copyHotkey = isMac ? 'Copy Link' : 'Copy Link';
                result = prompt(`Press ${copyHotkey}`, string); // eslint-disable-line no-alert
                if (!result) {
                    return false;
                }
            }
            return true;
        }
    </script>
</body>
</html>
