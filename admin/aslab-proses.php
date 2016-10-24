<?php
  include '../db/db.php';

  if ($_GET['act']=='tambah') {

        $nim         = $_GET['id'];
        list($nama) 
        = mysql_fetch_row(mysql_query("SELECT nama_mhs
                                 FROM tb_mahasiswa WHERE nim_mhs='$nim'"));
        $matkul      = $_POST['matkul'];
        $username   = $_POST['username'];
        $password   = md5(md5($_POST['password']));
        $result = mysql_query("INSERT INTO tb_aslab(nama_aslab,nim_aslab, matkul_aslab, username_aslab, password_aslab) 
                                    VALUES('$nama','$nim', '$matkul' ,'$username', '$password')");

        mysql_query($result);  

    header('location: aslab-daftar.php');

  }elseif ($_GET['act']=='hapus') {
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_aslab WHERE id_aslab='$id'";
    $result  = mysql_query($sql);

    header("location: aslab-daftar.php");

  }elseif ($_GET['act']=='update') {
        $nim         = $_GET['id'];
        list($nama) 
        = mysql_fetch_row(mysql_query("SELECT nama_mhs
                                 FROM tb_mahasiswa WHERE nim_mhs='$nim'"));
        $matkul      = $_POST['matkul'];
        $username   = $_POST['username'];
        $password   = md5(md5($_POST['password']));

    $sql = "UPDATE tb_aslab SET nama_aslab='$nama', username_aslab='$username', password_aslab='$password', 
                                matkul_aslab='$matkul', nim_aslab='$nim' WHERE id_aslab='$id'";
    $result  = mysql_query($sql);
    header("location: aslab-daftar.php");
  }

?>
