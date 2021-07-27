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

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 pt-4">
        <div class="container">
            <div class="row container-fluid">
                <div class="col-2"><a href="#"><img src="{{ asset('assets/images/gmilogo/gmi_recreate.png') }}" alt="GMI Logo" id="navbar-logo" class="rounded-circle"></a></div>
                <div class="col-7"></div>
                <div class="col-3"><button class="btn btn-outline-light rounded-pill my-sm-0" type="submit" id="btn-contact-us">Contact Us</button></div>
            </div>
        </div>
    </nav>

    <!-- End of Navbar -->

    <!-- Start of Banner -->

    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="content text-center">
            <h1 class="title">Garry's Mod Indonesia <br> Revived</h1>
        </div>
        <img src="{{ asset('assets/images/gmilogo/gmi_recreate.png') }}" alt="banner-logo" class="rounded-circle" id="banner-logo">
    </div>

    <!-- End of Banner -->

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

    <!-- Start of Server Contents -->

    <div id="server-contents">
        <div class="container-fluid" id="server-contents-content">
            <h1 class="title">Server Contents</h1>
            <p>Server menggunakan custom content yang dimana bisa anda dapatkan dengan mengklik link dibawah ini.</p>
        </div>
    </div>

    <!-- End of Server Contents -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('script.js') }}"></script>
  </body>
</html>