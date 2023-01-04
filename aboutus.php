<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="stylepahlawan1.css" />
    <title>Tentang Kami</title>
    <!-- CSS saya -->
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
        background: linear-gradient(black, #d4e20c);
        margin-top: -75px;
        overflow: hidden;
        height: auto;
        padding-bottom: 12rem;
      }
      .jumbotron .display-4 {
        font-family: itim;
        color: aliceblue;
      }
      .jumbotron .lead {
        font-family: itim;
        color: aliceblue;
      }
      /* Utilities */
      .tombol {
        text-transform: uppercase;
        border-radius: 40px;
        font-family: Viga;
      }
      .navbar-brand,
      .nav-link {
        color: rgb(200, 255, 0) !important;
        font-family: viga;
      }

      .nav-link {
        text-transform: uppercase;
        margin-right: 30px;
      }

      .nav-link:hover {
        border-bottom: 3px solid rgb(200, 255, 0);
        margin-bottom: -3px;
      }
    </style>
    <!-- akhir css -->
  </head>

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
            <a class="nav-item nav-link active" href="home.php">Home</a>
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
    <section class="jumbotron text-center">
      <img src="img/logo_kampus.png" alt="" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Universitas Cokroaminoto Palopo</h1>
      <hr style="height: 2px; width: 50%; margin-left: 345px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(255, 255, 255)" />
      <p class="lead">
        Halooo, Perkenalkan kami adalah mahasiswa dari Universitas Cokroaminoto Palopo atau biasa disebut UNCOK. <br />Kami mahasiswa fakultas Informatika dengan program studi Teknik Komputer, <br />Kami harap kalian menyukai website
        tentang pahlawan ini dan menambah pengetahuan kalian tentang pahlawan yang ada di sulawesi. <br />Terima kasih kawann...<br>Mau berbincang-bincang ? <a style="color: black;" href="contact.php">Yuk Pencet Ini</a>
      </p>
    </section>
    <!-- footer -->
    <div class="row footer mt-2">
      <div class="col text-center">
        <p style="font-family: itim">2022 All Right Reserved by Researchers.</p>
      </div>
    </div>
    <!-- footer end-->
  </body>
</html>
