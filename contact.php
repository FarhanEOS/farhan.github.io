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
    <title>Kontak Kami</title>
  </head>
  <style>
    /* navbar */
    body {
      overflow-x: hidden;
      font-family: itim;
      
    }
    form {
      display: flex;
      flex-direction: column;
      width: 24rem;
      gap: 1rem;
    }
    input, select, textarea {
    width: 50rem;
      padding: 1.4rem;
      background: whitesmoke;
      border: 1px solid black;
    }
    textarea {
      height: 6rem;
    }
    button {
      width: 8rem;
      padding: 1.4rem;
      cursor: pointer;
      background: skyblue;
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
      background: linear-gradient(black, #e20c9b);
      margin-top: -75px;
      overflow: hidden;
      height: auto;
      font-family: itim;
      padding-bottom: 12rem;
    }
   
    .jumbotron h6 {
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
      color: rgb(255, 1, 200) !important;
      font-family: viga;
    }

    .nav-link {
      text-transform: uppercase;
      margin-right: 30px;
    }

    .nav-link:hover {
      border-bottom: 3px solid rgb(255, 1, 213);
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
          <div class="col p-3">
            <h2 style="color: aliceblue">KAMU PUNYA KRITIK ATAU SARAN ?, HUBUNGI KAMI</h2>
            <hr style="height: 2px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(255, 255, 255)" />
          </div>
          </div>
            <div class="row justify-content-center">
              <div class="col-md-8">
                <form action="https://formspree.io/f/xeqwqqrk" method="POST">
                  <input type="text" name="Name" placeholder="Nama Kamu" required>
                  <input type="email" name="Email" placeholder="Email" required>
                  <textarea name="Message" placeholder="Pesan" required></textarea>
                  <button type="submit">Kirim</button>
                </form>
              </div>
            </div>
          </div>

    <!-- container end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </body>
</html>

