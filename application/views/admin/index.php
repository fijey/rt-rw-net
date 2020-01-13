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
            

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newUserModal"> Add New User </a>
            
            <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                        <th scope="col">Role ID</th>
                        <th scope="col">is_active</th>
                        <?php


                        ?>
                        <th scope="col">Date Created</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($userlist as $u) : ?>
                        <tr>
                        <th scope="row"><?= $i;?></th>
                        <td><?= $u['name']; ?></td>
                        <td><?= $u['email']; ?></td>
                        <td><?= $u['image']; ?></td>
                        <?php
                        if($u['role_id']==1) {
                          $cek= "Admin";
                        }
                        else {
                          $cek= "Member";
                        }
                        ?>
                        <td><?= $cek?></td>
                        <?php
                        if($u['is_active']==1) {
                          $cek= "Aktif";
                        }
                        else {
                          $cek= "Tidak Aktif";
                        }
                        ?>
                        <td><?= $cek ?></td>
                        <td><?= date('d F Y', $u['date_created']);?></td>
                        <td>
                            <a href="" class="badge badge-success">Edit </a>
                            <a href="" class="badge badge-danger">Delete </a>
                        </td>
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
<!-- Modal -->
<div class="modal fade" id="newUserModal" tabindex="-1" role="dialog" aria-labelledby="newUserModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newUserModalLabel">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin'); ?>" method="post">
      <div class="modal-body">

      <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="image" name="image" placeholder="Masukan Image">
      </div>

      <div class="form-group">
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="role_id" name="role_id" placeholder="Masukan Jenis Akun">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="is_active" name="is_active" placeholder="Aktifkan akun ?">
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>

      