<?php
 
 // mengatur time zone untuk WIB.
 date_default_timezone_set("Asia/Jakarta");
  
 // mencari mktime untuk tanggal 1 Januari 2011 00:00:00 WIB
 $selisih1 =  $user['end_transc'];
  
 // mencari mktime untuk current time
 $selisih2 = $user['jam_transc'];
  
 // mencari selisih detik antara kedua waktu
 $delta = $selisih1 - $selisih2;
  
 // proses mencari jumlah hari
 $a = floor($delta / 86400);
  
 // proses mencari jumlah jam
 $sisa = $delta % 86400;
 $b  = floor($sisa / 3600);
  
 // proses mencari jumlah menit
 $sisa = $sisa % 3600;
 $c = floor($sisa / 60);
  
 // proses mencari jumlah detik
 $sisa = $sisa % 60;
 $d = floor($sisa / 1);
  
 
 echo "Waktu Sisa ".$b." jam ".$c." menit ".$d." detik lagi";
  
 ?>