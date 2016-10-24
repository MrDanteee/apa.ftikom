<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header('location:login.php'); //ke halaman login
        exit();
}
$nim = $_GET['id'];
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
                    <i class="fa fa-user"></i>
                    Admin
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i>Profile</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i>Bantuan</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-log-out"></i>Log Out</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div><!-- header-right -->

        </div><!-- headerbar -->

        <div class="contentpanel">
          <div class="row">
            <div class="col-md-8">
              <form id="basicForm" action="aslab-proses.php?id=<?php echo $nim;?>&act=tambah" class="form-horizontal" method="post">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-btns">
                      <a href="#" class="minimize">&minus;</a>
                    </div>
                    <h4 class="panel-title">Registrasi Asisten Lab</h4>
                    <p>Harap diisi sesuai data yang telah tervalidasi.</p>
                  </div>
                  <div class="panel-body">
                    <?php
                    
                    include '../db/db.php';
                    list($nama, $notelp) 
                    = mysql_fetch_row(mysql_query("SELECT nama_mhs, notelp_mhs
                      FROM tb_mahasiswa WHERE nim_mhs='$nim'"));
                      ?>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Nama<span class="asterisk">*</span></label>
                          <div class="col-sm-8">
                            <input type="text" name="nama" class="form-control" value="<?php echo $nama;?>" disabled />
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-4 control-label">NIM.</label>
                          <div class="col-sm-8">
                            <input type="text" name="nim" class="form-control" placeholder="nim" value="<?php echo $nim;?>" disabled/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-4 control-label">No. Telepon<span class="asterisk">*</span></label>
                          <div class="col-sm-8">
                            <input type="text" name="notelp" class="form-control" placeholder="No. Telepon" value="<?php echo $notelp;?>" disabled/>
                          </div>
                        </div>

                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Username<span class="asterisk">*</span></label>
                          <div class="col-sm-8">
                            <input type="text" name="username" class="form-control" placeholder="username" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Password<span class="asterisk">*</span></label>
                          <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" placeholder="password" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Mata Kuliah<span class="asterisk">*</span></label>
                            <div class="col-sm-8">
                              <select id="semester" class="form-control" name="matkul" required>
                               <?php
                                include '../db/db.php';
                                $q = mysql_query("SELECT * FROM tb_matkul ");

                                while ($r = mysql_fetch_assoc($q)) {
                              ?>     
                              <option value="<?=$r['nama_matkul']?>"><?=$r['nama_matkul']?></option>
                              <?php } ?>     
                              </select>
                              <label class="error" for="matkul"></label>
                            </div>
                          </div>

                        </div><!-- panel-body -->
                      </div>
                      <div class="panel-footer">
                        <div class="row">
                          <div class="col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary">simpan</button>
                            <button type="reset" class="btn btn-default">Batal</button>
                          </div>
                        </div>
                      </div>

                    </div><!-- panel -->
                  </form>


                </div><!-- col-md-6 -->

                <div class="col-md-4">

                </div><!-- col-md-6 -->
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
