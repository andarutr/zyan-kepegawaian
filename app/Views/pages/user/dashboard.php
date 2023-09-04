<?=  $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Dashboard</h3>
    </div> <!-- /.card-body -->
    <div class="card-body">
      <p>Selamat datang bapak/ibu <?= session()->get('nama') ?></p>
    </div><!-- /.card-body -->
  </div>
</div><!-- /.container-fluid -->
<?= $this->endSection()?>