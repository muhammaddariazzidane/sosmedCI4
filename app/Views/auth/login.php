<?= $this->extend('template/auth') ?>
<?= $this->section('auth') ?>

<div class="container my-5 py-5">
  <div class="row justify-content-center mx-auto">

    <div class="col-lg-5 bg-primary text-white shadow p-4 rounded-4">
      <h3 class="mb-4 fw-semibold text-center">Login</h3>
      <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-warning d-flex align-items-center" role="alert">
          <i class="bi bi-exclamation-triangle me-2"></i>
          <div>
            <?= session()->getFlashdata('message') ?>
          </div>
        </div>
      <?php endif ?>
      <form method="post" action="/login">
        <?= csrf_field() ?>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control rounded-3 <?= $validation->hasError('email') ? 'is-invalid' : '' ?>" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="validationServer03Feedback" class="d-block invalid-feedback">
            <?= $validation->getError('email') ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control rounded-3 <?= $validation->hasError('password') ? 'is-invalid' : '' ?>" name="password" id="exampleInputPassword1">
          <div id="validationServer03Feedback" class="d-block invalid-feedback">
            <?= $validation->getError('password') ?>
          </div>
        </div>

        <div class="mb-3">
          <small>Dont have account ? <a style="color: #6ee7b7;" class="text-decoration-underline" href="/register">Register here</a> </small>
        </div>

        <button type="submit" class="btn mt-2 text-white" style="background-color: #34d399;">Login</button>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>