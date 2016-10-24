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
                  <img src="../lib/images/photos/loggeduser.png" alt="" />
                  Mahasiswa
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
        <div class="col-md-12">
        <form id="basicForm" action="#" class="form-horizontal">
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Daftar Modul</h4>
                <p>Daftar modul yang telah ter-upload dan secara langsung terpublikaskan.</p>
              </div>
              <div class="panel-body    ">
              
              <!-- BASIC WIZARD -->
              <div id="basicWizard" class="basic-wizard">
                
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#tab1" data-toggle="tab"><span>Semester 1</span></a></li>
                  <li><a href="#tab2" data-toggle="tab"><span>Semester 2</span></a></li>
                  <li><a href="#tab3" data-toggle="tab"><span>Semester 3</span></a></li>
                  <li><a href="#tab4" data-toggle="tab"><span>Semester 4</span></a></li>
                  <li><a href="#tab5" data-toggle="tab"><span>Semester 5</span></a></li>
                  <li><a href="#tab6" data-toggle="tab"><span>Semester 6</span></a></li>
                  <li><a href="#tab7" data-toggle="tab"><span>Semester 7</span></a></li>
                </ul>
                
                <div class="tab-content" style="padding:10px 30px 10px 30px">
                  <?php for ($i=1; $i < 8; $i++) { ?> <!-- Pengulangan hingga 7 kali   -->
                  <div class="tab-pane" id="tab<?=$i;?>">
                      <center>
                      <div class="table-responsive">
                        <table class="table mb30" width="500px">
                          <thead>
                            <tr>
                              <th width="40">No.</th>
                              <th>Nama Modul</th>
                              <th>Mata Kuliah</th>
                              <th>Deskripsi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              
                              $q = mysql_query("SELECT * FROM tb_modul WHERE semester_modul='$i'");
                              $no=1;

                              while ($r = mysql_fetch_assoc($q)) {
                            ?>
                            <tr>
                              <td><?=$no ?></td>
                              <td><?=$r['judul_modul']?></td>
                              <td><?=$r['matkul_modul']?></td>
                              <td><?=$r['deskripsi_modul']?></td>
                              <td>
                                  <a href="../modul/<?=$r['file_modul']?>"><span class="label label-primary"><li class="fa fa-download"></li></span></a>
                                  
                              </td>
                            </tr>
                            <?php
                              $no++;
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </center>
                  </div>
                  <?php } ?>
                </div><!-- tab-content -->
                  
                
              </div><!-- #basicWizard -->
              
            </div><!-- panel-body -->
              <div class="panel-footer">
              </div>
            </div>
          </form>
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
