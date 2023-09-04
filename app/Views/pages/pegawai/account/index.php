<?=  $this->extend('layouts/app') ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
    <?php if(session('msg')) : ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <p><?= session('msg') ?></p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php endif ?>
    </div>
    <div class="col-lg-12">
      <a class="btn btn-primary mb-3" href="<?= base_url($req->uri->getSegment(1).'/manajemen-akun/create') ?>">Tambah Data</a>
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">Manajemen Akun</h3>
        </div> <!-- /.card-body -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Foto</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Jabatan</th>
              <th>Role</th>
              <th colspan="3">Aksi</th>
              <td style="display: none;"></td>
            </tr>
            </thead>
            <tbody>
              <?php foreach($users as $user) : ?>
              <tr>
                <td>
                  <img src="<?= base_url('assets/dist/img/profile/'.$user['picture']) ?>" class="img-fluid rounded" width="50">
                </td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['nip'] ?></td>
                <td><?= $user['jabatan'] ?></td>
                <td><?= $user['is_pegawai'] ? 'Pegawai' : 'User' ?></td>
                <td>
                  <a class="btn btn-warning" href="<?= base_url($req->uri->getSegment(1).'/manajemen-akun/ganti-password/'.$user['id']) ?>"><i class="fas fa-lock"></i></a>
                </td>
                <td>
                  <a class="btn btn-success" href="<?= base_url($req->uri->getSegment(1).'/manajemen-akun/edit/'.$user['id']) ?>"><i class="fas fa-edit"></i></a>
                </td>
                <td>
                  <a class="btn btn-danger" href="<?= base_url($req->uri->getSegment(1).'/manajemen-akun/destroy/'.$user['id']) ?>" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash"></i></a>
                </td>
                <td style="display: none;"></td>
              </tr>
              <?php endforeach ?>
            </tfoot>
          </table>
        </div>  
      </div>  
    </div>
  </div>
</div><!-- /.container-fluid -->
<?= $this->endSection()?>

<?= $this->section('scripts') ?>
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<?= $this->endSection() ?>