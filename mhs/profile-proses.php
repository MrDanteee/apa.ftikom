<?php
  include '../db/db.php';
 if ($_GET['act']=='update') {
        $id         = $_GET['id'];
        $nama       = $_POST['nama'];
        $username   = $_POST['username'];
        $password   = md5(md5($_POST['password']));
        $notelp     = $_POST['notelp'];
        $email      = $_POST['email'];
        $alamat     = $_POST['alamat'];

    $sql = "UPDATE tb_mahasiswa SET nama_mhs='$nama', username_mhs='$username', password_mhs='$password', 
                                  notelp_mhs='$notelp', alamat_mhs='$alamat', email_mhs='$email' WHERE id_mhs='$id'";
    $result  = mysql_query($sql);
    header("location: profile.php");
  }

?>