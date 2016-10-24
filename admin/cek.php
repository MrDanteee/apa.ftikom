<?php

#$date       = date('YmdHis');
#echo "$date";


 include '../db/db.php';

#  list($kl) 
#  = mysql_fetch_row(mysql_query("SELECT nama_mhs
#                                 FROM tb_mahasiswa WHERE id_mhs='3'"));
#  echo "$kl sip ";
#  if ($kl=='') {
#  	echo "oke";
#  }else{
#  	echo "no";
# }
#  $ok = md5(md5('masuk'));
#  echo "$ok";
#  $l = $_SESSION['id'];
#  echo "$l";
$m = 'Bahasa Pemrograman';
$qry = mysql_fetch_array(mysql_query("SELECT COUNT(matkul_jadwal) AS total FROM tb_penjadwalan WHERE matkul_jadwal='$m' AND kelompok_jadwal='3'"));
#$rst = mysql_fetch_array ( $qry, MYSQL_ASSOC );
echo $qry['total'];

#$result = $mysqli->query("SELECT COUNT(hari_jadwal) as TOTALFOUND FROM tb_penjadwalan WHERE hari_jadwal='SENIN'");
#$row_array=$result->fetch_array(MYSQLI_ASSOC);
#print($row_array['TOTALFOUND']);

?>