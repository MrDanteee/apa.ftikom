<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header('location:login.php'); //ke halaman login
        exit();
}
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
            <form id="basicForm" action="mata-kuliah-proses.php?act=tambah" class="form-horizontal" method="post">
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
                        <input type="text" name="matkul" class="form-control" placeholder="Mata Kuliah" required />
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
                        
                  
                      <option value="<?=$r['nama_dosen']?>"><?=$r['nama_dosen']?></option>
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
                <h4 class="panel-title">Daftar Mata Kuliah</h4>
                <p>Mata Kuliah yang terdaftar dalam praktikum</p>
              </div>
              <div class="panel-body panel-body-nopadding">
                <div class="table-responsive">
                  <table class="table table-striped mb30">
                    <thead>
                      <tr>
                        <th width="40">No.</th>
                        <th>ID Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>Semester</th>
                        <th>Dosen</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include '../db/db.php';
                      $q = mysql_query("SELECT * FROM tb_matkul ");
                      $no=1;

                      while ($r = mysql_fetch_assoc($q)) {
                        ?>
                        <tr>
                          <td><?=$no ?></td>
                          <td><?=$r['id_matkul']?></td>
                          <td><?=$r['nama_matkul']?></td>
                          <td><?=$r['semester_matkul']?></td>
                          <td><?=$r['dosen_matkul']?></td>
                          <td>
                            <a href="mata-kuliah-edit.php?id=<?=$r['id_matkul']?>&act=edit">
                              <button class="btn btn-primary btn-xs">
                                <li class="fa fa-edit"></li>
                              </button>
                            </a>
                            <a href="mata-kuliah-proses.php?id=<?=$r['id_matkul']?>&act=hapus">
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
