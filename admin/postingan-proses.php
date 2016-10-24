<?php
  include '../db/db.php';

  if ($_GET['act']=='tambah') {

        $judul      = $_POST['judul']; 
        $isi        = $_POST['isi'];
        $tanggal    = date("Y-m-d");

        $result = mysql_query("INSERT INTO tb_informasi(judul_info, isi_info, tanggal_info) 
                                    VALUES('$judul','$isi', '$tanggal')");

        mysql_query($result);  

    header('location: postingan.php');

  }elseif ($_GET['act']=='hapus') {
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_informasi WHERE id_info='$id'";
    $result  = mysql_query($sql);

    header("location: postingan.php");

  }

?>
