        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1> 
          
         
            <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Paket Aktif</th>
                        <th scope="col">Speed</th>
                        <th scope="col">Durasi Paket</th>
                        <th scope="col">Harga Paket</th>
                        <th scope="col">Tanggal Pembelian</th>
                        <th scope="col">Jam Pembelian</th>
                        <th scope="col">Jam Berakhir</th>
                      
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($transaction as $t) : ?>
                        <tr>
                        <th scope="row"><?= $i;?></th>
                        <td><?= $t['name']; ?></td>
                        <td><?= $t['email']; ?></td>
                        <td><?= $t['name_package']; ?></td>
                        <td><?= $t['speed_package']; ?></td>
                        <td><?= $t['duration_package']; ?></td>
                        <td><?= $t['price_package']; ?></td>

                        <td><?= date('d F Y', $t['tgl_transc']);?></td>
                        <td><?= date('D F Y H:i:s', $t['jam_transc']);?></td>
                        <td><?= date('D F Y H:i:s', $t['end_transc']);?></td>
                      
                  
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
            </table>
            
            </div>
            
            </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <!-- modal  -->
      <!-- Button trigger modal -->
