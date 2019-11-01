<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data BMKG Malang</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
    body {
      padding-top: 70px;
      background: #98ECE5;
    }

    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
    }
  </style>

  
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="https://karangploso.jatim.bmkg.go.id/" target="_blank">BMKG MALANG</a>
      </div>

     

        <ul class="nav navbar-nav navbar-right">
          <?php
          if($_SESSION['user']){
            echo '<li><a href="profile.php">Profile</a></li>';
            echo '<li><a href="logout.php" onclick="return confirm(\'Yakin?\')">Logout</a></li>';
          }else{
            echo '<li><a href="login.php">Login</a></li>';
          }
          ?>
         <li><a href="https://karangploso.jatim.bmkg.go.id/" target="_blank">Visit Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container container-body text-center">
    <h1>Selamat datang!</h1>
    <hr align="right">
   <img src="images/download.png">
    <p><div class="text-justify">
      Sejarah pengamatan meteorologi dan geofisika di Indonesia dimulai pada tahun 1841 diawali dengan pengamatan yang dilakukan secara perorangan oleh Dr. Onnen, Kepala Rumah Sakit di Bogor. Tahun demi tahun kegiatannya berkembang sesuai dengan semakin diperlukannya data hasil pengamatan cuaca dan geofisika.

Pada tahun 1866, kegiatan pengamatan perorangan tersebut oleh Pemerintah Hindia Belanda diresmikan menjadi instansi pemerintah dengan nama Magnetisch en Meteorologisch Observatorium atau Observatorium Magnetik dan Meteorologi dipimpin oleh Dr. Bergsma.

Pada tahun 1879 dibangun jaringan penakar hujan sebanyak 74 stasiun pengamatan di Jawa. Pada tahun 1902 pengamatan medan magnet bumi dipindahkan dari Jakarta ke Bogor. Pengamatan gempa bumi dimulai pada tahun 1908 dengan pemasangan komponen horisontal seismograf Wiechert di Jakarta, sedangkan pemasangan komponen vertikal dilaksanakan pada tahun 1928.

Pada tahun 1912 dilakukan reorganisasi pengamatan meteorologi dengan menambah jaringan sekunder. Sedangkan jasa meteorologi mulai digunakan untuk penerangan pada tahun 1930.

Pada masa pendudukan Jepang antara tahun 1942 sampai dengan 1945, nama instansi meteorologi dan geofisika diganti menjadi Kisho Kauso Kusho.

Setelah proklamasi kemerdekaan Indonesia pada tahun 1945, instansi tersebut dipecah menjadi dua: Di Yogyakarta dibentuk Biro Meteorologi yang berada di lingkungan Markas Tertinggi Tentara Rakyat Indonesia khusus untuk melayani kepentingan Angkatan Udara. Di Jakarta dibentuk Jawatan Meteorologi dan Geofisika, dibawah Kementerian Pekerjaan Umum dan Tenaga.

Pada tanggal 21 Juli 1947 Jawatan Meteorologi dan Geofisika diambil alih oleh Pemerintah Belanda dan namanya diganti menjadi Meteorologisch en Geofisiche Dienst. Sementara itu, ada juga Jawatan Meteorologi dan Geofisika yang dipertahankan oleh Pemerintah Republik Indonesia, kedudukan instansi tersebut di Jl. Gondangdia, Jakarta.

Pada tahun 1949, setelah penyerahan kedaulatan negara Republik Indonesia dari Belanda, Meteorologisch en Geofisiche Dienst diubah menjadi Jawatan Meteorologi dan Geofisika dibawah Departemen Perhubungan dan Pekerjaan Umum. Selanjutnya, pada tahun 1950 Indonesia secara resmi masuk sebagai anggota Organisasi Meteorologi Dunia (World Meteorological Organization atau WMO) dan Kepala Jawatan Meteorologi dan Geofisika menjadi Permanent Representative of Indonesia with WMO.

Pada tahun 1955 Jawatan Meteorologi dan Geofisika diubah namanya menjadi Lembaga Meteorologi dan Geofisika di bawah Departemen Perhubungan, dan pada tahun 1960 namanya dikembalikan menjadi Jawatan Meteorologi dan Geofisika di bawah Departemen Perhubungan Udara.

Pada tahun 1965, namanya diubah menjadi Direktorat Meteorologi dan Geofisika, kedudukannya tetap di bawah Departemen Perhubungan Udara.Pada tahun 1972, Direktorat Meteorologi dan Geofisika diganti namanya menjadi Pusat Meteorologi dan Geofisika, suatu instansi setingkat eselon II di bawah Departemen Perhubungan, dan pada tahun 1980 statusnya dinaikkan menjadi suatu instansi setingkat eselon I dengan nama Badan Meteorologi dan Geofisika, dengan kedudukan tetap berada di bawah Departemen Perhubungan.Pada tahun 2002, dengan keputusan Presiden RI Nomor 46 dan 48 tahun 2002, struktur organisasinya diubah menjadi Lembaga Pemerintah Non Departemen (LPND) dengan nama tetap Badan Meteorologi dan Geofisika.

Terakhir, melalui Peraturan Presiden Nomor 61 Tahun 2008, Badan Meteorologi dan Geofisika berganti nama menjadi Badan Meteorologi, Klimatologi, dan Geofisika (BMKG) dengan status tetap sebagai Lembaga Pemerintah Non Departemen.Pada tanggal 1 Oktober 2009 Undang-Undang Republik Indonesia Nomor 31 Tahun 2009 tentang Meteorologi, Klimatologi dan Geofisika disahkan oleh Presiden Republik Indonesia, Susilo Bambang Yudhoyono. (unduh Penjelasan UU RI Nomor 31 Tahun 2009)</p></div>

    <hr>
    <center>copyright &copy; 2019 <a href="https://karangploso.jatim.bmkg.go.id/" target="_blank">BMKG MALANG</a></center>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>