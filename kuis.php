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

    <title>Kuis</title>
    <link rel="stylesheet" type="text/css" href="kuis.css" />
    <style>
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
      .tombol {
        text-transform: uppercase;
        border-radius: 40px;
        font-family: Viga;
      }
      .navbar-brand,
      .nav-link {
        color: rgb(7, 255, 7) !important;
        font-family: viga;
      }

      .nav-link {
        text-transform: uppercase;
        margin-right: 30px;
      }

      .nav-link:hover {
        border-bottom: 3px solid rgb(0, 255, 13);
        margin-bottom: -3px;
      }
    </style>
  </head>
  <body onload="NextQuestion(0)">
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
    <main>
       <div class="row text-center mb-4" style="font-family: itim;">
          <div class="col mb-3">
            <h2 style="color: aliceblue">ASAH KEMAMPUANMU DENGAN MENJAWAB PERTANYAAN DI BAWAH INI!</h2>
            <hr style="height: 2px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(255, 255, 255)" />
          </div>
        </div>
      <!-- creating a modal for when quiz ends -->
      <div class="modal-container" id="score-modal">
        <div class="modal-content-container">
          <h1>Selamat, Ini Hasil Kamu.</h1>

          <div class="grade-details">
            <p>Percobaan : 10</p>
            <p>Jawaban Salah : <span id="wrong-answers"></span></p>
            <p>Jawaban Benar : <span id="right-answers"></span></p>
            <p>Tingkat : <span id="grade-percentage"></span>%</p>
            <p><span id="remarks"></span></p>
          </div>

          <div class="modal-button-container">
            <button onclick="closeScoreModal()">Selanjutnya</button>
          </div>
        </div>
      </div>

      <div class="game-quiz-container">
        <div class="game-details-container">
          <h1>Poin : <span id="player-score"></span> / 10</h1>
          <h1>Pertanyaan : <span id="question-number"></span> / 10</h1>
        </div>

        <div class="game-question-container">
          <h1 id="display-question"></h1>
        </div>

        <div class="game-options-container">
          <div class="modal-container" id="option-modal">
            <div class="modal-content-container">
              <h1>Silahkan Pilih Jawaban</h1>

              <div class="modal-button-container">
                <button onclick="closeOptionModal()">Ok</button>
              </div>
            </div>
          </div>

          <span>
            <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
            <label for="option-one" class="option" id="option-one-label"></label>
          </span>

          <span>
            <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
            <label for="option-two" class="option" id="option-two-label"></label>
          </span>

          <span>
            <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
            <label for="option-three" class="option" id="option-three-label"></label>
          </span>

          <span>
            <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
            <label for="option-four" class="option" id="option-four-label"></label>
          </span>
        </div>

        <div class="next-button-container">
          <button onclick="handleNextQuestion()">Jawab</button>
        </div>
      </div>
    </main>
    <script src="kuis.js"></script>
    <!-- footer -->
    <div class="row footer mt-2">
      <div class="col text-center">
        <p style="font-family: itim">2022 All Right Reserved by Researchers.</p>
      </div>
    </div>
    <!-- footer end-->
  </body>
</html>
