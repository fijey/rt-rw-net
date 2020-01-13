       <!-- ajax -->       
       
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <style>

        .card-header {
            background-color :#36b9cc;
        }


        </style>
          
       

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>
          
          <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Your Package</div>
                <div class="card-body">
                    <h5 class="card-title"><?=$user['name_package']; ?></h5>
                    <p class="card-text">Kamu sedang menikmati paket <?=$user['name_package']; ?> <br>
                    Dengan kecepatan <?=$user['speed_package']; ?>  <br>
                    Sisa waktu kamu adalah : <br>

                    <div id="hasil">

                    </div>



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
  
 
 echo " ".$b." jam ".$c." menit ".$d." detik lagi";
  
 ?>




                </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     