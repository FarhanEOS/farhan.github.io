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
    <title>Ranggong Daeng Romo</title>
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
        background-color: rgb(64, 34, 233);
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
      <img src="img/pahlawan10.png" alt="" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Ranggong Daeng Romo</h1>
      <p class="lead">1915 - 27 Februari 1947</p>
      <a href="bacabiografi2.php" class="btn btn-light tombol1"><i class="bi bi-arrow-up-short"></i>Lihat Pahlawan Lain</a>
      <a href="#about" class="btn btn-light tombol1">Baca Pahlawan<i class="bi bi-arrow-down-short"></i></a>
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
            <h2>Perjuangan Pahlawan Ranggong Daeng Romo</h2>
            <hr style="height: 4px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(0, 0, 0)" />
          </div>
        </div>
        <div class="row justify-content-around fs-6 text-center">
          <div class="col-5">
            <p class="lead1kiri">
              Ranggong Daeng Romo adalah putra sulung dari Gallarang Moncokomba Mangngulabba Daeng Makkio dan ibunya bernama Bati Daeng Jimo. Ranggong Daeng Romo dilahirkan pada tahun 1915 di Kampung Bone-bone, Bate Moncokomba, distrik
              Polongbangkeng (tepatnya dikecamatan polong bangkeng selatan), Takalar. Dilihat dari segi keturunannya, dia dikenal sebagai seorang bangsawan yang berasal dari golongan progresif dinamis yang tahu mengikuti keinginan dan
              kehendak rakyatnya. Dengan demikian Ranggong Daeng Romo berasal dari keluarga bangsawan di Polongbangkeng. Yang dimana kedua orang tuanya terkenal sebagai dermawan yang kaya serta dihormati dan disegani oleh masyarakatnya.
              Sejak umur 4 tahun Ranggong Daeng Romo telah dimasukkan pada pondok pesantren di Cikoang untuk memperoleh pendidikan agama Islam. Karena kepintarannya dalam membaca Alquran dengan kemahiran tajwidnya, sehingga pada umur 6
              tahun beliau selalu diikutsertakan pada acara tadarrusan yang sekarang lebih dikenal dengan musabaqah tilawatil Alquran. Dari sinilah beliau mempunyai keyakinan bahwa dia harus bekerja keras dan tekun agar dapat tampil dimuka
              umum bahkan ribuan orang. Setelah tamat dari pesantren cikoang beliau kembali bersekolah di Inlandschool di kota Makassar. Selama beliau menjalani sekolah di kota Makassar beliau menumpang kepada keluarga dekatnya yang ada di
              pinggir kota. Berkat ketabahan dan ketekunannya beliau dapat meneyelesaikan di Inlandschool pada tahun 1929. Sebenarnya Ranggong Daeng Romo memenuhi syarat untuk masuk ke sekolah HIS milik belanda yang ada di Makassar, tetapi
              karena pendiriannya yang teguh dan tidak menyukai sekolah milik belanda beliau kemudian pindah ke sekolah partikulir (taman siswa). Pada suatu ketika Ranggong Daeng Romo sedang mengikuti pelajaran di sekolahnya, tiba-tiba
              terjadi penyerangan dari sekolah milik belanda (HIS). Ranggong Daeng Romo yang pada saat itu berada di sekolah melihat langsung kejadian tersebut yang dimana sekolahnya di obrak abrik oleh murid sekolah Belanda. Ranggong Daeng
              Romo yang tidak terima atas kejadian tersebut langsung memimpin teman-temannya untuk menyerang balik. Dan pada kesempatan lain Ranggong Daeng Romo beserta teman-temannya melakukan perlawanan balik kepada sekolah milik
              pemerintahan Kolonial Belanda. Karena keseringan memimpin teman-temannya dalam penyerangan terhadap murid- murid sekolah HIS, akhirnya orang tua Ranggong Daeng Romo dipanggil oleh politie inlichting diest (PID). Bosan dengan
              panggilan tersebut akhirnya orang tua Ranggong daeng Romo memberhentikan sekolah anaknya setalah ia menyelesaikan pelajarannya pada sekolah nasiaonal taman siswa. Setelah Ranggong daeng Romo kembali ke Polongbangkeng dan
              dengan ilmu pengetahuan yang dimilikinya, beliau mendampingi orang tuanya dalam menjalankan roda pemerintahan, serta mengurus sawah dan ladangnya. Dari hasil pertanian dan peternakan inilah banyak memberikan bantuan materi
              terhadap kehidupan perjuangan melawan belanda. Pada usia 18 tahun Ranggong Daeng Romo telah dinikahkan dengan sepupunya yang bernama Bungatubu Daeng Lino, putri Gallarang Bontokadatto Tarasi Daeng Bantang pada tahu 1933. Sejak
              saat itu beliau membantu mertuanya yang sekaligus pamannya dalam tugas pemerintahan sebagai Gallarrang Bontokadatto sampai masa pendaratan Jepang pada tahun 1942. Pada masa kependudukan militer Jepan, Karaeng Polongbangkeng
              Pajonga Daeng Ngalle diangkat sebagai Guncho/setingkat dengan kepala distrik pada masa Belanda, antara tahun 1942-1945. Maka dari itu beberapa pemuda dijadikan sebagai pemimpin Seinendan dan Boe Tei Santai, yang diantaranya
              Makkaraeng Daeng Jarrung, Madina Daeng Ngitung, Ranggong Daeng Romo. Ranggong Daeng Romo selain diangkat sebagai ketua Seinendan juga bekerja pada perseroan Jepang Naiyo Kuhatsu Kabusuki Kaisha (NKK) yaitu perusahaan pembelian
              beras dari militer Jepang di takalar sampai pada tahun 1944. Kebijaksanaan beliau selama bertugas menagani pembelian beras atau padi sangat di junjung tinggi, karena beliau tidak hanya sebagai wakil pemerintah melainkan beliau
              juga sebagai pemimpin masyarakat. Hal ini dibuktikan ketika jepang angkat kaki dari daerah yang di perintahnya, selain itu beliau juga mendapat dukungan besar dari masyarakat terhadap organisasi perjuangan yang dipimpinya.
              Dari tugas-tugas tersebut Ranggong Daeng Romo mendapat banyak kenalan dengan perwira-perwira militer jepang dan dari situlah beliau mendapakan banyak informasi mengenai perkembangan politik dan situasi di tanah air.
            </p>
          </div>
          <div class="col-5">
            <p class="lead1kanan">
              Sembari menjalankan tugas-tuasnya, beliau juga memperdalam ajaran agama Islam terutama yang beraliran modern dan beliau juga memperdalam ilmu politik, sosial, budaya serta mengikuti perkembangan kebangsaan. Dari ilmu-ilmu yang
              didapatnya inilah Ranggong Daeng Romo mengembangkan dan mendidik pemuda-pemuda yang ada di daerahnya dalam rangka memperjuangkan kemerdekaan. Dengan terbentuknya Gerakan Muda Bajeng pada tanggal 16 Oktober 1945 yang memiliki
              tujuan menyatakan bahwa daerah Polongbangkeng adalah wilayah Republik Indonesia. Kemudian, menyelenggarakan pemerintahan setempat secara darurat, sambil menunggu perintah instruksi langsung dari Gubernur DR. Ratulangi. Lalu
              menggalang kesatuan dan persatuan dikalangan tenaga muda untuk bertindak menjaga ketertiban umum dalam daerah terutama mengawasi kaki tangan NICA. Gerakan Muda Bajeng (GMB) yang dipimpin oleh Ranggong Daeng Romo dan
              Syamsudding Daeng Ngerang, berturut-turut melakukan penyerangan diantaranya pada tanggal 26 Desember 1945 ke Makassar dipimpin Syamsuddin Daeng Ngerang, Makkatang Daeng Sibali dan didukung bekas HEIHO serta Seinenda yang
              kurang lebih berjumlah 500 orang pemuda/rakyat dengan sasaran tangsi KIS. Tetapi dalam perjalanannya mereka bertemu dengan petrol KNIL di pinggiran kota (blangbaru) sehingga terjadilah pertempuran yang akhirnya pasukan KNIL
              mengundurkan diri dan lari masuk ke kota, sehingga dua truk patrol NICA yang ditinggalkannya dihancurkan. Selanjutnya pada tahun 1946 tepatnya pada 7 Januari terjadilah pertempuran yang menewaskan duang anggota GMB, sedangkan
              pada pihak musuh tidak ada korban. Pemimpinnya adalah Makkaraeng Daeng Manjarungi. Kemudian pada tanggal 19 Februari pasukan NICA kembali mengadakan penyerangan ke polongbangkeng dengan sasaran pertahanan GMB. Kali ini
              kepemimpinan di bawah Pajonga Daeng Ngalle Karaeng Polongbangkeng yang berhasil memukul mundur pasukan NICA. Serangan yang dua kali berturut-turut itu membuat Ranggong Daeng Romo menyerang Papa-Takalar dengan kuota 100 orang.
              Selain di papa, Ranggong Daeng Romo juga menyerang Bonto Cende, Malaka dan Palleko. Pada 1 Maret 1946 Ranggong daeng Romo kembali memimpin penyerangan di Paririsi yang menewaskan 20 orang. Penyerangan Ranggong Daeng Romo
              terjadi dan terus terjadi hingga tiba pada suatu ketika dirubahnya nama organisasi GMB menjadi Lipang Bajeng. Ide perubahan tersebut berasal dari Ranggong Daeng Romo sendiri yang merasa bahwa wadah GMB tidak lagi memadai
              perjuangan bersenjata karena sebagian tokohnya telah tertawan seperti, H. Madiana Daeng Ngitung, Fachruddin Daeng Romo dan Syamsuddin Daeng Ngerang. Beradasarkan pertimbangan tersebut maka pada tanggal 2 April 1946 dibentuklah
              kelaskaran Lipang Bajeng yaitu Lambang Kerajaan Anak Bajeng. Jumlah anggota Lipang Bajeng tercatat 57.329 orang yang tersebar dibeberapa kubu pertahanan seperti Gowa, Jeneponto, Takalar, dan kota Makassar dengan pusat
              markasnya di Polongbangkeng. Setelah pembentukannya LasKar Lipang Bajeng, tidak henti-hentinya mendapat tekanan berat dari NICA. Mulai dari Gowa, Saluki, Baba, Bananneng dan Bangkala. Selama bulan Juni tersebut selalu terjadi
              kontak senjata antar musuh di parambangan dan moncong.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#99ffff"
          fill-opacity="1"
          d="M0,128L40,122.7C80,117,160,107,240,122.7C320,139,400,181,480,176C560,171,640,117,720,122.7C800,128,880,192,960,202.7C1040,213,1120,171,1200,176C1280,181,1360,235,1400,261.3L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- biografi pahlawan akhir -->

    <section class="projects" id="projects" style="background-color: #99ffff">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>Foto Tentang Pahlawan Ranggong Daeng Romo</h2>
            <hr style="height: 4px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(0, 0, 0)" />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-3">
            <div class="card">
              <img src="img/pahlawan10.png" class="card-img-top" alt="Pahlawan 10" width="100" height="250" />
              <div class="card-body">
                <p class="card-text">Foto Ranggong Daeng Romo</p>
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
