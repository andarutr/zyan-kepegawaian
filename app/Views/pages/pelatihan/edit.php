<?=  $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Edit Pelatihan</h3>
        </div> <!-- /.card-body -->
        <div class="card-body">
          <?= form_open($req->uri->getSegment(1).'/pelatihan/edit/'.$pelatihan['id']) ?>
            <div class="card-body">
              <div class="form-group">
                <label for="pelatihan">Pelatihan</label>
                <input type="text" class="form-control" name="pelatihan" id="pelatihan" value="<?= $pelatihan['pelatihan'] ?>">
                <p class="text-danger"><?= validation_show_error('pelatihan') ?></p>
              </div>
              
              <div class="form-group">
                <label for="tempat">Tempat</label>
                <input type="text" class="form-control" name="tempat" id="tempat" value="<?= $pelatihan['tempat'] ?>">
                <p class="text-danger"><?= validation_show_error('tempat') ?></p>
              </div>

              <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="text" class="form-control" name="tahun" id="tahun" value="<?= $pelatihan['tahun'] ?>">
                <p class="text-danger"><?= validation_show_error('tahun') ?></p>
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