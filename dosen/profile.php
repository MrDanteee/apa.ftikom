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
        
        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img alt="" src="../lib/images/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4>Mahasiswa</h4>
                    <span>FTIK</span>
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Akun</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href="#"><i class="fa fa-cog"></i> <span>Setting</span></a></li>
              <li><a href="#"><i class="fa fa-question-circle"></i> <span>Bantuan</span></a></li>
              <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>
      
      <h5 class="sidebartitle">MENU</h5>
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
        <div class="col-sm-3">
          <img src="../lib/images/foto.jpg" class="thumbnail img-responsive" alt="" />
          
          <div class="mb30"></div>
          <small>fakultas teknologi informasi dan komunikasi</small>
          <small>universitas mulawarman - 2014</small>
        </div><!-- col-sm-3 -->
        <div class="col-sm-9">
                   <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified nav-profile">
          <li class="active"><a href="#activities" data-toggle="tab"><strong>Profile</strong></a></li>
          <li><a href="#followers" data-toggle="tab"><strong>Edit</strong></a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="activities">
            <div class="activity-list">
              
              <div class="media act-media">
                <a class="pull-left" href="#">
                  <img class="media-object act-thumb" src="images/photos/user1.png" alt="" />
                </a>
                <div class="media-body act-media-body">
                  <div class="panel-body panel-body-nopadding">
                    <form class="form-horizontal ">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">NIM </label>
                        <div class="col-sm-6">
                        <label class="control-label"><strong>1115015100</strong></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Nama </label>
                        <div class="col-sm-6">
                        <label class="control-label"><strong>Kucing Garong</strong></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Semester </label>
                        <div class="col-sm-6">
                        <label class="control-label"><strong>3</strong></label>
                        </div>
                      </div>
                    </form>
                  </div>
            
                </div>
                  <button class="btn btn-white pull-right" >Edit</button>
              </div><!-- media -->
             
            

          </div>
          </div>
          <div class="tab-pane" id="followers">
            
            <div class="follower-list">
              
              <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" src="holder.js/100x125.html" alt="" />
                </a>
                <div class="media-body">
                  <h3 class="follower-name">Perbaruhi Data</h3>
                   <form class="form-horizontal ">
                      <div class="form-group">
                        <label class="col-sm-3 control-label">NIM </label>
                        <div class="col-sm-6">
                        <label class="control-label"><strong>1115015100</strong></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Nama </label>
                        <div class="col-sm-6">
                        <input type="text" placeholder="Nama" class="form-control" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Semester </label>
                        <div class="col-sm-6">
                          <select class="form-control mb15">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                          </select>
                        </div>
                      </div>

                  <button class="btn btn-sm btn-success mr5"><i class="fa fa-check"></i> Selesai</button>
                    </form>
                  
                </div>
              </div><!-- media -->
            </div><!--follower-list -->
            
          </div>
          
              </div>
              
            </div><!-- events -->
          </div>
        </div><!-- tab-content -->
          
        </div><!-- col-sm-9 -->
      </div><!-- row -->
      
      
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
