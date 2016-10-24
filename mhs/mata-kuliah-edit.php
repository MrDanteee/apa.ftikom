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
  
  $idp = $_GET['idp'];
    list($nimp, $matkulp)
    = mysql_fetch_row(mysql_query("SELECT nim_praktikum, matkul_praktikum
      FROM tb_praktikum WHERE id_praktikum ='$idp' "));

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

  <!-- Loading -->
  <div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
  </div>

  <section>
    <div class="contentpanel">
      <div class="row">
        <div class="col-md-8">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-btns">
                    <a href="#" class="minimize">&minus;</a>
                  </div>                  
                </div>
                <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped mb30">
                    <thead>
                      <tr>
                        <th width="40">No.</th>
                        <th>Mata Kuliah</th>
                        <th>Kelompok</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $aa = mysql_query("SELECT * FROM tb_penjadwalan WHERE matkul_jadwal = '$matkulp' ");
                      $no=1;

                      while ($bb = mysql_fetch_assoc($aa)) {
                        ?>
                        <tr>
                          <td><?=$no ?></td>
                          <td><?=$bb['matkul_jadwal']?></td>
                          <td><strong><?=$bb['kelompok_jadwal']?></strong></td>
                          <td><?=$bb['hari_jadwal']?></td>
                          <td><?=$bb['jam_jadwal']?></td>
                          <td></td>
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
          <div class="col-md-4">

          </div><!-- col-md-6 -->
            </div>


      <div class="row">
        <div class="col-md-8">
         <form id="basicForm" action="mata-kuliah-proses.php?id=<?php echo $idp;?>&matkul=<?php echo $matkulp;?>&act=update" class="form-horizontal" method="post">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-btns">
                    <a href="#" class="minimize">&minus;</a>
                  </div>
                  <h4 class="panel-title">NIM <?php echo $nimp;?></h4>
                  
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <tr>
                              <th>Mata Kuliah</th>
                              <th>Pilihan Waktu Kelompok</th>
                            </tr>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $matkulp;?></td>
                            <td>
                              <select class="form-control" name="kelompok" >
                                <option value=""></option>
                              <?php  $e = mysql_query("SELECT * FROM tb_penjadwalan WHERE matkul_jadwal = '$matkulp' ");
                                 
                                     while ($f = mysql_fetch_assoc($e)) {  ?>
                                <option value="<?=$f['kelompok_jadwal']?>" ><?=$f['kelompok_jadwal']?></option>
                             <?php } ?>
                                </select>
                            </td>
                        </tbody>
                      </table>
                      </div><!-- table-responsive -->
                  </div><!-- panel-body -->
               
                <div class="panel-footer">
                  <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                      <button class="btn btn-primary">simpan</button>
                      <button type="reset" class="btn btn-default">Batal</button>
                      <a href="mata-kuliah.php"><button type="back" class="btn btn-default">Kembali</button></a>
                    </div>
                  </div>
                </div>

              </div><!-- panel -->
            </form>


          </div><!-- col-md-6 -->

          <div class="col-md-4">

          </div><!-- col-md-6 -->
        </div>
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
