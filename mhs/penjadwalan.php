<?php
  ob_start();
  session_start();
    if(!isset($_SESSION['mahasiswa']) || $_SESSION['mahasiswa'] != true){
      header('location:../index.php'); //ke halaman login
    exit();
    }
    $id = $_SESSION['idmhs'];
    include '../db/db.php';
    list($nama, $nim, $username, $ttl, $email, $notelp, $angkatan, $alamat) 
    = mysql_fetch_row(mysql_query("SELECT nama_mhs, nim_mhs, username_mhs, ttl_mhs, email_mhs, notelp_mhs, angkatan_mhs, alamat_mhs
      FROM tb_mahasiswa WHERE id_mhs ='$id' "));

  ?>  <!DOCTYPE html>
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
                  <img src="../lib/images/photos/loggeduser.png" alt="" />
                  <?php echo $nama;?>
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
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-body">

                  <h5 class="subtitle">Penjadwalan waktu praktikum</h5>
                  <p>Pilihah waktu yang sesuai dengan jadwal yang ada dan klik Update di setiap mata kuliah pilihan pratikum.</p>
                  <br />

                  <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseOne">
                            Basis Data
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body" style="padding: 10px 20px 10px 50px ">
                          Pilihan Waktu Praktikum :
                          <div class="contentpanel" >
                            <?php
                      include '../db/db.php';
                      $q = mysql_query("SELECT * FROM tb_mahasiswa ");
                      $no=1;

                      while ($r = mysql_fetch_assoc($q)) {
                        ?>
                            <div class="rdio rdio-default">
                              <input type="radio" name="radio2" id="radioDefault" value="1" checked="checked" />
                              <label for="radioDefault">Rabu - 08.00 WITA</label>
                            </div>
                        <?php
                          $no++;
                          }
                        ?>
                          </div>

                          <button class="btn btn-success">Update</button>
                          <br />
                          <br />
                        </div>
                      </div>
                    </div>


                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                            Pemrograman Berbasis Objek
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body" style="padding: 10px 20px 10px 50px ">
                          Pilihan Waktu Praktikum :
                          <div class="contentpanel" >
                            <div class="rdio rdio-default">
                              <input type="radio" name="radio" id="radioDefault" value="1" />
                              <label for="radioDefault">Rabu - 08.00 WITA</label>
                            </div>

                            <div class="rdio rdio-default">
                              <input type="radio" name="radio" value="2" id="radioPrimary" />
                              <label for="radioPrimary">Rabu - 10.00 WITA</label>
                            </div>

                            <div class="rdio rdio-default">
                              <input type="radio" name="radio" value="3" id="radioWarning" />
                              <label for="radioWarning">Kamis - 08.00 WITA</label>
                            </div>

                            <div class="rdio rdio-default">
                              <input type="radio" name="radio" value="4" id="radioSuccess" />
                              <label for="radioSuccess">Kamis - 10.00 WITA</label>
                            </div>

                            <div class="rdio rdio-default">
                              <input type="radio" name="radio" value="5" id="radioDanger" />
                              <label for="radioDanger">Sabtu - 09.00 WITA</label>
                            </div>
                          </div>

                          <button class="btn btn-success">Update</button>
                          <br />
                          <br />
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

          </div><!-- col-md-6 -->
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
