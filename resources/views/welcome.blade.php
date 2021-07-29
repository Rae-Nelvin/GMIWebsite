<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('rules.css') }}">

    <title>Garry's Mod Indonesia</title>
  </head>
  <body>

    <!-- Start of Navbar -->
    <div id="intro">
        <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark pt-4">
            <div class="container">
                <div class="row container-fluid">
                    <div class="col-2"><a href="#"><img src="{{ asset('assets/images/gmilogo/gmi_recreate.png') }}" alt="GMI Logo" id="navbar-logo" class="rounded-circle"></a></div>
                    <div class="col-6"></div>
                    <div class="col-4"><button class="btn btn-outline-light rounded-pill my-sm-0" type="submit" id="btn-contact-us">Contact Us</button></div>
                </div>
            </div>
        </nav>
        <div id="logo-banner" class="text-center">
            <h1 class="title">Garry's Mod Indonesia<br> Revived</h1>
            <img src="{{ asset('assets/images/gmilogo/gmi_recreate.png') }}" alt="banner-logo" class="rounded-circle" id="banner-logo">
        </div>
    </div>

    <!-- End of Navbar -->

    <!-- Start of Showcase -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active element" style="background-image:url({{ asset('assets/images/GMODSS/1.png') }})">
            </div>
            <div class="carousel-item" style="background-image:url({{ asset('assets/images/GMODSS/2.png') }})">
            </div>
            <div class="carousel-item" style="background-image:url({{ asset('assets/images/GMODSS/3.png') }})">
            </div>
            <div class="carousel-item" style="background-image:url({{ asset('assets/images/GMODSS/1.png') }})">
            </div>
            <div class="carousel-item" style="background-image:url({{ asset('assets/images/GMODSS/2.png') }})">
            </div>
            <div class="carousel-item" style="background-image:url({{ asset('assets/images/GMODSS/3.png') }})">
            </div>
            <div class="container" id="container-carousel">
                <div class="row">
                    <div class="col-6 no-padding"> 
                        <img class="output" id="sm-container-img" src="" alt="Small Container Picture">
                    </div>
                    <div class="col-6" style="background: #0e0f14;">
                        <div class="row p-3">
                            <img src="{{ asset('assets/images/gmilogo/gmi_recreate.png') }}" alt="Gamemode Logo" class="rounded-circle" id="gamemode-logo">
                            <h1 id="gamemode-title">GAMEMODES TITLE</h1>
                        </div>
                        <div class="row mini-gallery">
                            <div class="col-6 mini-gallery"><img src="{{ asset('assets/images/Background/5.jpg') }}" alt="" style="width: 100%;"></div>
                            <div class="col-6 mini-gallery"><img src="{{ asset('assets/images/Background/2.jpg') }}" alt="" style="width: 100%;"></div>
                            <div class="col-6 mini-gallery"><img src="{{ asset('assets/images/Background/3.jpg') }}" alt="" style="width: 100%;"></div>
                            <div class="col-6 mini-gallery"><img src="{{ asset('assets/images/Background/4.jpg') }}" alt="" style="width: 100%;"></div>
                            <a href="#" class="mt-4"><p id="server-content">Click here to get the server contents >>></p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide-to="prev" style="margin-left: -5%"><span class="sr-only">Previous</span><span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
        <a href="#myCarousel" class="carousel-control-next" role="button" data-slide-to="next" style="margin-right: -5%"><span class="sr-only">Next</span><span class="carousel-control-next-icon" aria-hidden="true"></span></a>
    </div>
    <!-- End of Showcase -->

    <!-- Start of Rules -->
    <div id="rules">
        <div class="container" id="rules-content">
            <div class="text-box">
                <h1 class="title">RULES</h1>
                <ul id="rules-list">
                    <li>Bersikap baik dengan player lain.</li>
                    <li>Kurangi penggunaan kata - kata yang tidak pantas.</li>
                    <li>Dilarang melakukan hal Rasis / Offensive!</li>
                    <li>Dilarang Ghosting / Metagaming (termasuk Discord). Warned 3x = BANNED!</li>
                    <li>Dilarang Spamming dalam bentuk apapun!</li>
                    <li>Dilarang melakukan Iklan Server lain, terkecuali sudah izin kepada Admin / Staff.</li>
                    <li>Dilarang Trolling / Nge-meme berlebihan. Ini bukan 4chan nak.</li>
                    <li>Dilarang kelamaan duduk di kursi "Spectator'.</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Rules -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('script.js') }}" type="text/javascript"></script>
  </body>
</html>