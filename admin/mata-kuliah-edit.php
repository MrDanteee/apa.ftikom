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
  list($nama) 
  = mysql_fetch_row(mysql_query("SELECT nama_matkul
                                 FROM tb_matkul WHERE id_matkul='$id'"));
  ?>

  <section>
    <div class="contentpanel">
      <div class="row">
        <div class="col-md-8">
         <form id="basicForm" action="mata-kuliah-proses.php?id=<?php echo $id;?>&act=update" class="form-horizontal" method="post">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-btns">
                    <a href="#" class="minimize">&minus;</a>
                  </div>
                  <h4 class="panel-title">Input Mata Kuliah</h4>
                  <p>Harap diisi sesuai data yang telah tervalidasi.</p>
                </div>
                <div class="panel-body">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Mata Kuliah<span class="asterisk">*</span></label>
                      <div class="col-sm-8">
                        <input type="text" name="matkul" class="form-control" placeholder="Mata Kuliah" value="<?php echo $nama;?>" required />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Dosen</label>
                      
                      <div class="col-sm-8">
                        <select class="form-control" name="dosen" required>

                          <?php
                      include '../db/db.php';
                      $q = mysql_query("SELECT * FROM tb_dosen ");
                      $no=1;

                      while ($r = mysql_fetch_assoc($q)) {
                        
                        ?>
                        
                  
                      <option value="<?=$r['nama_dosen']?>" ><?=$r['nama_dosen']?></option>
                      <?php } ?>
                    </select>
                    
                    <label class="error" for="dosen"></label>
                      </div>
                    </div>


                  <div class="form-group">
                  <label class="col-sm-4 control-label">Semester</label>
                  <div class="col-sm-8">
                    <select id="semester" class="form-control" name="semester" required>
                      <?php for ($i=1; $i < 8; $i++) { ?>
                      <option value="<?=$i;?>"><?=$i;?></option>
                      <?php } ?>
                    </select>
                    
                    <label class="error" for="semester"></label>
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
            </form>!-- panel -->
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
