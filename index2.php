<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
  <title>Lab. Teknik Informatika Unmul</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="lib-w/css/bootstrap.min.css" >
  <link rel="stylesheet" href="lib-w/css/styles.css">
  <link rel="stylesheet" href="lib-w/css/queries.css">
  <link rel="stylesheet" href="lib-w/css/font-awesome.css" >
  <link rel="stylesheet" href="lib-w/css/style.default.css" >
<!-- Fonts 
<link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'> -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
  <header class="clearfix">
    <div class="logo col-md-3"><h2 class="logo-text">TEKNIK INFORMATIKA </h2></div>
    <nav class="clearfix">
      <ul class="clearfix">
        <li><a href="#" class="active last">WEB LAB</a></li>
        <li><a href="daftar-mhs.php" >Daftar Mahasiswa</a></li>
        <li><a href="informasi.php" >Informasi</a></li>
      </ul>
    </nav>
    <div class="pullcontainer">
      <a href="#" id="pull"><i class="fa fa-bars fa-2x"></i></a>
    </div>     
  </header>
  <div class="banner">
    <ul>
      <li style="background-image: url('lib-w/img/back.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="hero-title">
                Sistem Layanan Praktikum
              </div>
              <p class="hero-content">Teknik Informatika Universitas Mulawarman</p>
              <a href="#" class="hero-btn">2014</a>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>

</div>


<div class="container-fluid">

  <!--left-->
  <div class="col-sm-2">
    <center><h3 style="color:#242A2C;">Menu</h3></center>
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Registrasi</strong></div>
      <div class="panel-body">
        <div class="menu_simple">
          <ul>
            <li><a href="#">Registrasi</a></li>
            <li><a href="#">Daftar Mahasiswa</a></li>
            <li><a href="#">Kartu Kontrol</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="dropdown">
      <ul class="dropdown-menu">
        <li>cek</li>
      </ul>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading"><strong>Penjadwalan</strong></div>
      <div class="panel-body">
        <div class="menu_simple">
          <ul>
            <li><a href="#">Jadwal</a></li>
            <li><a href="#">Cetak Jadwal</a></li>
            <li><a href="#">Praktikum</a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Modul</strong></div>
      <div class="panel-body">
        <div class="menu_simple">
          <ul>
            <li><a href="#">Upload</a></li>
            <li><a href="#">Download</a></li>
          </ul>
        </div>
      </div>
    </div>
    <hr>
  </div>




  <!--center-->
  <div class="col-sm-7">
    <div class="row">
      <div style="background:#63c6ae;color:#ffffff;">
        <blockquote> <h1>Pengumuman dan Informasi</h1> </blockquote>
      </div>
      <div class="col-xs-12">
        <p class="pull-right"><span class="label label-default">12 Januari 2015</span></p>
        <h2>Penilaian Praktikum</h2>
        <p>Nilai dapat langsung di lihat melalui website ini.</p>
        <p class="lead"><button class="btn btn-default"><a href=index.php>Baca ..</button></p>
      </div>
    </div>
    <hr>

    <div class="row">
      <div class="col-xs-12">
        <p class="pull-right"><span class="label label-default">10 Januari 2015</span></p>
        <h2>Pendaftaran Mahasiswa Praktikum</h2>
        <p>Sebaga mahasiswa aktif ftikom unmul dan mengambil mata kuliah yang memiliki praktikum, wajib mendaftarkan dirinya dalam sistem portal praktikum berbasis website. Hanya dapat diakses secara lokal dengan mengkoneksikan perangakat ke wifi kampus.</p>
        <p class="lead"><button class="btn btn-default">Baca ..</button></p>
      </div>
    </div>
    <hr>      
  </div>

  <!--right-->
  <div class="col-sm-3">
    <br>
    <div class="panel panel-default">
      <div class="panel-heading"><strong>Login</strong> </div>
      <div class="panel-body">
        <form method="post" action="mhs/index.php">


          <div class="mb10">
            <label class="control-label">Username</label>
            <input type="text" class="form-control" placeholder="username" />
          </div>

          <div class="mb10">
            <label class="control-label">Password</label>
            <input type="password" class="form-control" placeholder="password" />
          </div>
          <p class="mt5 mb20" style="margin:0 0 15px 0; font-size:12px;">- atur jadwal & cetak kartu responsi.</p>
          <button class="btn btn-info btn-block">Login</button>     
        </form>
      </div>
    </div>
    <hr>
    <div class="panel panel-default">
      <div class="panel-body">Content here..</div>
    </div>
    <hr>
    <div class="panel panel-default">
      <div class="panel-heading">Share Link</div>
      <div class="panel-body"><a href="#">behance.net</a></div>
    </div>
    <hr>
    <div class="panel panel-default">
      <div class="panel-body">Content here..</div>
    </div>
    <hr>
  </div><!--/right-->
  <hr>
</div><!--/container-fluid-->


<?php
include 'daftar-mhs.php';
?>

<div class="text-inter">
  <div class="container">
    <div class="row" style="margin: 0 0 -90px 0;">
      <center>
        <h4>"Apabila mahasiswa yang akan praktikum belum terdaftar dalam akses login web lab. Silahkan daftarkan diri."</h4>
      </center>
    </div>
    <div class="signuppanel" >
      <div class="row">
        <div class="col-md-6">

          <h3>PENDAFTARAN</h3>
          <form method="post" >
            <p class="mt5 mb20" style="margin:0 0 15px 0">Pendaftaran Mahasiswa Praktikum. </p>

            <div class="mb10">
              <label class="control-label">Nama</label>
              <input type="text" class="form-control" placeholder="Nama Lengkap" />
            </div>

            <div class="mb10">
              <label class="control-label">NIM</label>
              <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" />
            </div>

            <div class="mb10">
              <label class="control-label">Username</label>
              <input type="text" class="form-control" placeholder="masukkan username"/>
            </div>

            <div class="mb10">
              <label class="control-label">Password</label>
              <input type="password" class="form-control" placeholder="masukkan password" />
            </div>

            <div class="mb10">
              <label class="control-label">Angkatan</label>
              <select class="form-control chosen-select">
                <option value="">-tahun masuk-</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
              </select>
            </div>

            <div class="mb10">
              <label class="control-label">Semester ke-</label>
              <select class="form-control chosen-select">
                <option value="">-semester-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>

            <div class="mb10">
              <label class="control-label">Kelas</label>
              <select class="form-control chosen-select">
                <option value="">-pilih kelas-</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
              </select>
            </div>


            <button class="btn btn-success btn-block">Daftar</button>     
          </form>
        </div>
        <div class="col-md-6">
          <h3>LOGIN</h3>
          <p></p>
          <form method="post" action="mhs/index.php">
            <p class="mt5 mb20" style="margin:0 0 15px 0">Atur jadwal & cetak kartu responsi.</p>

            <div class="mb10">
              <label class="control-label">Username</label>
              <input type="text" class="form-control" placeholder="username" />
            </div>

            <div class="mb10">
              <label class="control-label">Password</label>
              <input type="password" class="form-control" placeholder="password" />
            </div>
            <button class="btn btn-info btn-block">Login</button>     
          </form>
        </div>  
      </div>
    </div>
  </div>
</div>

<div class="container carousel">
  <div class="row">

    <div class="col-md-3">
      <div class="ca-hover">
        <div class="carousel-img">
          <img src="lib-w/img/c01.jpg" alt="Carousel Img">
        </div>
        <div class="carousel-content">
          <h3>REGISTRASI</h3>
          <p>Mahasiswa diharuskan untuk mendaftarkan dirinya sebelum memulai kegiatan belajar di Lab.Bahasa pemrograman</p>
        </div>
        <div class="overlay"></div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="ca-hover">
        <div class="carousel-img">
          <img src="lib-w/img/c02.jpg" alt="Carousel Img">
        </div>
        <div class="carousel-content">
          <h3>LOGIN</h3>
          <p>Kemudian mahasiswa dapat login dan masuk kedalam sistem untuk keperluan di dalam lab.</p>
        </div>
        <div class="overlay"></div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="ca-hover">
        <div class="carousel-img">
          <img src="lib-w/img/c03.jpg" alt="Carousel Img">
        </div>
        <div class="carousel-content">
          <h3>PENJADWALAN</h3>
          <p>Mengisi jadwal waktu belajar selama praktikum di lab. Adapun pilihan agar tidak bentrok dengan jadwal kuliah</p>
        </div>
        <div class="overlay"></div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="ca-hover">
        <div class="carousel-img">
          <img src="lib-w/img/c04.jpg" alt="Carousel Img">
        </div>
        <div class="carousel-content">
          <h3>MODUL</h3>
          <p>Modul disediakan di web ini agar dapat didistribusikan dengan mudah dan berbasis digital.</p>
        </div>
        <div class="overlay"></div>
      </div>
    </div>
  </div>
</div>

</div>

<div class="shadow"></div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <h2>TEKNIK INFORMATIKA</h2>

      </div>
      <div class="col-md-5">
        <P>UNIVERSITAS MULAWARMAN</P>
        <P>2014</P>
      </div>
      <div class="col-md-3">
      </div>

    </div>
  </div>  
</footer>
<script src="lib-w/js/jquery.min.js"></script>
<script src="lib-w/js/bootstrap.min.js"></script>
<script src="lib-w/js/bootstrap.js"></script>
<script src="lib-w/js/scripts.js"></script>
<script src="lib-w/js/unslider.min.js"></script>


</body>
</html>