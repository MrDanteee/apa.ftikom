<?php
  include '../db/db.php';

  if ($_GET['act']=='tambah') {

        $nim           = $_GET['id'];
        $matkul       = $_POST['matkul']; 

        $result = mysql_query("INSERT INTO tb_praktikum(nim_praktikum, matkul_praktikum) 
                                    VALUES('$nim','$matkul') ");

        mysql_query($result);  

    header('location: mata-kuliah.php');

  }elseif ($_GET['act']=='hapus') {
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_praktikum WHERE id_praktikum='$id'";
    $result  = mysql_query($sql);

    header("location: mata-kuliah.php");

  }elseif ($_GET['act']='update') {
    $id       = $_GET['id'];
    $matkul   = $_GET['matkul'];
    $kelompok = $_POST['kelompok'];

    $jml = mysql_fetch_array(mysql_query("SELECT COUNT(kelompok_praktikum) AS total FROM tb_praktikum WHERE matkul_praktikum='$matkul' AND kelompok_praktikum='$kelompok'"));
    
    $batas = $jml['total'];
    if ($batas <= 20) {

      $result = mysql_query("UPDATE tb_praktikum SET kelompok_praktikum='$kelompok' WHERE id_praktikum='$id' ");
      mysql_query($result);  

      header('location: mata-kuliah.php');
    }else {
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
              <h1>Kelompok telah terisi penuh. Pilih yang lain. </h1>
              <a href="mata-kuliah.php"><button class="btn btn-primary">Kembali</button></a>
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
    }

    

  }

?>
