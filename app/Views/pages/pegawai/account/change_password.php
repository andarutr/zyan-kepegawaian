<?=  $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Edit Akun</h3>
        </div> <!-- /.card-body -->
        <div class="card-body">
          <?= form_open($req->uri->getSegment(1).'/manajemen-akun/ganti-password/'.$user['id']) ?>
            <div class="card-body">
              <div class="form-group">
                <label>NIP Akun</label>
                <input type="text" class="form-control" value="<?= $user['nip'] ?>" readonly>
              </div>

              <div class="form-group">
                <label>Nama Akun</label>
                <input type="text" class="form-control" value="<?= $user['nama'] ?>" readonly>
              </div>

              <div class="form-group">
                <label for="new_password">Password Baru</label>
                <input type="password" class="form-control" name="new_password" id="new_password">
                <p class="text-danger"><?= validation_show_error('new_password') ?></p>
              </div>

              <button type="submit" class="btn btn-success">Ganti Password</button>
            </div>
          <?= form_close() ?>
        </div><!-- /.card-body -->
      </div>
    </div>
  </div>
</div><!-- /.container-fluid -->
<?= $this->endSection()?>