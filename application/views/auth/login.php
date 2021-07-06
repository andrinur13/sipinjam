<div class="container">
  <div class=" h-100 d-flex row justify-content-center m-4">
    <div class="col-4 border card shadow p-4">

      <div class="mb-3">
        <img src="https://png.pngtree.com/png-vector/20190114/ourlarge/pngtree-abstract-colorful-logo-3d-modern-icon-concept-png-image_313249.jpg" class="img-fluid mx-auto d-block" style="height: 200px" alt="">
      </div>

      <div class="mb-3">
        <label for="email-input" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="email-input" placeholder="Email Anda...">
      </div>

      <div class="mb-3">
        <label for="password-input" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id=password-input" placeholder="Password Anda...">
      </div>

      <div class="d-grid gap-2 mb-2">
        <button class="btn btn-danger" type="button">Login</button>
      </div>
      
      <hr>

      <div class="mb-3">
        <p class="text-center" style="font-size: 12px;" >Belum punya akun ? <a style="text-decoration: none;" href="<?= base_url('auth/register'); ?>" class="text-danger fw-bold">Daftar sekarang</a> </p>
      </div>


    </div>
  </div>
</div>