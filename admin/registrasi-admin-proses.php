<?php
  include 'db/db.php';

  if ($_GET['act']=='tambah') {

        $nama       = $_POST['nama']; 
        $username   = $_POST['username'];
        $password   = md5(md5($_POST['password']));
        
        $result = mysql_query("INSERT INTO tb_admin(nama_admin, username, password) 
                                    VALUES('$nama','$username', '$password')");

        if($result){
        ?>
        <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="lib/images/favicon.png" type="image/png">

  <title>Lab FTIK</title>

  <link href="lib/css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->

<section>
  
    <div class="signuppanel" >
        
        <div class="row">
            
            
            <div class="col-md-6">
              <h1>Pendaftaran Berhasil</h1>
              <a href="index.php"><button class="btn btn-primary">Login</button></a>
              </div>
            
        </div><!-- row -->
    </div><!-- signuppanel -->
  
</section>


<script src="lib/js/jquery-1.10.2.min.js"></script>
<script src="lib/js/jquery-migrate-1.2.1.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="lib/js/modernizr.min.js"></script>
<script src="lib/js/retina.min.js"></script>


</body>
</html>

        <?php  
}else{ ?>
          <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="lib/images/favicon.png" type="image/png">

  <title>Lab FTIK</title>

  <link href="lib/css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->

<section>
  
    <div class="signuppanel" >
        
        <div class="row">
            
            
            <div class="col-md-6">
              <h1>Pendaftaran Gagal</h1>
              <a href="registrasi-admin.php"><button class="btn btn-primary">Kembali</button></a>
              </div>
            <?php die(mysql_error());?>
        </div><!-- row -->
    </div><!-- signuppanel -->
  
</section>


<script src="lib/js/jquery-1.10.2.min.js"></script>
<script src="lib/js/jquery-migrate-1.2.1.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="lib/js/modernizr.min.js"></script>
<script src="lib/js/retina.min.js"></script>


</body>
</html>
<?php
  
}
  }
  ?>