<style>
.card-img-top {
    width: 100%;
    border-top-left-radius: calc(.35rem - 1px);
    border-top-right-radius: calc(.35rem - 1px);

.card {
  display: inline-block;
}
}
</style>
        
        
        </style>
       <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1> 

          <div class="row">
            <div class="col-lg">
             <?php if (validation_errors()) : ?>
              <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
              </div>
             <?php endif ?>

            <?= $this->session->flashdata('message');?>

       <!-- pelayanan -->
       <div class="list-paket">
          <h2>Paket Ramah</h2>
          <div class="col-lg-12">
          <div class="card-deck">


        <div class="card">        
              <img class="card-img-top" src="assets/img/paket/10mbps.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">paket murah 1 </h5>
                <p class="card-text">Paket Ini memberikan anda benefit : 
                  <ul>
                    <li>10mbps</li>
                    <li>untuk 1jam</li>
                    <li>tidak dapat disimpan</li>
                  </ul>
                </p>
              </div>

              <div class="card-footer">
              <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPackageModal1"> RP.3000 </a>
              </div>
          </div>

          <div class="card">        
              <img class="card-img-top" src="assets/img/paket/15mbps.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Paket Murah 2 </h5>
                <p class="card-text">Paket Ini memberikan anda benefit : 
                  <ul>
                    <li>15mbps</li>
                    <li>untuk 1jam</li>
                    <li>tidak dapat disimpan</li>
                  </ul>
                </p>
              </div>

              <div class="card-footer">
              <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPackageModal2"> RP.5000</a>
              </div>
          </div>

          <div class="card">        
              <img class="card-img-top" src="assets/img/paket/20mbps.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Paket Murah 3 </h5>
                <p class="card-text">Paket Ini memberikan anda benefit : 
                  <ul>
                    <li>20mbps</li>
                    <li>untuk 1jam</li>
                    <li>tidak dapat disimpan</li>
                  </ul>
                </p>
              </div>

              <div class="card-footer">
              <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newPackageModal3"> RP.7000 </a>
              </div>
          </div>

          
      

          </div>
          
        <!-- akhir pelayanan -->

                <!-- MODA; -->
        <div class="modal fade" id="newPackageModal1" tabindex="-1" role="dialog" aria-labelledby="newPackageModal1Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="newPackageModal1Label">Transaksi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="<?= base_url('package'); ?>" method="post">
                <div class="modal-body">
                    Kamu akan membeli Paket ini 
                
                <div class="form-group">
                  <input type="hidden" class="form-control" id="name" name="name"  value="<?=$user['name'];?>">
                </div>

                <div class="form-group">
                  <input type="hidden" class="form-control" id="email" name="email"  value="<?=$user['email'];?>">
                </div>

                <div class="form-group">
                  <input type="hidden" class="form-control" id="name_package" name="name_package"  value="Paket Murah 1">
                </div>

                <div class="form-group">
                  <input type="hidden" class="form-control" id="speed_package" name="speed_package"  value=" 10mbps">
                </div>

                <div class="form-group">
                  <input type="hidden" class="form-control" id="duration_package" name="duration_package"  value="3600">
                </div>
                
                <div class="form-group">
                  <input type="hidden" class="form-control" id="price_package" name="price_package"  value="RP.3000.">
                </div>

                    <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary">Konfirmasi Pembelian</button>
                </div>
                </form>
              </div>
  </div>



              


        <!-- modal -->
        <!-- modal  -->
      <!-- Button trigger modal -->
<!-- Modal -->



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     