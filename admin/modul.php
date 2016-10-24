<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header('location:login.php'); //ke halaman login
        exit();
}
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
        
        <div class="col-md-8">
          <form id="basicForm" action="modul-proses.php?act=tambah" class="form-horizontal" method="post" enctype="multipart/form-data">
          <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Upload Modul</h4>
                <p>Harap diisi sesuai modul dengan mata kuliah.</p>
              </div>
              <div class="panel-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Judul <span class="asterisk">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" name="judul" class="form-control" placeholder="Judul Modul" required />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-4 control-label">Modul<span class="asterisk">*</span></label>
                  <div class="col-sm-8">
                    <input type="file" name="modul[]" class="form-control"  required />
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
                
                <div class="form-group">
                  <label class="col-sm-4 control-label">Mata Kuliah</label>
                  <div class="col-sm-8">
                    <select class="form-control" name="matkul" required>
                      <option value=""></option>
                      <?php  $c = mysql_query("SELECT * FROM tb_matkul ");
                             while ($d = mysql_fetch_assoc($c)) {  ?>
                        <option value="<?=$d['nama_matkul']?>" ><?=$d['nama_matkul']?></option>
                     <?php } ?>
                        </select>
                    <label class="error" for="semester"></label>
                  </div>
                </div><!-- form-group -->

                </div>
                <div class="col-md-6">

                <div class="form-group">
                  <label class="col-sm-4 control-label">Deskripsi</label>
                  <div class="col-sm-8">
                    <textarea rows="5" name="deskripsi" class="form-control" placeholder="Penjelasan singkat modul. (boleh dikosongkan)"></textarea>
                  </div>
                </div>
              </div><!-- panel-body -->
            </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col-sm-9 col-sm-offset-3">
                    <button class="btn btn-primary">upload</button>
                    <button type="reset" class="btn btn-default">Batal</button>
                  </div>
                </div>
              </div>
            
          </div><!-- panel -->
          </form>
          
          
        </div><!-- col-md-6 -->
        
        <div class="col-md-4">
          
        </div><!-- col-md-6 -->
        
      </div><!--row -->

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
                                  <a href="modul-proses.php?id=<?=$r['id_modul']?>&act=hapus"><span class="label label-danger"><li class="fa fa-times"></li></span></a>
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

<script src="../lib/js/bootstrap-wizard.min.js"></script>
<script src="../lib/js/jquery.validate.min.js"></script>

<script src="../lib/js/custom.js"></script>
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
  
  // Disabled Tab Click Wizard
  jQuery('#disabledTabWizard').bootstrapWizard({
    tabClass: 'nav nav-pills nav-justified nav-disabled-click',
    onTabClick: function(tab, navigation, index) {
      return false;
    }
  });
  
  // With Form Validation Wizard
  var $validator = jQuery("#firstForm").validate({
    highlight: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      jQuery(element).closest('.form-group').removeClass('has-error');
    }
  });
  
  jQuery('#validationWizard').bootstrapWizard({
    tabClass: 'nav nav-pills nav-justified nav-disabled-click',
    onTabClick: function(tab, navigation, index) {
      return false;
    },
    onNext: function(tab, navigation, index) {
      var $valid = jQuery('#firstForm').valid();
      if(!$valid) {
        
        $validator.focusInvalid();
        return false;
      }
    }
  });   
  
  
});
</script>

</body>
</html>