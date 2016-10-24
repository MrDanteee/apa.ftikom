<?php
  include '../db/db.php';

  if ($_GET['act']=='tambah') {
    if(isset($_FILES['modul'])){
      $errors= array();
      foreach($_FILES['modul']['tmp_name'] as $key => $tmp_name ){
        $file_modul = $_FILES['modul']['name'][$key];
        $file_size  = $_FILES['modul']['size'][$key];
        $file_tmp   = $_FILES['modul']['tmp_name'][$key];

        $judul      = $_POST['judul']; 
        $matkul     = $_POST['matkul'];
        $deskripsi  = $_POST['deskripsi'];
        $semester   = $_POST['semester'];
        $date       = date('YmdHis');
        $file_modul = $date.$file_modul; //penambahan angka unik agar tidak terjadi kesamaan nama file. (tahun bulan tgl jam menit detik)

        if($file_size > 6097152){
          $errors[]='Ukuran gambar harus dibawah 6 MB';
        }   

        $result = mysql_query("INSERT INTO tb_modul(judul_modul, matkul_modul, file_modul, deskripsi_modul, semester_modul) 
                 VALUES('$judul','$matkul', '$file_modul', '$deskripsi', '$semester')");

        $desired_dir="../modul";
        if(empty($errors)==true){
          if(is_dir($desired_dir)==false){
            mkdir("$desired_dir", 0700);    // Create directory if it does not exist
          } 
          if(is_dir("$desired_dir/".$file_modul)==false){
            move_uploaded_file($file_tmp,"../modul/".$file_modul);
            }else{                  //rename the file if another one exist
              $new_dir="../modul/".$file_modul.time();
              rename($file_tmp,$new_dir);       
            }
              
          
          }else{
            print_r($errors);
          }
        }
        if(empty($error)){
          echo "Success";
        }

        mysql_query($result);  
      
    }
    header('location: modul.php');

  }elseif ($_GET['act']=='hapus') {
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_modul WHERE id_modul='$id'";
    $result  = mysql_query($sql);
    header("location: modul.php");
  }

?>
