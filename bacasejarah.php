<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="stylepahlawan1.css" />
    <title>Sejarah Indonesia</title>
  </head>
  <style>
    /* navbar */
    body {
      overflow-x: hidden;
    }
    .navbar {
      position: relative;
      z-index: 1;
    }
    .navbar-brand {
      font-family: Viga;
      font-size: 32px;
    }

    /* jumbotron */
    .jumbotron {
      padding-top: 8rem;
      background: linear-gradient(black, #e20c0c);
      margin-top: -75px;
      overflow: hidden;
      height: 180vh;
      font-family: itim;
    }
    .jumbotron .card {
      opacity: 0;
      transform: translate(0, -40px);
      transition: 0.5s;
    }

    .jumbotron .card.muncul {
      opacity: 1;
      transform: translate(0, 0);
    }
    .tombol2 {
      text-transform: uppercase;
      border-radius: 40px;
      font-family: itim;
      margin-top: 70px;
      margin-left: 565px;
    }
    /* Utilities */
    .tombol {
      text-transform: uppercase;
      border-radius: 40px;
      font-family: Viga;
    }
    .navbar-brand,
    .nav-link {
      color: rgb(255, 255, 255) !important;
      font-family: viga;
    }

    .nav-link {
      text-transform: uppercase;
      margin-right: 30px;
    }

    .nav-link:hover {
      border-bottom: 3px solid rgb(255, 255, 255);
      margin-bottom: -3px;
    }
  </style>
  <body id="home">
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="home.php">Pahlawanku</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="bacabiografi.php">Baca Biografi</a>
            <a class="nav-item nav-link" href="bacasejarah.php">Sejarah Indonesia</a>
            <a class="nav-item nav-link" href="kuis.php">Kuis</a>
            <a class="nav-item nav-link" href="aboutus.php">About Us</a>
            <a class="nav-item nav-link" href="contact.php">Contact</a>
            <a class="nav-item btn btn-light tombol" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Jumbotron -->
    <div class="jumbotron">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col mb-3">
            <h2 style="color: aliceblue">SEJARAH INDONESIA</h2>
            <hr style="height: 2px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(255, 255, 255)" />
            <a href="#sejarah" class="btn btn-light tombol1"><i class="bi bi-arrow-down-short"></i>Klik atau Scroll Untuk Melihat Konten Sejarah<i class="bi bi-arrow-down-short"></i></a>
          </div>
        </div>
        <section id="sejarah">
        <div class="row justify-content-center text-center">
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/sejarah1.png" class="card-img-top" alt="sejarah1" />
              <div class="card-body">
                <h5 class="card-title">P.S</h5>
                <h6>Surabaya</h6>
                <p class="card-text">November 1945</p>
                <a href="sejarah1.php" class="btn btn-success">Baca Sejarah</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/sejarah2.png" class="card-img-top" alt="sejarah2" />
              <div class="card-body">
                <h5 class="card-title">B.L.A</h5>
                <h6>Bandung</h6>
                <p class="card-text">Maret 1946</p>
                <a href="sejarah2.php" class="btn btn-success">Baca Sejarah</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/sejarah3.png" class="card-img-top" alt="sejarah3" />
              <div class="card-body">
                <h5 class="card-title">O.D</h5>
                <h6>Malaysia</h6>
                <p class="card-text">1961-1966</p>
                <a href="sejarah3.php" class="btn btn-success">Baca Sejarah</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/sejarah4.png" class="card-img-top" alt="sejarah4" />
              <div class="card-body">
                <h5 class="card-title">I.H.Y</h5>
                <h6>Surabaya</h6>
                <p class="card-text">November 1945</p>
                <a href="sejarah4.php" class="btn btn-success">Baca Sejarah</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/sejarah5.png" class="card-img-top" alt="sejarah5" />
              <div class="card-body">
                <h5 class="card-title">S.U</h5>
                <h6>Yogyakarta</h6>
                <p class="card-text">Maret 1949</p>
                <a href="sejarah5.php" class="btn btn-success">Baca Sejarah</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/sejarah6.png" class="card-img-top" alt="sejarah6" />
              <div class="card-body">
                <h5 class="card-title">P.L.A</h5>
                <h6>Maluku</h6>
                <p class="card-text">Januari 1962</p>
                <a href="sejarah6.php" class="btn btn-success">Baca Sejarah</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/sejarah7.png" class="card-img-top" alt="sejarah7" />
              <div class="card-body">
                <h5 class="card-title">P.A</h5>
                <h6>Bali</h6>
                <p class="card-text">November 1946</p>
                <a href="sejarah7.php" class="btn btn-success">Baca Sejarah</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/sejarah8.png" class="card-img-top" alt="sejarah8" />
              <div class="card-body">
                <h5 class="card-title">P.A</h5>
                <h6>Semarang</h6>
                <p class="card-text">Oktober 1945</p>
                <a href="sejarah8.php" class="btn btn-success">Baca Sejarah</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/sejarah9.png" class="card-img-top" alt="sejarah9" />
              <div class="card-body">
                <h5 class="card-title">P.G.S</h5>
                <h6>Yogyakarta</h6>
                <p class="card-text">1948-1949</p>
                <a href="sejarah9.php" class="btn btn-success">Baca Sejarah</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/sejarah10.png" class="card-img-top" alt="sejarah10" />
              <div class="card-body">
                <h5 class="card-title">O.T</h5>
                <h6>Irian Barat</h6>
                <p class="card-text">Desember 1961</p>
                <a href="sejarah10.php" class="btn btn-success">Baca Sejarah</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <a href="#home" class="btn btn-light tombol2"><i class="bi bi-arrow-up-short"></i><br />Kembali Ke Atas</a>
      </div>
    </div>
    </section>
    <!-- Jumbotron end -->

    <!-- footer -->
    <div class="row footer mt-2">
      <div class="col text-center">
        <p style="font-family: itim">2022 All Right Reserved by Researchers.</p>
      </div>
    </div>
    <!-- footer end-->

    <!-- container end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="scriptbio.js"></script>
  </body>
</html>
