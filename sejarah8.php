<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="stylepahlawan1.css" />
    <title>Perang Ambarawa</title>
    <!-- CSS saya -->
    <style>
      /* navbar */
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
        background-color: rgb(201, 15, 192);
        margin-top: -75px;
        overflow: hidden;
      }
      .jumbotron .display-4 {
        font-family: itim;
      }
      .jumbotron .lead {
        font-family: itim;
      }
      /* section */
      section {
        padding-top: 3rem;
      }

      #about {
        font-family: itim;
      }
      .lead1kiri,
      .lead1kanan {
        opacity: 0;
        transform: translate(-50px, 0);
        text-align: justify;
        transition: 1s;
      }
      .lead1kanan {
        transform: translate(50px, 0);
      }
      .lead1kiri.lmuncul,
      .lead1kanan.lmuncul {
        opacity: 1;
        transform: translate(0, 0);
      }

      #projects {
        font-family: itim;
      }

      /* parralax */
      .projects .card {
        opacity: 0;
        transform: translate(0, -40px);
        transition: 0.5s;
      }
      .projects .card.muncul {
        opacity: 1;
        transform: translate(0, 0);
      }

      /* Utilities */
      .tombol {
        text-transform: uppercase;
        border-radius: 40px;
        font-family: Viga;
      }
      .tombol1 {
        text-transform: uppercase;
        border-radius: 40px;
        font-family: itim;
        margin-top: 85px;
      }
      .tombol2 {
        text-transform: uppercase;
        border-radius: 40px;
        font-family: itim;
        margin-top: 85px;
        margin-left: 595px;
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
      <img src="img/sejarah8.png" alt="" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Perang Ambarawa Semarang</h1>
      <p class="lead">12-15 Desember 1945</p>
      <a href="bacasejarah2.php" class="btn btn-light tombol1"><i class="bi bi-arrow-up-short"></i>Lihat Sejarah Lain</a>
      <a href="#about" class="btn btn-light tombol1">Baca Sejarah<i class="bi bi-arrow-down-short"></i></a>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,128L6.2,154.7C12.3,181,25,235,37,234.7C49.2,235,62,181,74,160C86.2,139,98,149,111,128C123.1,107,135,53,148,58.7C160,64,172,128,185,181.3C196.9,235,209,277,222,288C233.8,299,246,277,258,261.3C270.8,245,283,235,295,218.7C307.7,203,320,181,332,192C344.6,203,357,245,369,261.3C381.5,277,394,267,406,256C418.5,245,431,235,443,218.7C455.4,203,468,181,480,149.3C492.3,117,505,75,517,80C529.2,85,542,139,554,144C566.2,149,578,107,591,85.3C603.1,64,615,64,628,90.7C640,117,652,171,665,192C676.9,213,689,203,702,192C713.8,181,726,171,738,170.7C750.8,171,763,181,775,192C787.7,203,800,213,812,186.7C824.6,160,837,96,849,96C861.5,96,874,160,886,208C898.5,256,911,288,923,288C935.4,288,948,256,960,224C972.3,192,985,160,997,154.7C1009.2,149,1022,171,1034,154.7C1046.2,139,1058,85,1071,69.3C1083.1,53,1095,75,1108,101.3C1120,128,1132,160,1145,144C1156.9,128,1169,64,1182,80C1193.8,96,1206,192,1218,192C1230.8,192,1243,96,1255,53.3C1267.7,11,1280,21,1292,69.3C1304.6,117,1317,203,1329,208C1341.5,213,1354,139,1366,101.3C1378.5,64,1391,64,1403,90.7C1415.4,117,1428,171,1434,197.3L1440,224L1440,320L1433.8,320C1427.7,320,1415,320,1403,320C1390.8,320,1378,320,1366,320C1353.8,320,1342,320,1329,320C1316.9,320,1305,320,1292,320C1280,320,1268,320,1255,320C1243.1,320,1231,320,1218,320C1206.2,320,1194,320,1182,320C1169.2,320,1157,320,1145,320C1132.3,320,1120,320,1108,320C1095.4,320,1083,320,1071,320C1058.5,320,1046,320,1034,320C1021.5,320,1009,320,997,320C984.6,320,972,320,960,320C947.7,320,935,320,923,320C910.8,320,898,320,886,320C873.8,320,862,320,849,320C836.9,320,825,320,812,320C800,320,788,320,775,320C763.1,320,751,320,738,320C726.2,320,714,320,702,320C689.2,320,677,320,665,320C652.3,320,640,320,628,320C615.4,320,603,320,591,320C578.5,320,566,320,554,320C541.5,320,529,320,517,320C504.6,320,492,320,480,320C467.7,320,455,320,443,320C430.8,320,418,320,406,320C393.8,320,382,320,369,320C356.9,320,345,320,332,320C320,320,308,320,295,320C283.1,320,271,320,258,320C246.2,320,234,320,222,320C209.2,320,197,320,185,320C172.3,320,160,320,148,320C135.4,320,123,320,111,320C98.5,320,86,320,74,320C61.5,320,49,320,37,320C24.6,320,12,320,6,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Jumbotron end -->

    <!-- biografi pahlawan -->
    <section id="about">
      <div class="container text-center">
        <div class="row mb-3">
          <div class="col">
            <h2>Sejarah Perang Ambarawa</h2>
            <hr style="height: 4px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(0, 0, 0)" />
          </div>
        </div>
        <div class="row justify-content-around fs-6 text-center">
          <div class="col-5">
            <p class="lead1kiri">
              Sejarah perang Ambarawa atau Palagan Ambarawa adalah suatu peristiwa perlawanan yang dilakukan rakyat kepada sekutu di Ambarawa, Semarang bagian Selatan, Jawa Tengah. Latar belakang pertempuran Ambarawa diawali dari orang –
              orang Indonesia yang menyambut baik kedatangan sekutu terutama oleh pemerintah Jawa Tengah pimpinan Gubernur Mr. Wongsonegoro. Tetapi diketahui kemudian bahwa NICA (Netherlands Indies Civil Administration) ikut masuk dengan
              sekutu dan menjadi penyebab terjadinya pertempuran Ambarawa. Bangsa Indonesia mengetahui bahwa NICA berniat merebut kekuasaan kembali. Situasi memburuk ketika para mantan anggota KNIL yang menjadi tahanan dipersenjatai oleh
              NICA.Belanda merasa masih mempunyai hak berdasarkan perjanjian antara Inggris dan Belanda yang disebut Civil Affairs Agreement pada 24 Agustus 1945. Perjanjian itu mengatur mengenai pemindahan kekuasaan dari British Military
              Administration kepada NICA di Indonesia. Pada 26 Oktober 1945 terjadi insiden di Magelang yang dipicu oleh tentara yang tiba di Magelang. Mereka berdalih akan mengevakuasi tahanan perang, namun justru menduduki Magelang.
              Kemudian terjadi pertempuan antara pasukan TKR resimen Magelang pimpinan Letkol M. Sarbini dengan sekutu yang mencoba melucuti senjata TKR. Pertikaian tersebut reda Ir. Soekarno dan Brigjen Bethell berunding di Magelang pada 2
              November 1945 untuk membahas gencatan senjata kesepakatan penyelesaian pertikaian pada sejarah perang Ambarawa. Isi perjanjian tersebut adalah: Sekutu tetap menempatkan pasukan di Magelang untuk melindungi dan mengurus
              evakuasi para tahanan tawanan Jepang. Gencatan senjata dilakukan sesegera mungkin. Jumlah pasukan Sekutu akan dibatasi sesuai dengan tugasnya masing – masing. Sekutu tidak mengakui aktivitas NICA dan organisasi di bawahnya dan
              NICA dilarang melakukan kegiatan apapun. Jalan raya Ambarawa dan Magelang terbuka sebagai jalur lalu lintas Indonesia dan Sekutu. Pembentukan badan penghubung di Semarang, Ambarawa dan Magelang untuk mengatasi kesulitan yang
              timbul.Pada 20 November 1945 pertempuran kembali terjadi antara TKR pimpinan Mayor Sumarto, rakyat dan tentara Inggris karena perjanjian yang tidak disepakati. Perjanjian justru dimanfaatkan untuk memperkuat posisi sekutu dan
              mendatangkan bala bantuan. Berita akan peristiwa agresi militer di Surabaya pada 10 November, juga insiden tembak menembak yang menewaskan tiga perwira Inggris di Jawa Tengah membuat Brigadir Bethell menyalahkan RI. Pada 18
              Oktober 1945 ia kemudian memerintahkan penangkapan Gubernur Wongsonegoro. Pasukan sekutu di Magelang ditarik untuk memperkuat pertahanan ke Ambarawa pada tanggal 21 November dengan dilindungi pesawat tempur. Pertempuran
              kemudian pecah di dalam kota dan kampung – kampung di sekitar Ambarawa yang dibom sekutu.Pasukan TKR bertahan di kuburan Belanda bersama pasukan pemuda dari Boyolali, Salatiga, dan Kartasura. Mereka membentuk garis pertempuran
              di sepanjang rel kereta Ambarawa. Dari arah Magelang datang pasukan TKR Divisi V/Purwokerto pimpinan Imam Androngi pada melakukan serangan fajar 21 November 1945. Tujuan serangan tersebut adalah untuk memukul mundur pasukan
              Inggris di desa Pingit. Mereka berhasil menduduki desa Pingit dan merebut desa – desa lainnya, kemudian meneruskan pengejaran terhadap sekutu. Pasukan mendapatkan tambahan tiga batalion dari Yogyakarta, yaitu Batalion Sugeng
              10 dipimpin Mayor Soeharto dan Batalion 8 dipimpin Mayor Sardjono. Sekutu yang terkepung mencoba menerobos dengan menggunakan tank dari arah belakang. Pasukan TKR kemudian mundur ke Bedono agar tidak ada korban jiwa.
            </p>
          </div>
          <div class="col-5">
            <p class="lead1kanan">
              Tanggal 21 November 1945 sekutu diam – diam mundur ke Ambarawa dan dikejar oleh resimen Kedu Tengah pimpinan Kolonel M. Sarbini setelah sejarah museum Jenderal Sudirman Magelang dan sejarah museum Jenderal Sudirman Yogyakarta.
              Sekutu karena kembali dihadang oleh pasukan Angkatan Muda pimpinan Oni Sastrofihardjo dan tertahan di Desa Jambu. Pasukan Oni diperkuat oleh tambahan pasukan gabungan dari Ambarawa, Suruh dan Surakarta. Batalyon I
              Sorjosoempeno kembali menghadang sekutu di Ngipik. Para komandan pasukan kemudian melakukan rapat koordinasi dengan pimpinan Kolonel Holland Iskandar dan membentuk komando bernama Markas Pimpinan Pertempuran di Magelang.
              Ambarawa dibagi menjadi empat sektor yaitu utara, selatan, timur dan barat. Kekuatan pasukan tempur akan disiagakan bergantian. Sekutu mencoba menduduki dua desa di sekitar Ambarawa. Pasukan pimpinan Letkol Isdiman berusaha
              membebaskan desa tersebut tetapi sang Letkol tewas. Setelah gugurnya Letkol Isdiman pada 26 November 1945, Kolonel Soedirman langsung turun ke lapangan dan memimpin strategi pertempuran sejarah perang Ambarawa. Kehadiran
              Kolonel Soedirman di lapangan memberikan semangat baru bagi pejuang RI. Bala bantuan kemudian terus berdatangan dari Yogyakarta, Solo, Salatiga, Purwokerto, Magelang, Semarang dan lainnya.Sejarah perang Ambarawa berlangsung
              dari 12 sampai 15 Desember 1945. Pada akhirnya sekutu terdesak dan terusir dari Banyubiru tanggal 5 Desember 1945. Kolonel Sudirman mempelajari situasi medan pertempuran dan mengumpulkan semua komandan sektor pada 11 Desember
              1945. Disimpulkan bahwa sekutu sudah terdesak dan perlu dilakukan serangan terakhir dengan rencana yaitu: Serangan dilakukan secara serentak dan mendadak dari semua sektor. Setiap komandan sektor memimpin pelaksanaan serangan.
              Pasukan badan perjuangan atau laskar menjadi tenaga cadangan. Waktu serangan pada perang Ambarawa akan dilangsungkan pukul 04.30 pagi pada 12 Desember 1945. Pasukan TKR mulai bergerak menuju pos masing – masing dan dalam waktu
              setengah jam berhasil mengepung pasukan musuh di dalam kota. Benteng Willem yang terletak di tengah kota Ambarawa diperkirakan sebagai tempat pertahanan terkuat sekutu. Satu setengah jam pasukan TKR berhasil menguasai jalan
              raya Semarang – Ambarawa. Kolonel Sudirman segera memerintahkan penggunaan taktik Supit Urang berupa pengepungan ganda di kedua sisi musuh. Tujuan pengepungan tersebut untuk memutus komunikasi dan pasokan musuh dari pusat.
              Pada tanggal 14 Desember 1945 pasukan sekutu mulai mundur karena terus disudutkan oleh pasukan RI sehingga persediaan logistik dan amunisi menipis. Tanggal 15 Desember 1945 pukul 17.30 dalam sejarah perang Ambarawa, dampak
              pertempuran Ambarawa dirasakan oleh sekutu ketika Indonesia berhasil merebut Ambarawa dan memukul mereka mundur ke Semarang. Sejarah Monumen Palagan Ambarawa dan sejarah museum Ambarawa berawal dari keinginan mengenang sejarah
              perang Ambarawa dan sejak itu ditetapkan peringatan Hari Jadi TNI AD atau Hari Juang Kartika.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ff0411"
          fill-opacity="1"
          d="M0,128L40,122.7C80,117,160,107,240,122.7C320,139,400,181,480,176C560,171,640,117,720,122.7C800,128,880,192,960,202.7C1040,213,1120,171,1200,176C1280,181,1360,235,1400,261.3L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- biografi pahlawan akhir -->

    <section class="projects" id="projects" style="background-color: #ff0411">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>Foto Sejarah Perang Ambarawa</h2>
            <hr style="height: 4px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(0, 0, 0)" />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-3">
            <div class="card">
              <img src="img/fotosejarah8.png" class="card-img-top" alt="Sejarah 4" width="100" height="250" />
              <div class="card-body">
                <p class="card-text">Foto sejarah Perang Ambarawa di Semarang.</p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <img src="img/fotosejarah8s.png" class="card-img-top" alt="Sejarah 4" width="100" height="250" />
              <div class="card-body">
                <p class="card-text">Foto sejarah Perang Ambarawa di Semarang.</p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <img src="img/fotosejarah8ss.png" class="card-img-top" alt="Sejarah 4" width="100" height="250" />
              <div class="card-body">
                <p class="card-text">Foto sejarah Perang Ambarawa di Semarang.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <a href="#home" class="btn btn-light tombol2"><i class="bi bi-arrow-up-short"></i><br />Kembali Ke Atas</a>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,128L40,122.7C80,117,160,107,240,122.7C320,139,400,181,480,176C560,171,640,117,720,122.7C800,128,880,192,960,202.7C1040,213,1120,171,1200,176C1280,181,1360,235,1400,261.3L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- footer -->
    <footer class="bg-primary text-white text-center pb-5">
      <p style="font-family: itim">All Right Reserved by <a href="#" class="text-white fw-bold"> Researchers</a></p>
    </footer>
    <!-- footer end -->

    <!-- script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
