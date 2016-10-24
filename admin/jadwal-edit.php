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
  list($hari, $jam, $ruang ) 
  = mysql_fetch_row(mysql_query("SELECT hari_jadwal, jam_jadwal, ruang_jadwal
                                 FROM tb_penjadwalan WHERE id_jadwal='$id'"));
  ?>

  <section>
    <div class="contentpanel">
      <div class="row">
        <div class="col-md-8">
         <form id="basicForm" action="jadwal-proses.php?id=<?php echo $id;?>&act=update" class="form-horizontal" method="post">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-btns">
                    <a href="#" class="minimize">&minus;</a>
                  </div>
                  <h4 class="panel-title">Update Data Jadwal - Hari <?php echo $hari;?></h4>
                  <p>Perbaruhi informasi data Dosen.</p>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table mb30">
                        <thead>
                          <tr>
                            <tr>
                              <th width="100">Jam</th>
                              <th>Ruang</th>
                              <th>Kelompok</th>
                              <th>Mata Kuliah</th>
                              <th>Asisten</th>
                            </tr>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $jam;?></td>
                            <td><?php echo $ruang;?></td>
                            <td>
                              <select class="form-control" name="kelompok">
                                <option value=""></option>
                                <?php for ($i=1; $i < 8; $i++) { ?>
                                <option value="<?=$i;?>"><?=$i;?></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td>
                              <select class="form-control" name="matkul">
                                <option value=""></option>
                              <?php  $e = mysql_query("SELECT * FROM tb_matkul ");
                                     while ($f = mysql_fetch_assoc($e)) {  ?>
                                <option value="<?=$f['nama_matkul']?>" ><?=$f['nama_matkul']?></option>
                             <?php } ?>
                                </select>
                            </td>
                            <td>
                              <select class="form-control" name="aslab">
                              <option value=""></option>
                              <?php  $c = mysql_query("SELECT * FROM tb_aslab ");
                                     while ($d = mysql_fetch_assoc($c)) {  ?>
                                <option value="<?=$d['nama_aslab']?>" ><?=$d['nama_aslab']?></option>
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
                      <a href="jadwal.php"><button type="back" class="btn btn-default">Kembali</button></a>
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
