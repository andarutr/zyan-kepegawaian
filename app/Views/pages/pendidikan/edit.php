<?=  $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Edit Pendidikan</h3>
        </div> <!-- /.card-body -->
        <div class="card-body">
          <?= form_open($req->uri->getSegment(1).'/pendidikan/edit/'.$pendidikan['id']) ?>
            <div class="card-body">
              <div class="form-group">
                <label for="tingkat">Tingkat</label>
                <select class="form-control" name="tingkat">
                  <option value="<?= $pendidikan['tingkat'] ?>"><?= $pendidikan['tingkat'] ?></option>
                  <option value="D3">D3</option>
                  <option value="S1">S1</option>
                  <option value="S2">S2</option>
                  <option value="S3">S3</option>
                </select>
                <p class="text-danger"><?= validation_show_error('tingkat') ?></p>
              </div>

              <div class="form-group">
                <label for="universitas">Universitas</label>
                <input type="text" class="form-control" name="universitas" id="universitas" value="<?= $pendidikan['universitas'] ?>">
                <p class="text-danger"><?= validation_show_error('universitas') ?></p>
              </div>
              
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?= $pendidikan['jurusan'] ?>">
                <p class="text-danger"><?= validation_show_error('jurusan') ?></p>
              </div>

              <div class="form-group">
                <label for="tahun_lulus">Tahun Lulus</label>
                <input type="number" class="form-control" name="tahun_lulus" id="tahun_lulus" value="<?= $pendidikan['tahun_lulus'] ?>">
                <p class="text-danger"><?= validation_show_error('tahun_lulus') ?></p>
              </div>
              <button type="submit" class="btn btn-success">Edit</button>
            </div>
          <?= form_close() ?>
        </div><!-- /.card-body -->
      </div>
    </div>
  </div>
</div><!-- /.container-fluid -->
<?= $this->endSection()?>