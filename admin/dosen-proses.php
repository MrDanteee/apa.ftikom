<?php
  include '../db/db.php';

  if ($_GET['act']=='tambah') {

        $nama       = $_POST['nama']; 
        $nip        = $_POST['nip'];
        $notelp     = $_POST['notelp'];
        $email      = $_POST['email'];
        $gender     = $_POST['gender'];

        $result = mysql_query("INSERT INTO tb_dosen(nama_dosen, nip_dosen, jk_dosen, email_dosen, notelp_dosen) 
                                    VALUES('$nama', '$nip', '$gender', '$email','$notelp')");

        mysql_query($result);  

    header('location: dosen.php');

  }elseif ($_GET['act']=='hapus') {
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_dosen WHERE id_dosen='$id'";
    $result  = mysql_query($sql);

    header("location: dosen.php");

  }elseif ($_GET['act']=='update') {
        $id         = $_GET['id'];
        $nama       = $_POST['nama']; 
        $nip        = $_POST['nip'];
        $notelp     = $_POST['notelp'];
        $email      = $_POST['email'];
        $gender     = $_POST['gender'];

    $sql = "UPDATE tb_dosen SET nama_dosen='$nama', 
                                nip_dosen='$nip', jk_dosen= '$gender', email_dosen='$email', notelp_dosen='$notelp' WHERE id_dosen='$id'";
    $result  = mysql_query($sql);
    header("location: dosen.php");
  }

?>
