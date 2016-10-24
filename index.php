<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="lib/images/favicon.png" type="image/png">

  <title>Lab. Teknik Informatika</title>

  <link href="lib/css/style.default2.css" rel="stylesheet">
  <link href="lib/css/bootstrap.css" rel="stylesheet">
  <link href="lib/css/jquery.datatables.css" rel="stylesheet">

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
    <div class="mainpanel">
      <div class="headerbar">
        <div class="header-right">
          <ul class="headermenu">
            <li>
              <div class="btn-group"><a href="index.php">
                <button class="btn btn-default dropdown-toggle tp-icon"  >
                  Home
                </button>
              </a>
            </div>
          </li>
          <li style="margin:0 0 0 10px">
            <div class="btn-group"><a href="index.php">
              <button class="btn btn-default dropdown-toggle tp-icon"  >
                Registrasi
              </button>
            </a>
          </div>
        </li>

      </ul>
    </div><!-- header-right -->

  </div><!-- headerbar -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="lib/back1.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="lib/back2.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="lib/back3.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->






  <div class="contentpanel">
    <div class="row">

      <!--left-->
      <div class="col-sm-2">
        <center><h3 style="color:#242A2C;">Menu</h3></center>
        <div class="panel panel-default">
          <div class="panel-heading"><strong>Registrasi</strong></div>
          <div class="panel-body">
            <div class="menu_simple">
              <ul>
                <li><a href="registrasi-mhs.php">Registrasi</a></li>
                <li><a href="daftar-mhs.php">Daftar Mahasiswa</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="dropdown">
          <ul class="dropdown-menu">
            <li>cek</li>
          </ul>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading"><strong>Penjadwalan</strong></div>
          <div class="panel-body">
            <div class="menu_simple">
              <ul>
                <li><a href="file/Jadwal Praktikum Fix.pdf">Download Jadwal</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>




      <!--center-->
      <div class="col-sm-7">
        <div class="row">
          <div style="background:#63c6ae;color:#ffffff;">
            <blockquote> <h1>Pengumuman dan Informasi</h1> </blockquote>
          </div>
        </div>

        <?php
        $app->get('/cowsay', function() use($app) {
  $app['monolog']->addDebug('cowsay');
  return "<pre>".\Cowsayphp\Cow::say("Cool beans")."</pre>";
});
          include 'db/db.php';
          $q = mysql_query("SELECT * FROM tb_informasi ORDER BY id_info DESC");
          while ($r = mysql_fetch_assoc($q)) {
            ?>
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-12">
                <p class="pull-right"><span class="label label-default"><?=$r['tanggal_info']?></span></p>
                <h2><?=$r['judul_info']?></h2>
                <p><?=$r['isi_info']?></p>
                <p class="lead"><button class="btn btn-default">Baca ..</button></p>
              </div>
            </div>
          </div>
        </div>
        <?php
          }
        ?>

      </div>

      <!--right-->
      <div class="col-sm-3">
        <br>
        <div class="panel panel-default">
          <div class="panel-heading"><strong>Login</strong> </div>
          <div class="panel-body">
            <form method="post" action="mhs/log.php?act=login">


              <div class="mb10">
                <label class="control-label">Username</label>
                <input type="text" class="form-control" placeholder="username" name="username" />
              </div>

              <div class="mb10">
                <label class="control-label">Password</label>
                <input type="password" class="form-control" placeholder="password" name="password" />
              </div>
              <p class="mt5 mb20" style="margin:0 0 15px 0; font-size:12px;">- atur jadwal & cetak kartu responsi.</p>
              <button class="btn btn-info btn-block">Login</button>     
            </form>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-body">
            <img src="lib/iklan/1.jpg">
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">Share Link</div>
          <div class="panel-body"><a href="#">ftikom.ac.id</a></div>
        </div>

        <div class="panel panel-default">
          <div class="panel-body">
            <img src="lib/iklan/2.jpg">
          </div>
        </div>

      </div><!--/right-->

    </div><!--/container-fluid-->

  </div>

    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-body">
            <h1>Daftar Nilai Praktikan</h1>
            
              <div class="table-responsive">
                <table class="table" id="table2">
                  <thead>
                    <tr>
                      <th width="75">No</th>
                      <th width="150">NIM</th>
                      <th>Nama</th>
                      <th>Kuis 1</th>
                      <th>Kuis 2</th>
                      <th>UTS</th>
                      <th>UAS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>1115015100</td>
                      <td>Kucing Garong</td>
                      <td>70</td>
                      <td>80</td>
                      <td>80</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>1115015140</td>
                      <td>Susilo</td>
                      <td>70</td>
                      <td>80</td>
                      <td>80</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>1115015104</td>
                      <td>Bambang</td>
                      <td>70</td>
                      <td>80</td>
                      <td>80</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>1115015134</td>
                      <td>Ayu Ting</td>
                      <td>70</td>
                      <td>80</td>
                      <td>80</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>1115015128</td>
                      <td>Budi</td>
                      <td>70</td>
                      <td>80</td>
                      <td>80</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>1115015119</td>
                      <td>Aziz</td>
                      <td>70</td>
                      <td>80</td>
                      <td>80</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>1115015115</td>
                      <td>Nonik</td>
                      <td>70</td>
                      <td>80</td>
                      <td>80</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>1115015126</td>
                      <td>Widodo</td>
                      <td>70</td>
                      <td>80</td>
                      <td>80</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>1115015121</td>
                      <td>Lela</td>
                      <td>70</td>
                      <td>80</td>
                      <td>80</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>1115015115</td>
                      <td>Tukiyem</td>
                      <td>70</td>
                      <td>80</td>
                      <td>80</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>1115015131</td>
                      <td>Endang</td>
                      <td>70</td>
                      <td>80</td>
                      <td>80</td>
                      <td>80</td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>1115015143</td>
                      <td>Jokowi</td>
                      <td>70</td>
                      <td>80</td>
                      <td>80</td>
                      <td>80</td>
                    </tr>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
            </div>
          </div>
        </div>

      </div>

      <div class="row" style="background:#63c6ae; padding:4px"></div>
      <div class="row" style="background:#242A2C; padding:40px"></div>
    

  </div><!-- mainpanel -->

</section>


<script src="lib/js/jquery-1.10.2.min.js"></script>
<script src="lib/js/jquery-migrate-1.2.1.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="lib/js/modernizr.min.js"></script>
<script src="lib/js/jquery.sparkline.min.js"></script>
<script src="lib/js/toggles.min.js"></script>
<script src="lib/js/retina.min.js"></script>
<script src="lib/js/jquery.cookies.js"></script>

<script src="lib/js/custom.js"></script>

<script src="lib/js/jquery.datatables.min.js"></script>
<script src="lib/js/chosen.jquery.min.js"></script>

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

<script>
    $('.carousel').carousel({
        interval: 9000
    })
</script>

</body>
</html>
