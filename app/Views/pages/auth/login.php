<?=  $this->extend('layouts/auth') ?>

<?= $this->section('content') ?>
<?php if(session()->get('msg')) : ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <p><?= session()->get('msg') ?></p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif ?>
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg">Sign in to start your session</p>
      <?= form_open() ?>
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="nip" placeholder="NIP" value="<?= set_value('nip') ?>">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <p class="text-danger"><?= validation_show_error('nip') ?></p>
      <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <p class="text-danger"><?= validation_show_error('password') ?></p>
      <div class="row">
        <div class="col-8">
          <div class="icheck-primary">
            <input type="checkbox" id="remember">
            <label for="remember">
              Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    <?= form_close() ?>
  </div>
  <!-- /.login-card-body -->
</div>
<?= $this->endSection() ?>