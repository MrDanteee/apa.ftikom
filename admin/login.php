  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../lib/images/favicon.png" type="image/png">

  <title>Lab. Teknik Informatika</title>

  <link href="../lib/css/style.default2.css" rel="stylesheet">

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
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-7">
                
                <div class="signin-info">
                
                    <div class="mb20"></div>
                
                    <h5><strong>Admin Login</strong></h5>
                    <ul>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Penjadwaldan</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Pendataan Modul</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Pendaftara Dosen & Asisten</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Posting Berita</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Dan lain -lain..</li>
                        <li><a href="registrasi-admin.php">Registrasi</a></li>
                    </ul>
                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                
                <form method="post" action="log.php?act=login">
                    <h4 class="nomargin">Login</h4>
                    <p class="mt5 mb20">Admin Login Sistem.</p>
                    <input type="text" class="form-control uname" placeholder="Username" name="username" />
                    <input type="password" class="form-control pword" placeholder="Password" name="password" />
                    <button class="btn btn-success btn-block">Login</button>
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014. Lab FTIK
            </div>
        </div>
        
    </div><!-- signin -->
  
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
