<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header('location:login.php'); //ke halaman login
        exit();
}
?> <?php
  include '../db/db.php';
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
              <div class="panel-btns">
                <a href="#" class="minimize">&minus;</a>
              </div>
              <h4 class="panel-title">Penjadwalan</h4>
              <p>Harap diperhatikan dengan seksama saat mengisi jadwal di bawah</p>
            </div>
            <div class="panel-body panel-body-nopadding">
              <div id="basicWizard" class="basic-wizard">
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#tab1" data-toggle="tab"><span>Senin</span></a></li>
                  <li><a href="#tab2" data-toggle="tab"><span>Selasa</span></a></li>
                  <li><a href="#tab3" data-toggle="tab"><span>Rabu</span></a></li>
                  <li><a href="#tab4" data-toggle="tab"><span>Kamis</span></a></li>
                  <li><a href="#tab5" data-toggle="tab"><span>Jumat</span></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane" id="tab1">
                    <div class="table-responsive">
                      <table class="table table-striped mb30">
                        <thead>
                          <tr>
                            <th width="40">No.</th>
                            <th width="100">Jam</th>
                            <th>Ruang</th>
                            <th>Kelompok</th>
                            <th>Mata Kuliah</th>
                            <th>Asisten</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          //Mengeluarkan semua data yg memiliki hari senin
                          $q = mysql_query("SELECT * FROM tb_penjadwalan WHERE hari_jadwal = 'SENIN' "); 
                          $no=1;
                          while ($r = mysql_fetch_assoc($q)) { ?>
                          <tr>
                            <td><?=$no ?></td>
                            <td><?=$r['jam_jadwal']?></td>
                            <td><?=$r['ruang_jadwal']?></td>
                            <td><?=$r['kelompok_jadwal']?></td>
                            <td><?=$r['matkul_jadwal']?></td>
                            <td><?=$r['asisten_jadwal']?></td>
                            <td class="table-action">
                              <!-- Tombol mengedit setiap ada perubahan penjadwalan ruan, matakuliah, dan asisten-->
                              <a href="jadwal-edit.php?id=<?=$r['id_jadwal']?>">
                                <button class="btn btn-primary btn-xs">
                                  <li class="fa fa-edit"></li>
                                </button>
                              </a>
                            </td>
                          </tr>
                          <?php  $no++; }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab2">
                    <div class="table-responsive">
                      <table class="table table-striped mb30">
                        <thead>
                          <tr>
                            <th width="40">No.</th>
                            <th width="100">Jam</th>
                            <th>Ruang</th>
                            <th>Kelompok</th>
                            <th>Mata Kuliah</th>
                            <th>Asisten</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          //Mengeluarkan semua data yg memiliki hari senin
                          $q = mysql_query("SELECT * FROM tb_penjadwalan WHERE hari_jadwal = 'SELASA' "); 
                          $no=1;
                          while ($r = mysql_fetch_assoc($q)) { ?>
                          <tr>
                            <td><?=$no ?></td>
                            <td><?=$r['jam_jadwal']?></td>
                            <td><?=$r['ruang_jadwal']?></td>
                            <td><?=$r['kelompok_jadwal']?></td>
                            <td><?=$r['matkul_jadwal']?></td>
                            <td><?=$r['asisten_jadwal']?></td>
                            <td class="table-action">
                              <!-- Tombol mengedit setiap ada perubahan penjadwalan ruan, matakuliah, dan asisten-->
                              <a href="jadwal-edit.php?id=<?=$r['id_jadwal']?>">
                                <button class="btn btn-primary btn-xs">
                                  <li class="fa fa-edit"></li>
                                </button>
                              </a>
                            </td>
                          </tr>
                          <?php  $no++; }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab3">
                    <div class="table-responsive">
                      <table class="table table-striped mb30">
                        <thead>
                          <tr>
                            <th width="40">No.</th>
                            <th width="100">Jam</th>
                            <th>Ruang</th>
                            <th>Kelompok</th>
                            <th>Mata Kuliah</th>
                            <th>Asisten</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          //Mengeluarkan semua data yg memiliki hari senin
                          $q = mysql_query("SELECT * FROM tb_penjadwalan WHERE hari_jadwal = 'RABU' "); 
                          $no=1;
                          while ($r = mysql_fetch_assoc($q)) { ?>
                          <tr>
                            <td><?=$no ?></td>
                            <td><?=$r['jam_jadwal']?></td>
                            <td><?=$r['ruang_jadwal']?></td>
                            <td><?=$r['kelompok_jadwal']?></td>
                            <td><?=$r['matkul_jadwal']?></td>
                            <td><?=$r['asisten_jadwal']?></td>
                            <td class="table-action">
                              <!-- Tombol mengedit setiap ada perubahan penjadwalan ruan, matakuliah, dan asisten-->
                              <a href="jadwal-edit.php?id=<?=$r['id_jadwal']?>">
                                <button class="btn btn-primary btn-xs">
                                  <li class="fa fa-edit"></li>
                                </button>
                              </a>
                            </td>
                          </tr>
                          <?php  $no++; }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab4">
                    <div class="table-responsive">
                      <table class="table table-striped mb30">
                        <thead>
                          <tr>
                            <th width="40">No.</th>
                            <th width="100">Jam</th>
                            <th>Ruang</th>
                            <th>Kelompok</th>
                            <th>Mata Kuliah</th>
                            <th>Asisten</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          //Mengeluarkan semua data yg memiliki hari senin
                          $q = mysql_query("SELECT * FROM tb_penjadwalan WHERE hari_jadwal = 'KAMIS' "); 
                          $no=1;
                          while ($r = mysql_fetch_assoc($q)) { ?>
                          <tr>
                            <td><?=$no ?></td>
                            <td><?=$r['jam_jadwal']?></td>
                            <td><?=$r['ruang_jadwal']?></td>
                            <td><?=$r['kelompok_jadwal']?></td>
                            <td><?=$r['matkul_jadwal']?></td>
                            <td><?=$r['asisten_jadwal']?></td>
                            <td class="table-action">
                              <!-- Tombol mengedit setiap ada perubahan penjadwalan ruan, matakuliah, dan asisten-->
                              <a href="jadwal-edit.php?id=<?=$r['id_jadwal']?>">
                                <button class="btn btn-primary btn-xs">
                                  <li class="fa fa-edit"></li>
                                </button>
                              </a>
                            </td>
                          </tr>
                          <?php  $no++; }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab5">
                   <div class="table-responsive">
                      <table class="table table-striped mb30">
                        <thead>
                          <tr>
                            <th width="40">No.</th>
                            <th width="100">Jam</th>
                            <th>Ruang</th>
                            <th>Kelompok</th>
                            <th>Mata Kuliah</th>
                            <th>Asisten</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          //Mengeluarkan semua data yg memiliki hari senin
                          $q = mysql_query("SELECT * FROM tb_penjadwalan WHERE hari_jadwal = 'JUMAT' "); 
                          $no=1;
                          while ($r = mysql_fetch_assoc($q)) { ?>
                          <tr>
                            <td><?=$no ?></td>
                            <td><?=$r['jam_jadwal']?></td>
                            <td><?=$r['ruang_jadwal']?></td>
                            <td><?=$r['kelompok_jadwal']?></td>
                            <td><?=$r['matkul_jadwal']?></td>
                            <td><?=$r['asisten_jadwal']?></td>
                            <td class="table-action">
                              <!-- Tombol mengedit setiap ada perubahan penjadwalan ruan, matakuliah, dan asisten-->
                              <a href="jadwal-edit.php?id=<?=$r['id_jadwal']?>">
                                <button class="btn btn-primary btn-xs">
                                  <li class="fa fa-edit"></li>
                                </button>
                              </a>
                            </td>
                          </tr>
                          <?php  $no++; }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  
                </div><!-- tab-content -->
                
              </div><!-- #basicWizard -->
              
            </div><!-- panel-body -->
          </div><!-- panel -->
       
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
<script src="../lib/js/bootstrap-wizard.min.js"></script>
<script src="../lib/js/jquery.validate.min.js"></script>

<script>
jQuery(document).ready(function(){

  // Basic Wizard
  jQuery('#basicWizard').bootstrapWizard();
  
  // Progress Wizard
  $('#progressWizard').bootstrapWizard({
    'nextSelector': '.next',
    'previousSelector': '.previous',
    onNext: function(tab, navigation, index) {
      var $total = navigation.find('li').length;
      var $current = index+1;
      var $percent = ($current/$total) * 100;
      jQuery('#progressWizard').find('.progress-bar').css('width', $percent+'%');
    },
    onPrevious: function(tab, navigation, index) {
      var $total = navigation.find('li').length;
      var $current = index+1;
      var $percent = ($current/$total) * 100;
      jQuery('#progressWizard').find('.progress-bar').css('width', $percent+'%');
    },
    onTabShow: function(tab, navigation, index) {
      var $total = navigation.find('li').length;
      var $current = index+1;
      var $percent = ($current/$total) * 100;
      jQuery('#progressWizard').find('.progress-bar').css('width', $percent+'%');
    }
  });
  
    
  
  
});
</script>

</body>
</html>
