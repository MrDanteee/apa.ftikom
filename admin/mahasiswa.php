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
  <link href="../lib/css/bootstrap.css" rel="stylesheet">
  <link href="../lib/css/jquery.datatables.css" rel="stylesheet">

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
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-body">
              <h5 class="subtitle mb5">Daftar tb_mahasiswa</h5>
                <br />
                <div class="table-responsive">
                  <table class="table" id="table2">
                    <thead>
                      <tr>
                        <th width="75">No</th>
                        <th width="150">NIM</th>
                        <th>Nama</th>
                        <th>Angkatan</th>
                        <th>No. Telepon</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include '../db/db.php';
                      $q = mysql_query("SELECT * FROM tb_mahasiswa ");
                      $no=1;

                      while ($r = mysql_fetch_assoc($q)) {
                        ?>
                        <tr>
                          <td><?=$no ?></td>
                          <td><?=$r['nim_mhs']?></td>
                          <td><?=$r['nama_mhs']?></td>
                          <td><?=$r['angkatan_mhs']?></td>
                          <td><?=$r['notelp_mhs']?></td>
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
<script src="../lib/js/jquery.datatables.min.js"></script>
<script src="../lib/js/chosen.jquery.min.js"></script>

  <script>
    jQuery(document).ready(function() {

      jQuery('#table1').dataTable();

      jQuery('#table2').dataTable({
        "sPaginationType": "full_numbers"
      });

      // Chosen Select
      jQuery("select").chosen({
        'min-width': '100px',
        'white-space': 'nowrap',
        disable_search_threshold: 10
      });

      // Delete row in a table
      jQuery('.delete-row').click(function(){
        var c = confirm("Continue delete?");
        if(c)
          jQuery(this).closest('tr').fadeOut(function(){
            jQuery(this).remove();
          });

        return false;
      });

      // Show aciton upon row hover
      jQuery('.table-hidaction tbody tr').hover(function(){
        jQuery(this).find('.table-action-hide a').animate({opacity: 1});
      },function(){
        jQuery(this).find('.table-action-hide a').animate({opacity: 0});
      });

    });
  </script>

</body>
</html>
