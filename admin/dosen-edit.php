<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header('location:login.php'); //ke halaman login
        exit();
}
?><!DOCTYPE html>
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
  
  <?php

  include '../db/db.php';
  $id   = $_GET['id'];
  list($nama, $nip, $notelp, $email, $username, $password) 
  = mysql_fetch_row(mysql_query("SELECT nama_dosen, nip_dosen, notelp_dosen, email_dosen, username_dosen, password_dosen
                                 FROM tb_dosen WHERE id_dosen='$id'"));
  ?>

  <section>
    <div class="contentpanel">
      <div class="row">
        <div class="col-md-8">
         <form id="basicForm" action="dosen-proses.php?act=update" class="form-horizontal" method="post">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-btns">
                    <a href="#" class="minimize">&minus;</a>
                  </div>
                  <h4 class="panel-title">Update Data Dosen</h4>
                  <p>Perbaruhi informasi data Dosen.</p>
                </div>
                <div class="panel-body">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama<span class="asterisk">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="nama" class="form-control" placeholder="Dosen" value="<?php echo $nama;?>" required />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">NIP.</label>
                      <div class="col-sm-8">
                        <input type="text" name="nip" class="form-control" placeholder="nip" value="<?php echo $nip;?>"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">No. Telepon<span class="asterisk">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="notelp" class="form-control" placeholder="No. Telepon" value="<?php echo $notelp;?>" required />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">E-mail</label>
                      <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $email;?>"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Jenis Kelamin <span class="asterisk">*</span></label>
                      <div class="col-sm-8">
                        <div class="rdio rdio-primary">
                          <input type="radio" id="male" value="Pria" name="gender" required />
                          <label for="male">Pria</label>
                        </div><!-- rdio -->
                        <div class="rdio rdio-primary">
                          <input type="radio" value="Wanita" id="female" name="gender">
                          <label for="female">Wanita</label>
                        </div><!-- rdio -->
                        <label class="error" for="gender"></label>
                      </div>
                    </div><!-- form-group -->
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
