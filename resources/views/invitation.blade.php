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
        <section class="section-invitation" id="invitation">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-invitation-title">
                        <h6>Kepada Yth.</h6>
                        <h3 id="invitationName">Andini Az-Zahra Safitri</h3>
                        <p>Di Tempat</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center section-invitation-button">
                        <a href="{{ route('main') }}" class="btn btn-light btn-outline-dark btn-invitation">
                            <img src="{{ asset('assets/icons/vows.png') }}" class="icon-invitation">
                            Buka Undangan
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('assets/libraries/jquery/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <script type="text/javascript">
        var invitationParam = new URLSearchParams(location.search);

        var name = invitationParam.get('for');
        name = name.replace(/-/g, ' ');

        name = name.toLowerCase().replace(/\b[a-z]/g, function(letter) {
            return letter.toUpperCase();
        });

        document.getElementById("invitationName").innerHTML = name;
    </script>
</body>
</html>
