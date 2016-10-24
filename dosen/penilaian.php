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
                <img src="images/photos/loggeduser.png" alt="" />
                Mahasiswa
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
              <h4 class="panel-title">Penilaian Mahasiswa</h4>
              <p>Input setiap nilai mahasiswa selama kegiatan praktikum.</p>
            </div><!-- panel-heading -->
            <div class="panel-footer">
            <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Quiz 1</th>
                <th>Quiz 2</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Hasil</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>1115015100</td>
                <td>Sugeng</td>
                <td>80</td>
                <td>80</td>
                <td>80</td>
                <td>80</td>
                <td><strong>80</strong></td>
                <td class="table-action">
                  <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></a>
                </td>
              </tr>
               <tr>
                <td>2</td>
                <td>1115015112</td>
                <td>Budi</td>
                <td>90</td>
                <td>80</td>
                <td>90</td>
                <td>80</td>
                <td></td>
                <td class="table-action">
                  <a href="#"><i class="fa fa-pencil"></i></a>
                </td>
              </tr>
               <tr>
                <td>3</td>
                <td>1115015109</td>
                <td>Rahman</td>
                <td>88</td>
                <td>79</td>
                <td>80</td>
                <td>90</td>
                <td></td>
                <td class="table-action">
                  <a href="#"><i class="fa fa-pencil"></i></a>
                </td>
              </tr>
              
            </tbody>
          </table>
          </div><!-- table-responsive -->
          </div>
          </div><!-- panel -->
        </div><!-- col-sm-9 -->
        
        <div class="col-sm-4 col-md-3">
          
          <div class="panel panel-default">
            <div class="panel-body">
            <h5 class="subtitle mb5">Info</h5>
            <p class="mb15" style="padding: 10px 0 0 0">Mahasiswa diperbolehkan mengambil mata kuliah semester bawah atau semester sebelumnya apabila tertinggal atau mengulang.</p>
            <div id="donut-chart2" style="text-align: center; height: 100px;"></div>
            </div><!-- panel-body -->
          </div><!-- panel -->
          
        </div><!-- col-sm-3 -->
        
      </div><!-- row -->
                
    </div><!-- contentpanel -->
    
  </div><!-- mainpanel -->
  
</section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">1115015100 - Sugeng</h4>
      </div>
      <div class="modal-body">
      <div class="table-responsive">
          <table class="table mb30">
            <thead>
              <tr>
                <th>Hasil</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input class="form-control" type="text" value="80"></input></td>
            </tbody>
          </table>
          </div><!-- table-responsive -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->

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
