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
    <title>Robert Walter Mongisidi</title>
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
        background-color: rgb(34, 233, 183);
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
      <img src="img/pahlawan11.png" alt="" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Robert Walter Mongisidi</h1>
      <p class="lead">14 Februari 1925 - 5 September 1949</p>
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
            <h2>Perjuangan Pahlawan Robert Walter Mongisidi</h2>
            <hr style="height: 4px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(0, 0, 0)" />
          </div>
        </div>
        <div class="row justify-content-around fs-6 text-center">
          <div class="col-5">
            <p class="lead1kiri">
              Robert Walter Monginsidi bersama dengan Maulwi Saelan dan kawan-kawannhya memimpin Barisan Angkatan Muda Pelajar yang bertindak dengan keberanian di tengah-tengah pasukan Belanda. Pada tanggal 17 Oktober 1945, seluruh kekuatan
              pemuda pejuang di Ujung Pandang dipusatkan untuk mengadakan serangan umum. Robert Walter Monginsidi juga ikut mengambil peranan penting. Para pemuda pejuang akan merebut tempat-tempat strategis, bangunan-bangunan vital dan
              gedung-gedung penting yang telah diduduki tentara Belanda. Mereka akan menyerbu Stasiun Pemancar Radio Makasar, Tangsi Belanda di Mariso, Stasiun Radio di Mattoanging, Stasiun Radio di Mara Dekaya, Tangsi dan Kantor Polisi
              NICA. Robert Walter Monginsidi dan kawan-kawannya para pelajar SMP mendapat tugas menyerbu Hotel Empresdadn menagkapi para perwira Belanda, mereka juga bertugas membuat barikade di jalan-jalan. Tepat jam 05.00 pagi, tanggal 20
              Oktober 1945 mulai terdengar tembak-menembak di jalan Gowa. Pagi itu sudah terjadi pertempuran di seluruh penjuru kota Ujung Pandang. Stasiun radio di Mattoanging dan Maradekaya telah dapat dikuasai para pemuda. Mula-mula
              pasukan Australia yang bersenjata lengkap itu bersikap menonton saja. Mereka tidak berbuat apa-apa. Tetapi pasukan Belanda berhasil membujuk dan mempengaruhi pasukan Australia. Akhirnya pasukan Australia ikut campur melawan
              serbuan para pejuang. Merek menyerbu markas pejuang di Jonggaya pada siang hari jam 11.00. pasukan Australia memmiliki senjata lengkap dan modern, sedangkan pemuda pejuang bersenjata sederhana dan seadanya. Tentu saja sungguh
              berat melawan pasukan Australia itu. Meskipun demikian para pemuda melawan dengan semangat tinggi. Dalam pertempuran itu banyak pemuda pejuang yang gugur, dan 46 pemuda ditangkap tentara Sekutu (Australia) termasuk Robert
              Walter Monginsidi. Beruntunglah Robert Walter Monginsidi mahir berbahasa asing dan dengan kepandaiannya berdiplomasi, Robert Walter Monginsidi dapat meyakinkan para perwira Australia itu bahwa mereka itu adalah pemuda pejuang
              yang sedang menegakkan kemerdekaan bangsa dan tanah airnya, akhirnya mereka yang ditangkap itu dibebaskan. Sementara itu pasukan NICA Belanda terus melancarkan pengejaran terhadap para pejuang, terpaksalah para pejuang
              mengundurkan diri dari kota dan membentuk markas-markas di daerah-daerah seperti Plongbangkeng, Jeneponto, Bulukumba, Bantaeng, Palopo, Kolaka, Majene, Enrekang dan Pare-Pare. Dari markas-markas daerah itu, seringkali pemuda
              memasuki kota mengadakan aksi penyerangan. Mereka menculik dan membunuh mata-mata kaki tangan Belanda, sebaliknyha pasukan Belanda sering pula melancarkan serangan ke daerah-daerah untuk menghajar dan menghancurkan kekuatan
              pemuda. Diantara para pejuang itu, maka para pelajar SMP Nasional yang menduduki tempat dan memperoleh nama yang baru. Mereka seringkali mengadakan gerakan yang merugikan pasukan Belanda terutama sekali pemuda Robert Walter
              Monginsidi. Ia sangat berani dan bergerak sangat lincah, karena itu menjadi sasaran pasukan Belanda. Robert Walter Monginsidi menggabungkan diri pada pasukan Ronggeng Daeng Rono yang bermarkas di Plongbangkeng. Ia bertugas
              sebagai penyidik, karena mahir berbahasa asing dan mempunyai wajah yang mirip orang Indo-Belanda. Robert Walter Monginsidi sering kali memasuki kota Ujung Pandang seorang diri, ia menyamar sebagai anggota tentara Belanda,
              ditengah jalan ia menghentikan Jeep tentara Belanda lalu ikut menumpang. Di tengah jalan Robert Walter Monginsidi segera menodongkan pistolnya kea rah pengemudi yang dibuatnya tidak berdaya, senjatanya dirampas dan demikian
              pula mobilnya. Pada hari yang lain ia memasuki markas Polisi Militer Belanda dan menempelkan plakat berisi ancaman yang ditanda-tanganinya sendiri. Dapatlah dibayangkan betapa terkejutnya tentara Belanda itu. Nama Robert
              Walter Monginsidi bagaikan hantu yang sangat ditakuti oleh pasukan Belanda.Robert Walter Monginsidi tidak tinggal di markas saja, tetapi ia langsung memberi contoh di lapangan, ia bergerak di sekitar kota Makasar (Ujung
              Pandang), Woga, Jeneponto, Malino dan Camba. Wolter sendiri langsung memimpin pasukan Harimau Indonesia (HI). Pada tanggal 3 November 1946, dalam suatu pertempuran di kota Barombong, Robert Walter Monginsidi terluka dan
              terpaksa mengundurkan diri untuk sementara. Sesudah sembuh, ia kembali melakukan aksi-aksi penyerangan lagi. Pada tanggal 21 Januari 1947, di Kassi-Kassi, terjadi pertempuran, disini gugur Emmi Saelan seorang pejuang putri
              yang sempat menewaskan delapan orang tentara Belanda dengan granat yang diledakkannya, tetapi Robert Walter Monginsidi dapat meloloskan diri dari kepungan Belanda yang ketat itu. Belanda makin gentar menghadapi Robert Walter
              Monginsidi, mereka memberi pengumuman, siapa yang dapat menangkap Robert Walter Monginsidi hidup atau mati, akan diberikan hadiah, tetapi Robert Walter Monginsidi tidak pernah berhasil ditangkap. Pasukan Belanda makin hari
              makin memperkuat penekanannya terhadap para pemuka pejuang. Banyak diantara mereka yang tertangkap, gugur atau meninggalkan Sulawesi Selatan menuju Pulau Jawa. Jumlah pemuda pejuang makin tipis, tetapi Robert Walter Monginsidi
              tetap berdiri dengan teguh, “Saya berani berjuang untuk nusa dan bangsa, karena itu pula saya harus berani menanggung akibatnya”. Ia tetapi kuat dengan pendiriannya bahkan ia sering berjuang seorang diri mengacau pasukan
              Belanda yang terlatih dengan modern itu. Pasukan Belanda makin mengganas untuk menekan perlawanan dan perjuangan rakyat Sulawesi Selatan, Belandan melakukan pembunuhan besar-besaran yang dipimpin oleh Algojo yang terkenal
              bengisnya, yaitu Kapten Raymond Paul Pierre Westerling. Belanda mengancam, barang siapa yang menyembunyikan, membantu dan melindungi kaum pejuang yang bergerilya di daerah, maka mereka kan dibunuh. Puncak tindakan
              sewenang-wenang Westerling telah terjadi pada bulan Desember 1946. Mereka melakukan pembersihan dengan cara besar-besaran dan tanpa peri-kemanusiaan sehingga puluhan ribu rakyat tua-muda, laki, perempuan yang terbunuh secara
              massal, tidak kurang dari 40.000 jiwa telah menjadi korban keganasan pasukan Westerling selama waktu itu. Selama itu Robert Walter Monginsidi selalu dapat meloloskan diri dari kepungan pasukan Belanda.
            </p>
          </div>
          <div class="col-5">
            <p class="lead1kanan">
              Namun pada tanggal 28 Februari 1947 merupakan hari naas baginya. Pada hari itu Robert Walter Monginsidi tertangkap oleh pasukan Belanda dan kemudian dimasukkan ke penjara di Hoogepod Ujung Pandang. Di penjara itu Belanda
              membujuknya agar melepaskan perjuangannya dan kalau bersedia akan diberi hadiah-hadiah dan kedudukan y ang menggiurkan. Tetapi Wolter tetap menolak, ia berkata “Tetap setia pada cita-cita Proklamasi 17 Agustus 1945. Berani
              berjuang untuk kepentingan nusa dan bangsa dan berani pula menanggung segala akibatnya”. Sementara itu kawan-kawan Wolter di luar berjuang keras untuk membebaskannya dari penjara. Mereka menyelundupkan 2 buah granat tangan
              yang dimasukkan ke dalam makanan kiriman. Bersama dengan Abdullah, Lahade, Yoseph dan Lewa Daeng Matari, Robert Walter Monginsidi dengan bersenjatakan 2 granat berhasil lolos dari penjara dengan melalui atap dapur pada tanggal
              19 Oktober 1946. Alangkah marahnya pasukan Belanda melihat sel-sel penjara tempat Wolter dan kawan-kawannya itu sudah kosong, mereka lalu mengerahkan segenap kemampuannya untuk mencari Wolter. Rupanya sudah ketentuan Tuhan
              Yang maha Esa, hanya sembilan hari Robert Walter Monginsidi dapat menghirup udara kemerdekaan. Pada jam 05.00 pagi hari tanggal 26 Oktober 1948 selagi Wolter berada di Klapperkan Lorong 22 A No. 3, Kampung Maricayya, Ujung
              Pandang, ia disergap oleh pasukan Belanda, karena ada yang mengkhianatinya. Wolter dimasukkan lagi dalam penjara Polisi Militer Belanda dan dijaga dengan sangat ketat, Belanda tidak ingin Harimau Indonesia ini lepas untuk
              kedua kalinya dari penjara. Mereka menyiksa Wolter dengan berbagai cara, tetapi tetap teguh pada pendiriannya. Ia adalah seorang pemimpin sejati. Semua tindakan kawan-kawannya diakui sebagai tanggung jawabnya. Kemudian Wolter
              dipindahkan ke penjara KIS (Kiskampement). Sungguh luar biasa, walaupun Wolter mengetahui apa yang akan terjadi dengan dirinya, dan hukuman apa yang akan diterimanya, namun ia tetap tabah dan tampak ketenangan jiwanya. Robert
              Walter Monginsidi adalah pemeluk agama Kristen, sejak kecil ia sudah mendapatkan bekal dan bimbingan iman kepada Tuhan Yang Maha Kuasa. Pengaruh iman dan agama itu terlihat betul pada Wolter yang baru berusia 23 tahun. Ia
              semakin tenang dan bertawakal, sama sekali tidak terlihat rasa takut dan kegoncangan jiwanya. Ia banyak membaca dan menulis surat pada masa itu. Wolter bersikap pasrah, keikhlasannya terlukis dalam kata-katanya “Aku telah
              relakan diriku untuk menjadi korban dengan keinsyafan untuk memenuhi kewajiban dengan masyarakat ini dan yang akan datang”. Tentu saja ia mengalami pemeriksaan Polisi Militer Belanda dengan caranya yang keras dan kejam, namun
              Wolter tak gentar oleh ancama dan siksaan. Tekadnya telah bulat, bahwa ia berani menanggung segala akibat perjuangannya, “Dan saya tunduk pada bathin saya”, katanya. Pada tanggal 26 Maret 1949, Wolter diajukan ke muka
              pengadilan Kolonial Belanda. Pada akhirnya ia dijatuhi hukuman mati, tetapi Wolter tetap tabah dan berjiawa kstaria, ia berkata “Aku tidak mengandung perasaan tidak baik terhadap siapapun, juga terhadap mereka yang menjatuhkan
              hukuman yang paling berat ini kepadaku, karena kupikir mereka tidak mengetahui apa yang mereka kerjakan”. Wolter benar-benar bersikap ikhlas pada nasib dan perjuangannya. Ia meninggalkan ucapan “Apa yang bisa saya tinggalkan
              hanya rokh ku saja yaitu rokh setia hingga terakhir pada tanah air dan tidak mundur sekalipun, menemui rintangan apapun menuju cita-cita kebangsaan yang tetap. Terbatas dari segala pikiran ini, junjunganku senantiasa Tuhan
              Yang Maha Kuasa, dan dengan kepercayaan yang disebut belakangan ini, sangguplah saya tahan segala-galanya, teguh iman di dalam kesukaran, tenang ketika keadaan sederhana dan tidak melupakan kenalan-kenalan jika berada dalam
              kemajuan”. Robert Walter Monginsidi telah diputuskan oleh kolonial Belanda untuk dijatuhi hukuman mati, berbagai pihak menganjurkan agar ia meminta pengampunan atau grasi kepada pemerintah Belanda bahkan secara diam-diam
              ayahnya sendiri, terdorong oleh rasa kasih sayang kepada puteranya, telah memintakan grasi. Tetapid Robert Walter Monginsidi sendiri telah menolak untuk meminta grasi itu. Ia sudah benar-benar merelakan akibat dari
              perjuangannya itu. Ternyata pemerintah Belanda memang menolak grasi tersebut. Robert Walter Monginsidi sendiri setelah mendengar grasi itu ditolak tetap tenang. Ia berkata “Memang betul, bahwa ditembak bagi saya berarti ada
              kemenangan bathin, dan dihukum apapun tidak ada membelenggu jiwa sebab kegembiraan di dalam keyakinan sendiri memang adalah luas”. Akhirnya Robert Walter Monginsidi ditembak mati dihadapan regu tembak pada tanggl 5 September
              1949 dini hari, disuatu tempat di daerah Pacinang, wilayah Talo Kecamatan Panakukang, delapan kilometer jauhnya dari kota Ujung Pandang. Ia adalah seorang pahlawan bangsa, ia ditembak tanpa ditutup matanya, dengan memegang
              kitab injil di tangan kirinya dan tangan kanannya mengepalkan tinju sambil berteriak “MERDEKA ATAU MATI”, lima menit sebelum Pahlawan Robert Walter Monginsidi masih dengan tenang menulis kalimat penghabisan sebagai pesan
              kepada generasi penerus bangsa “SETIA HINGGA TERAKHIR DALAM KEYAKINAN”. Ditanda-tangani 5 September 1949.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#cc9933"
          fill-opacity="1"
          d="M0,128L40,122.7C80,117,160,107,240,122.7C320,139,400,181,480,176C560,171,640,117,720,122.7C800,128,880,192,960,202.7C1040,213,1120,171,1200,176C1280,181,1360,235,1400,261.3L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- biografi pahlawan akhir -->

    <section class="projects" id="projects" style="background-color: #cc9933">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>Foto Tentang Pahlawan Robert Walter Mongisidi</h2>
            <hr style="height: 4px; border-width: 0; color: rgb(0, 0, 0); background-color: rgb(0, 0, 0)" />
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-3">
            <div class="card">
              <img src="img/pahlawan11.png" class="card-img-top" alt="Pahlawan 11" width="100" height="250" />
              <div class="card-body">
                <p class="card-text">Foto Robert Walter Mongisidi</p>
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
