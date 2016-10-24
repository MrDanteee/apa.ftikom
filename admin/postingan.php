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
  <link rel="stylesheet" href="../lib/css/bootstrap-wysihtml5.css" />

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
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="#" class="panel-close">&times;</a>
            <a href="#" class="minimize">&minus;</a>
          </div>
          <h4 class="panel-title">Membuat Informasi</h4>
          
        </div>
        <div class="panel-body">
          <form role="form" method="post" action="postingan-proses.php?act=tambah">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Judul Informasi" name="judul" style="max-width:500px;">
          </div>
          <textarea id="wysiwyg" placeholder="Tulis Disini.." class="form-control" rows="10" name="isi"></textarea>
          <br>
          <button class="btn btn-default">Selesai</button>
        </form>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="#" class="panel-close">&times;</a>
            <a href="#" class="minimize">&minus;</a>
          </div>
          <h4 class="panel-title">Informasi</h4>
         </div>
        <div class="panel-body">
          <div class="panel-body panel-body-nopadding">
                <div class="table-responsive">
                  <table class="table table-striped mb30">
                    <thead>
                      <tr>
                        <th width="40">No.</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th width="100">Tanggal</th>
                        <th width="50"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include '../db/db.php';
                      $q = mysql_query("SELECT * FROM tb_informasi ");
                      $no=1;

                      while ($r = mysql_fetch_assoc($q)) {
                        ?>
                        <tr>
                          <td><?=$no ?></td>
                          <td><?=$r['judul_info']?></td>
                          <td><?=$r['isi_info']?></td>
                          <td><?=$r['tanggal_info']?></td>
                          <td>
                           <!-- <a href="mata-kuliah-edit.php?id=<?#=$r['id_matkul']?>&act=edit">
                              <button class="btn btn-primary btn-xs">
                                <li class="fa fa-edit"></li>
                              </button> 
                            </a>-->
                            <a href="postingan-proses.php?id=<?=$r['id_info']?>&act=hapus">
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
      
    </div><!-- contentpanel -->
    
      
      
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

<script src="../lib/js/wysihtml5-0.3.0.min.js"></script>
<script src="../lib/js/bootstrap-wysihtml5.js"></script>
<script src="../lib/js/ckeditor/ckeditor.js"></script>
<script src="../lib/js/ckeditor/adapters/jquery.js"></script>

<script src="../lib/js/custom.js"></script>

<script>
jQuery(document).ready(function(){
    
  // HTML5 WYSIWYG Editor
  jQuery('#wysiwyg').wysihtml5({color: true,html:true});
  
  // CKEditor
  jQuery('#ckeditor').ckeditor();

});
</script>

</body>
</html>
