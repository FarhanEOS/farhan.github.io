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
    <title>Opu Daeng Risadju</title>
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
        background-color: rgb(34, 233, 200);
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
      <img src="img/pahlawan7.png" alt="" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Opu Daeng Risadju</h1>
      <p class="lead">1880 - 10 Februari 1964</p>
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
            <h2>Perjuangan Pahlawan Opu Daeng Risadju</h2>
            <hr style="height: 4px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(0, 0, 0)" />
          </div>
        </div>
        <div class="row justify-content-around fs-6 text-center">
          <div class="col-5">
            <p class="lead1kiri">
              Opu Daeng Risadju merupakan pejuang perempuan dari Sulawesi Selatan yang mendapat penyiksaan hingga tuli seumur hidup. Dia adalah pejuang wanita asal Sulawesi Selatan yang menjadi Pahlawan Nasional Indonesia. Opu Daeng Risadju
              memiliki nama kecil Famajjah. Opu Daeng Risaju itu sendiri merupakan gelar kebangsawanan Kerajaan Luwu yang disematkan pada Famajjah yang memang merupakan anggota keluarga bangsawan Luwu.Pendidikan Opu Daeng Risaju lebih
              ditekankan pada persoalan yang menyangkut ajaran dan nilai-nilai moral baik yang berlandaskan budaya maupun agama. Ia juga mendapatkan pendidikan mengenai tata cara kehidupan bangsawan baik di dalam istana maupun di luar
              lingkungan istana, sebagaimana yang berlaku dalam tradisi keluarga bangsawan. Opu Daeng Risadju juga mendapatkan pengajaran terkait tata cara kepemimpinan, bergaul, berbicara, dan memerintah rakyat kebanyakan. Selain
              mempelajari moral yang berlandaskan adat kebangsawanan, Opu Daeng Risadju juga mempelajari peribadatan dan akidah dalam agama Islam. Dalam tradisi Luwu itu sendiri, agama dan budaya merupakan satu kesatuan. Karenanya, sejak
              kecil Opu Daeng Risadju terbiasa membaca Alquran hingga tamat dan mempelajari ilmu-ilmu keagamaan seperti nahwu, syaraf dan balagah. Opu Daeng Risadju juga mempelajari fiqih dari buku karangan Khatib Sulaweman Datuk Patimang,
              salah seorang tokoh penyebar agama Islam di Sulawesi Selatan. Opu Daeng Risadju tidak sendiri dalam mempelajari Islam, melainkan dibimbing juga oleh seorang ulama. Suami Opu Daeng Risaju, H. Muhammad Daud, merupakan seorang
              ulama yang pernah bermukim di Makkah. Suami Opu Daeng Risadju ini merupakan anak dari rekan dagang ayahnya. H. Muhammad Daud kemudian diangkat menjadi imam Masjid istana Kerajaan Luwu karena menikah dengan keluarga bangsawan
              dan memiliki pengetahuan yang luas tentang agama. Opu Daeng Risadju juga merupakan wanita yang aktif dalam Partai Syarekat Islam Indonesia (PSII). Beliau kemudian mendirikan cabang PSII Palopo yang diresmikan pada 14 Januari
              1930. Opu Daeng Risadju terpilih sebagai ketua PSII Palopo dalam rapat akbar yang dihadiri aparat pemerintah Kerajaan Luwu, pengurus PSII pusat, pemuka masyarakat, masyarakat umumnya, hingga pengurus PSII pusat yaitu
              Kartosuwiryo.Akan tetapi, pada masa pendudukan Jepang, tidak banyak kegiatan yang Opu Daeng Risadju lakukan di PSII. Ini disebabkan karena pemerintahan Jepang melarang adanya kegiatan politik Organisasi Pergerakan Kebangsaan,
              termasuk PSII. Opu Daeng Risadju mulai kembali aktif pada masa revolusi di Luwu. Revolusi ini diawali dengan kedatangan Netherlands Indies Civil Administration (NICA) di Sulawesi Selatan yang berkeinginan untuk menajajah
              kembali Indonesia. Pemberontakan terhadap NICA mulai terjadi pada saat tentara NICA menggeledah rumah Opu Gawe untuk mencari senjata, akan tetapi tidak menemukannya. Merasa tidak puas dengan ini, tentara NICA kemudian
              mendatangi masjid dan menginterogasi orang-orang di dalam Masjid. Akan tetapi, karena masih belum mendapatkan jawaban yang memuaskan, NICA memutuskan untuk mengobrak-abrik masjid bahkan menginjak Alquran. Melihat hal ini, para
              pemuda memberikan ultimatum kepada tentara NICA di Palopo untuk segera kembali ke tangsinya dan tidak berkeliaran di kota. Karena ultimatum ini tidak digubris oleh tentara NICA, timbullah konflik senjata yang sangat besar
              antara tentara NICA dan para pemuda pada tanggal 23 Januari 1946.
            </p>
          </div>
          <div class="col-5">
            <p class="lead1kanan">
              Konflik senjata ini kemudian merambat ke kota-kota lainnya di Palopo, salah satunya ialah kota Beloppa tempat Opu Daeng Risadju tinggal. Peran Opu Daeng Risadju dalam perlawanan terhadap tentara NICA di Belopa sangatlah besar.
              Opu Daeng Risadju membangkitkan dan memobilisasi para pemuda untuk melakukan perlawanan terhadap tentara NICA. Tindakan ini membuat tentara NICA kewalahan dan mengupayakan berbagai cara untuk menangkap dan menghentikan aksi
              Opu Daeng Risadju. Tentara NICA bahkan membuat pengumuman yang menyatakan bahwa pihak tentara NICA akan memberikan imbalan pada siapa pun yang dapat menangkap Opu Daeng Risadju yang kala itu sedang bersembunyi, baik dalam
              keadaan hidup atau pun mati. Akan tetapi, tak ada satu orang pun yang menggubris pengumuman tersebut. Opu Daeng Risadju kemudian tertangkap oleh tentara NICA di Lantoro dan dibawa menuju Watampone dengan cara berjalan kaki
              sepanjang 40 Km. Opu Daeng Risadju lalu ditahan di penjara Bone selama satu bulan tanpa diadili, kemudian dipindahkan ke penjara Sengkan, lalu dipindahkan lagi ke Bajo. Saat di Bajo, Opu Daeng Risadju mengalami penyiksaan oleh
              Kepala Distrik Bajo, Ladu Kalapita. Di sana, Opu Daeng Risadju dibawa ke sebuah lapangan dan dipaksa untuk berdiri tegap menghadap matahari. Kalapita lalu mendekati Opu Daeng Risadju yang kala itu berusia 67 tahun dan
              meletakkan laras senapannya pada pundak Opu Daeng Risadju. Kalapita kemudian meletuskan senapannya dan mengakibatkan Opu Daeng Risadju jatuh tersungkur di antara kedua kaki Kalapita yang masih berusaha menendangnya. Setelah
              penyiksaan itu, Opu Daeng Risadju kembali dimasukkan ke dalam sebuah tempat yang mirip penjara darurat bawah tanah. Akibat penyiksaan yang dilakukan Kalapita ini, Opu Daeng Risadju menjadi tuli seumur hidup. Opu Daeng Risadju
              kemudian dibebaskan tanpa diadili setelah 11 bulan menjalani tahanan dan kembali ke Bua dan menetap di Belopa. Pada tahun 1949, setelah kedaulatan RI mendapat pengakuan, Opu Daeng Risadju pindah ke Pare-Pare mengikuti anaknya
              Haji Abdul Kadir Daud. Dalam PSII pun Haji Abdul Kadir Daud tak lagi aktif sejak 1950 dan hanya menjadi sesepuh di organisasi tersebut. Opu Daeng Risadju wafat di usianya yang ke 84, tepatnya pada 10 Februari 1964.
              Pemakamannya dilakukan di perkuburan raja-raja Lokkoe di Palopo tanpa ada upacara kehormatan, sebagaimana yang biasanya dilakukan terhadap sosok pahlawan yang gugur.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#33cc00"
          fill-opacity="1"
          d="M0,128L40,122.7C80,117,160,107,240,122.7C320,139,400,181,480,176C560,171,640,117,720,122.7C800,128,880,192,960,202.7C1040,213,1120,171,1200,176C1280,181,1360,235,1400,261.3L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- biografi pahlawan akhir -->

    <section class="projects" id="projects" style="background-color: #33cc00">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>Foto Tentang Pahlawan Opu Daeng Risadju</h2>
            <hr style="height: 4px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(0, 0, 0)" />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-3">
            <div class="card">
              <img src="img/pahlawan7.png" class="card-img-top" alt="Pahlawan 7" width="100" height="250" />
              <div class="card-body">
                <p class="card-text">Foto Opu Daeng Risadju</p>
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
