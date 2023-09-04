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
          <?= form_open($req->uri->getSegment(1).'/manajemen-akun/edit/'.$user['id']) ?>
            <div class="card-body">
              <div class="form-group">
                <label for="nip">NIP*</label>
                <input type="text" class="form-control" name="nip" id="nip" value="<?= $user['nip'] ?>">
                <p class="text-danger"><?= validation_show_error('nip') ?></p>
              </div>
              
              <div class="form-group">
                <label for="nama">Nama Lengkap*</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $user['nama'] ?>">
                <p class="text-danger"><?= validation_show_error('nama') ?></p>
              </div>

              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $user['tgl_lahir'] ?>">
                <p class="text-danger"><?= validation_show_error('tgl_lahir') ?></p>
              </div>

              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?= $user['tempat_lahir'] ?>">
                <p class="text-danger"><?= validation_show_error('tempat_lahir') ?></p>
              </div>

              <div class="form-group">
                <label for="pendidikan">Pendidikan*</label>
                <select name="pendidikan" class="form-control">
                  <option value="<?= $user['pendidikan'] ?>"><?= $user['pendidikan'] ?></option>
                  <option value="D3">D3</option>
                  <option value="Strata I">Strata I</option>
                  <option value="Strata II">Strata II</option>
                  <option value="Strata III">Strata III</option>
                </select>
                <p class="text-danger"><?= validation_show_error('pendidikan') ?></p>
              </div>

              <div class="form-group">
                <label for="jabatan">Jabatan*</label>
                <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $user['jabatan'] ?>">
                <p class="text-danger"><?= validation_show_error('jabatan') ?></p>
              </div>

              <div class="form-group">
                <label for="is_pegawai">Role*</label>
                <select name="is_pegawai" class="form-control">
                  <option value="<?= $user['is_pegawai'] ?>"><?= $user['is_pegawai'] ? 'Pegawai' : 'User' ?></option>
                  <option value="1">Pegawai</option>
                  <option value="0">User</option>
                </select>
                <p class="text-danger"><?= validation_show_error('is_pegawai') ?></p>
              </div>

              <button type="submit" class="btn btn-success">Perbarui</button>
            </div>
          <?= form_close() ?>
        </div><!-- /.card-body -->
      </div>
    </div>
  </div>
</div><!-- /.container-fluid -->
<?= $this->endSection()?>