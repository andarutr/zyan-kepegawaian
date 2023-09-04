<?=  $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Profile</h3>
        </div> <!-- /.card-body -->
        <div class="card-body">
          <center>
            <img src="<?= base_url('/assets/dist/img/profile/'.$user['picture'])?>" class="img-fluid rounded-circle mb-3" width="150">
            <h4><?= $user['nama'] ?></h4>
          </center>
          <p class="mt-3">NIP : <?= $user['nip'] ?></p>
          <p>Nama : <?= $user['nama'] ?></p>
          <p>Tgl Lahir : <?= $user['tgl_lahir'] ?></p>
          <p>Tempat Lahir : <?= $user['tempat_lahir'] ?></p>
          <p>Pendidikan: <?= $user['pendidikan'] ?></p>
          <p>Jabatan: <?= $user['jabatan'] ?></p>
        </div>  
      </div>  
    </div>
    <div class="col-lg-8">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Edit Profile</h3>
        </div> <!-- /.card-body -->
        <div class="card-body">
          <?php if(session()->get('is_pegawai') === 1): ?>
          <?= form_open_multipart('/pegawai/profile') ?>
          <?php else: ?>
          <?= form_open_multipart('/user/profile') ?>
          <?php endif ?>
            <div class="card-body">
              <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control" name="nip" id="nip" value="<?= $user['nip'] ?>">
                <p class="text-danger"><?= validation_show_error('nip') ?></p>
              </div>

              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $user['nama'] ?>">
                <p class="text-danger"><?= validation_show_error('nama') ?></p>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="pendidikan">Pendidikan</label>
                    <select class="form-control" name="pendidikan">
                      <option value="<?= $user['pendidikan'] ?>"><?= $user['pendidikan'] ?></option>
                      <option>D3</option>
                      <option>Strata I</option>
                      <option>Strata II</option>
                      <option>Strata III</option>
                    </select>
                    <p class="text-danger"><?= validation_show_error('pendidikan') ?></p>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $user['jabatan'] ?>">
                    <p class="text-danger"><?= validation_show_error('jabatan') ?></p>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?= $user['tempat_lahir'] ?>">
                    <p class="text-danger"><?= validation_show_error('tempat_lahir') ?></p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $user['tgl_lahir'] ?>">
                    <p class="text-danger"><?= validation_show_error('tgl_lahir') ?></p>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Foto Profil</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="picture">
                    <label class="custom-file-label" for="exampleInputFile">Pilih Foto</label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-success">Edit</button>
            </div>
          </form>
        </div><!-- /.card-body -->
      </div>
    </div>
  </div>
</div><!-- /.container-fluid -->
<?= $this->endSection()?>