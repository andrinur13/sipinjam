<div class="container">
  <div class="row justify-content-center m-4">
    <div class="col-lg-4 col-md-6 border card shadow p-4">

      <div class="mb-3">
        <img src="https://png.pngtree.com/png-vector/20190114/ourlarge/pngtree-abstract-colorful-logo-3d-modern-icon-concept-png-image_313249.jpg" class="img-fluid mx-auto d-block" style="height: 200px" alt="">
      </div>

      <?= $this->session->flashdata('error');  ?>

      <form action="<?= base_url('loginproses') ?>" method="POST">
        <div class="mb-3">
          <label for="email-input" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="email-input" placeholder="Email Anda...">
        </div>

        <div class="mb-3">
          <label for="password-input" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id=password-input" placeholder="Password Anda...">
        </div>

        <div class="mb-2">
          <input type="submit" class="btn btn-danger btn-block" type="button" value="Login">
        </div>
      </form>

      <hr>

      <div class="mb-3">
        <p class="text-center" style="font-size: 12px;">Belum punya akun ? <a style="text-decoration: none;" href="<?= base_url('auth/register'); ?>" class="text-danger fw-bold">Daftar sekarang</a> </p>
      </div>


    </div>
  </div>
</div>