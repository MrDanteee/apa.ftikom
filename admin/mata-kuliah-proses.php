<?php
  include '../db/db.php';

  if ($_GET['act']=='tambah') {

        $matkul       = $_POST['matkul']; 
        $dosen        = $_POST['dosen'];
        $semester     = $_POST['semester'];

        $result = mysql_query("INSERT INTO tb_matkul(nama_matkul, dosen_matkul, semester_matkul) 
                                    VALUES('$matkul','$dosen', '$semester')");

        mysql_query($result);  

    header('location: mata-kuliah.php');

  }elseif ($_GET['act']=='hapus') {
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_matkul WHERE id_matkul='$id'";
    $result  = mysql_query($sql);

    header("location: mata-kuliah.php");

  }elseif ($_GET['act']=='update') {
        $id         = $_GET['id'];
        $matkul       = $_POST['matkul']; 
        $dosen        = $_POST['dosen'];
        $semester     = $_POST['semester'];

    $sql = "UPDATE tb_matkul SET nama_matkul='$matkul', dosen_matkul='$dosen', semester_matkul='$semester' WHERE id_matkul='$id' ";
    $result  = mysql_query($sql);
    header("location: mata-kuliah.php");
  }

?>
