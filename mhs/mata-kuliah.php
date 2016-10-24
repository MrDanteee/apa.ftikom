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
        <div class="col-sm-8 col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-btns">
                <a href="#" class="minimize">&minus;</a>
              </div><!-- panel-btns -->
              <h4 class="panel-title">Mata Kuliah Praktikum</h4>
              <p>Pilihlah mata kuliah praktikum dibawah ini.</p>
            </div><!-- panel-heading -->
            <div class="panel-body">
            <form method="post" action="mata-kuliah-proses.php?id=<?php echo $nim;?>&act=tambah">
              <select class="form-control" name="matkul" required>
                <option value="">- Pilih Mata Kuliah -</option>
              <?php
                $q = mysql_query("SELECT * FROM tb_matkul ");
                $no=1;
                while ($r = mysql_fetch_assoc($q)) { ?>
                  <option value="<?=$r['nama_matkul']?>" ><?=$r['nama_matkul']?></option>
                <?php } ?>
              </select>

            </div><!-- panel-body -->
            <div class="panel-footer">
              <button class="btn btn-success pull-right">Tambah</button>              
            </div>
          </div><!-- panel -->
          </form>
        </div><!-- col-sm-9 -->
        <div class="col-sm-4 col-md-3">
        </div><!-- col-sm-3 -->
      </div><!-- row -->
    </div><!-- contentpanel -->
    <div class="contentpanel">
       <div class="row">
        <div class="col-sm-8 col-md-9">
          <div class="panel panel-default">
            <div class="panel-body">
               <div class="table-responsive">
                  <table class="table table-striped mb30">
                    <thead>
                      <tr>
                        <th width="40">No.</th>
                        <th>Mata Kuliah</th>
                        <th>Kelompok</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $o = mysql_query("SELECT * FROM tb_praktikum WHERE nim_praktikum='$nim'");
                      $no=1;

                      while ($p = mysql_fetch_assoc($o)) {
                        ?>
                        <tr>
                          <td><?=$no ?></td>
                          <td><?=$p['matkul_praktikum']?></td>
                          <td><?=$p['kelompok_praktikum']?></td>
                          <td></td>
                          <td>
                            <a href="mata-kuliah-edit.php?idp=<?=$p['id_praktikum']?>">
                                <button class="btn btn-primary btn-xs">
                                  <li class="fa fa-edit"></li>
                                </button>
                              </a>
                            <a href="mata-kuliah-proses.php?id=<?=$p['id_praktikum']?>&act=hapus">
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
            <div class="panel-footer">
              <p>*Apabila pada pilihan kelompok belum tertera. Silahkan diisi melalui menu 'Penjadwalan Praktikum'</p>              
            </div>
        </div><!-- col-sm-9 -->
          
        <div class="col-sm-4 col-md-3">
        </div><!-- col-sm-3 -->
      </div><!-- row -->
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
