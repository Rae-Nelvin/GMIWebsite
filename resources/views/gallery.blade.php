<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('gallery.css') }}">

    <title>Garry's Mod Indonesia</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/gmilogo/gmi_logo_old.png') }}" />
  </head>
  <body>
      <!-- Start of Navbar -->
    @foreach($background as $background)
    <div id="intro" style="background-image: url(/uploads/{{ $background['file_path'] }})">
        <div id="layer">
            <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark pt-4" style="margin-left: 7%;">
                <div class="container">
                    <div class="row container-fluid">
                        <div class="col-2"><a href="#">
                            
                            <img src="{{ asset('assets/images/gmilogo/gmi_logo_old.png') }}" alt="GMI Logo" id="navbar-logo">
                            
                        </div>
                        <div class="col-6"></div>
                    </div>
                </div>
            </nav>
            <div id="logo-banner" class="text-center">
                
                <p>{{ $background['gamemodes'] }}</p>
                @endforeach
                <p style="font-size: 35px;">Galleries</p>
                <a href="{{ route('index') }}"><button class="btn btn-outline-light rounded-pill" type="submit" id="btn-contact-us">Back to Menu ➔</button></a>
            </div>
        </div>
    </div>

    <!-- End of Navbar -->

    <!-- Start of Gallery -->

        <div id="gallery">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($images as $images)
                    <div class="col-4">
                        <div class="images">
                            <img src="/uploads/{{ $images['file_path'] }}" alt="{{ $images['file_path'] }}" />
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- The Modal -->
            <div class="mymodal">
                <span class="close">⨉</span>
                <div class="mymodalContent">
                    <img src="" class="mymodalImg" alt="">
                    <span class="mymodalTxt">
                    </span>
                </div>
            </div>
        </div>

    <!-- End of Gallery -->
    <script src="{{ asset('gallery.js') }}" type="text/javascript"></script>
  </body>
  </html>