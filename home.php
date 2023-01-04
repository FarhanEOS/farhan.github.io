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

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
    <title>Pahlawanku!</title>
  </head>

  <body>
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
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Selamat Datang di Website Pahlawanku</h1>
        <h5 class="display-5">Pahlawan adalah orang yang menonjol keberanian dan pengorbanannya dalam membela kebenaran.</h5>
      </div>
    </div>
    <!-- Jumbotron end -->

    <!-- container -->
    <div class="container">
    <!-- info panel -->
    <section id="info-panel">
      <div class="row">
        <div class="col info-panel">
          <div class="row">
            <div class="col">
              <img src="img/book.png" alt="Biografi" class="float-left" />
              <h4>Baca Biografi</h4>
              <p>
                Dengan membaca kisah hidup seseorang, kita dapat mengetahui berbagai peristiwa yang telah dilaluinya, setiap peluang dan hambatan yang dihadapi. Setiap kejadian yang dialami ternyata merupakan proses yang membawa pada
                momentum menuju kesuksesan. Membaca biografi menjadi sarana memperoleh motivasi untuk meningkatkan kualitas dan kompetensi diri.
              </p>
            </div>
            <div class="col-lg">
              <img src="img/history.png" alt="Sejarah" class="float-left" />
              <h4>Sejarah Indonesia</h4>
              <p>
                Selain itu belajar sejarah juga memberikan manfaat bagi kita. Seperti, belajar sejarah dapat mengetahui kejadian dimasa lampau, belajar sejarah dapat dijadikan sebagai profesi, belajar sejarah dapat dijadikan sebagai
                gambaran dan pedoman bagi suatu bangsa, belajar sejarah dapat memberikan kesenangan dan kegembiaraan karena ceritanya yang menarik, sejarah dapat membuat bangkit dari keterpurukan yang terjadi dimasa lampau.
              </p>
            </div>
            <div class="col-lg">
              <img src="img/quiz.png" alt="Kuis" class="float-left" />
              <h4>Kuis</h4>
              <p>
                Rasa percaya diri sangatlah penting. Dalam pengambilan keputusan seseorang harus senantiasa memiliki percaya diri. Dengan metode kuis, maka siswa dilatih untuk senantiasa memiliki rasa percaya diri, Melalui metode kuis semua
                anak akan aktif dalam pembelajaran. siswa akan aktif menjawab dan menemukan penyelesaian atas soal yang disampaikan.
              </p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- info panel end -->

    <!-- sulawesi space -->

    <div class="row workingspace">
      <div class="col-lg-6">
        <img src="img/sulawesi.png" alt="workingspace" class="img-fluid" />
      </div>
      <div class="col-lg-5">
        <h3>Pulau Sulawesi/Celebes</h3>
        <p>
          Website ini akan menceritakan pahlawan-pahlawan nasional<br />
          yang ada di pulau Sulawesi, Nama sulawesi tersendiri memiliki arti yaitu <br />melambangkan pesona dan karisma. Yang mempunyai kepribadian <br />pemrakarsa, pelopor, pemimpin, bebas, pekerja keras, dan individualis.
        </p>
      </div>
    </div>
    <!-- sulawesi space end -->

    <!-- footer -->
    <div class="row footer">
      <div class="col text-center">
        <p>2022 All Right Reserved by Researchers.</p>
      </div>
    </div>
    <!-- footer end-->

    <!-- container end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
