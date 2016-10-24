<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header('location:login.php'); //ke halaman login
        exit();
}
include '../db/db.php';
  if (isset($_POST['cari'])) {
    $cari = (isset($_POST['cari'])) ? $_POST['cari'] : '';
    $sql = mysql_query("SELECT * FROM tb_mahasiswa WHERE nim_mhs LIKE '%$cari%' OR nama_mhs LIKE '%$cari%' ") or die(mysql_error());
  }
  ?>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../lib/images/favicon.png" type="image/png">

  <title>Lab. Teknik Informatika</title>

  <link href="../lib/css/style.default.css" rel="stylesheet">
  <link href="../lib/css/fullcalendar.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
       <center> <h1>Lab. TIK</h1> </center>
    </div><!-- logopanel -->
        
    <div class="leftpanelinner">    

      <?php
        include 'menu.php';
      ?>
        
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  
  <div class="mainpanel">
    <div class="headerbar">
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i>
                Admin
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i>Profile</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i>Bantuan</a></li>
                <li><a href="signin.html"><i class="glyphicon glyphicon-log-out"></i>Log Out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div><!-- header-right -->
      
    </div><!-- headerbar -->

    <div class="contentpanel">
      <div class="row">
        <div class="col-md-8">
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Registrasi Asisten Lab</h4>
              </div>
              <div class="panel-body">
                <div class="col-md-6">
                  <form class="form-horizontal" method="post">
                    <div class="form-group">
                      <label class="control-label">Nama Atau Nim</label>
                        <input type="text" name="cari" class="form-control" placeholder="cari nim atau ketik nama" required />
                    </div>
                    <button class="btn btn-primary">Cari</button>
                  </form>
                </div>
                <div class="col-md-6">
                  <a href="aslab-daftar.php"><button class="btn btn-success pull-right">Daftar Nama Asisten</button></a>
                </div>
              </div>
            </div>
          </div><!-- col-md-6 -->

          <div class="col-md-4">
          </div><!-- col-md-6 -->
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <p>Hasil pencarian</p>
              </div>
              <div class="panel-body panel-body-nopadding">
                <div class="table-responsive">
                  <table class="table table-striped mb30">
                    <thead>
                      <tr>
                        <th width="40">No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Angkatan</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
              if(isset($_POST['cari'])) {
                while ($r = mysql_fetch_assoc($sql)) {
                        ?>
                        <tr>
                          <td><?=$no ?></td>
                          <td><?=$r['nim_mhs']?></td>
                          <td><?=$r['nama_mhs']?></td>
                          <td><?=$r['angkatan_mhs']?></td>
                          <td>
                            <a href="aslab.php?id=<?=$r['nim_mhs']?>">
                              <button class="btn btn-primary btn-xs">
                                <li class="fa fa-check"></li> Proses
                              </button>
                            </a>

                          </td>
                        </tr>
                        <?php
                          $no++;
                          }}
                        ?>
                      </tbody>
                    </table>
                  </div><!-- table-responsive -->
                </div>
              </div>
            </div>
          </div>

      </div>
      
      
    </div><!-- contentpanel -->
    
  </div><!-- mainpanel -->
  
</section>


<script src="../lib/js/jquery-1.10.2.min.js"></script>
<script src="../lib/js/jquery-migrate-1.2.1.min.js"></script>
<script src="../lib/js/bootstrap.min.js"></script>
<script src="../lib/js/modernizr.min.js"></script>
<script src="../lib/js/jquery.sparkline.min.js"></script>
<script src="../lib/js/toggles.min.js"></script>
<script src="../lib/js/retina.min.js"></script>
<script src="../lib/js/jquery.cookies.js"></script>

<script src="../lib/js/custom.js"></script>

</body>
</html>
