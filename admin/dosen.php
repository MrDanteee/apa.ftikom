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
            <form id="basicForm" action="dosen-proses.php?act=tambah" class="form-horizontal" method="post">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-btns">
                    <a href="#" class="minimize">&minus;</a>
                  </div>
                  <h4 class="panel-title">Input Data Dosen</h4>
                  <p>Harap diisi sesuai data yang telah tervalidasi.</p>
                </div>
                <div class="panel-body">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Nama<span class="asterisk">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="nama" class="form-control" placeholder="Dosen" required />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">NIP.</label>
                      <div class="col-sm-8">
                        <input type="text" name="nip" class="form-control" placeholder="nip" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">No. Telepon<span class="asterisk">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="notelp" class="form-control" placeholder="No. Telepon" required />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">E-mail</label>
                      <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" placeholder="email"/>
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

        <div class="row">

          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Daftar Dosen</h4>
                <p>Dosen yang telah tervalidasi</p>
              </div>
              <div class="panel-body panel-body-nopadding">
                <div class="table-responsive">
                  <table class="table table-striped mb30">
                    <thead>
                      <tr>
                        <th width="40">No.</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>No. Telepon</th>
                        <th>E-mail</th>
                        <th>Gender</th>
                        <th>Username</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include '../db/db.php';
                      $q = mysql_query("SELECT * FROM tb_dosen ");
                      $no=1;

                      while ($r = mysql_fetch_assoc($q)) {
                        ?>
                        <tr>
                          <td><?=$no ?></td>
                          <td><?=$r['nip_dosen']?></td>
                          <td><?=$r['nama_dosen']?></td>
                          <td><?=$r['notelp_dosen']?></td>
                          <td><?=$r['email_dosen']?></td>
                          <td><?=$r['jk_dosen']?></td>
                          <td>
                            <a href="dosen-edit.php?id=<?=$r['id_dosen']?>&act=edit">
                              <button class="btn btn-primary btn-xs">
                                <li class="fa fa-edit"></li>
                              </button>
                            </a>
                            <a href="dosen-proses.php?id=<?=$r['id_dosen']?>&act=hapus">
                              <button class="btn btn-danger btn-xs">
                                <li class="fa fa-times"></li>
                              </button>
                            </a>

                          </td>
                        </tr>
                        <?php
                          $no++;
                          }
                        ?>
                      </tbody>
                    </table>
                  </div><!-- table-responsive -->
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Edit Dosen-->


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
