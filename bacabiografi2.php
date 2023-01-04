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
    <title>Baca Biografi</title>
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
      background: linear-gradient(black, #38073b);
      margin-top: -75px;
      overflow: hidden;
      height: 280vh;
      font-family: itim;
    }
    .jumbotron .card {
      transform: translate(0, -40px);
    }

    .jumbotron .card.muncul {
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
      color: rgb(195, 0, 255) !important;
      font-family: viga;
    }

    .nav-link {
      text-transform: uppercase;
      margin-right: 30px;
    }

    .nav-link:hover {
      border-bottom: 3px solid rgb(195, 0, 255);
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
            <h2 style="color: aliceblue">PAHLAWAN-PAHLAWAN YANG ADA DI SULAWESI</h2>
            <hr style="height: 2px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(255, 255, 255)" />
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan1.png" class="card-img-top" alt="pahlawan1" />
              <div class="card-body">
                <h5 class="card-title">Emmy Saelan</h5>
                <h6>1924-1947</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan1.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan2.png" class="card-img-top" alt="pahlawan2" />
              <div class="card-body">
                <h5 class="card-title">Andi Abdullah</h5>
                <h6>1918-1947</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan2.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan3.png" class="card-img-top" alt="pahlawan3" />
              <div class="card-body">
                <h5 class="card-title">Andi Djemma</h5>
                <h6>1935-1965</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan3.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan4.png" class="card-img-top" alt="pahlawan4" />
              <div class="card-body">
                <h5 class="card-title">Mappanyukki</h5>
                <h6>1885-1967</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan4.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan5.png" class="card-img-top" alt="pahlawan5" />
              <div class="card-body">
                <h5 class="card-title">Andi Sultan</h5>
                <h6>1894-1963</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan5.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan6.png" class="card-img-top" alt="pahlawan6" />
              <div class="card-body">
                <h5 class="card-title">Medukelleng</h5>
                <h6>1700-1765</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan6.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan7.png" class="card-img-top" alt="pahlawan7" />
              <div class="card-body">
                <h5 class="card-title">Daeng Risadju</h5>
                <h6>1880-1964</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan7.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan8.png" class="card-img-top" alt="pahlawan8" />
              <div class="card-body">
                <h5 class="card-title">Pajonga</h5>
                <h6>1901-1958</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan8.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan9.png" class="card-img-top" alt="pahlawan9" />
              <div class="card-body">
                <h5 class="card-title">Pong Tiku</h5>
                <h6>1846-1907</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan9.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan10.png" class="card-img-top" alt="pahlawan10" />
              <div class="card-body">
                <h5 class="card-title">Daeng Romo</h5>
                <h6>1915-1947</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan10.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan11.png" class="card-img-top" alt="pahlawan11" />
              <div class="card-body">
                <h5 class="card-title">Robert Wolter</h5>
                <h6>1925-1949</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan11.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan12.png" class="card-img-top" alt="pahlawan12" />
              <div class="card-body">
                <h5 class="card-title">Hasanuddin</h5>
                <h6>1631-1670</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan12.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan13.png" class="card-img-top" alt="pahlawan13" />
              <div class="card-body">
                <h5 class="card-title">Al-Makasari</h5>
                <h6>1626-1699</h6>
                <p class="card-text">Sulawesi Selatan</p>
                <a href="pahlawan13.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan14.png" class="card-img-top" alt="pahlawan14" />
              <div class="card-body">
                <h5 class="card-title">Arie Lasut</h5>
                <h6>1918-1949</h6>
                <p class="card-text">Sulawesi Utara</p>
                <a href="pahlawan14.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan15.png" class="card-img-top" alt="pahlawan15" />
              <div class="card-body">
                <h5 class="card-title">B.W Lapian</h5>
                <h6>1892-1977</h6>
                <p class="card-text">Sulawesi Utara</p>
                <a href="pahlawan15.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan16.png" class="card-img-top" alt="pahlawan16" />
              <div class="card-body">
                <h5 class="card-title">L.N Palar</h5>
                <h6>1900-1981</h6>
                <p class="card-text">Sulawesi Utara</p>
                <a href="pahlawan16.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan17.png" class="card-img-top" alt="pahlawan17" />
              <div class="card-body">
                <h5 class="card-title">John Li</h5>
                <h6>1911-1988</h6>
                <p class="card-text">Sulawesi Utara</p>
                <a href="pahlawan17.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan18.png" class="card-img-top" alt="pahlawan18" />
              <div class="card-body">
                <h5 class="card-title">Maria</h5>
                <h6>1872-1924</h6>
                <p class="card-text">Sulawesi Utara</p>
                <a href="pahlawan18.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan19.png" class="card-img-top" alt="pahlawan19" />
              <div class="card-body">
                <h5 class="card-title">Sam R</h5>
                <h6>1890-1949</h6>
                <p class="card-text" style="font-size: 13px">Sulawesi <br />Utara</p>
                <a href="pahlawan19.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
          <div class="col-2 mb-3">
            <div class="card" style="width: 10rem">
              <img src="img/pahlawan20.png" class="card-img-top" alt="pahlawan20" />
              <div class="card-body">
                <h5 class="card-title">M.Yasin</h5>
                <h6>1920-2012</h6>
                <p class="card-text" style="font-size: 16px">Sulawesi Tenggara</p>
                <a href="pahlawan20.php" class="btn btn-success">Baca Biografi</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <a href="#home" class="btn btn-light tombol2"><i class="bi bi-arrow-up-short"></i><br />Kembali Ke Atas</a>
      </div>
    </div>
    <!-- Jumbotron end -->

    <!-- footer -->
    <div class="row footer">
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
    <script src=""></script>
  </body>
</html>
