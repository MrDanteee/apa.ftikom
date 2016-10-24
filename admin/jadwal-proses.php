<?php
  include '../db/db.php';

  if ($_GET['act']=='update') {

        $id        = $_GET['id'];
        $kelompok  = $_POST['kelompok']; 
        $matkul    = $_POST['matkul'];
        $aslab     = $_POST['aslab'];

        $hasil = mysql_query("UPDATE tb_penjadwalan SET asisten_jadwal='$aslab', matkul_jadwal='$matkul', kelompok_jadwal='$kelompok'  WHERE id_jadwal = '$id' ");
        mysql_query($hasil);  

    header('location: jadwal.php');

  }

?>
