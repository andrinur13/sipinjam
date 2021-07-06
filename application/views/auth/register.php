<div class="container">
  <div class=" h-100 d-flex row justify-content-center m-4">
    <div class="col-6 border card shadow" style="padding: 60px;">

      <div class="mb-3">
        <!-- <img src="https://png.pngtree.com/png-vector/20190114/ourlarge/pngtree-abstract-colorful-logo-3d-modern-icon-concept-png-image_313249.jpg" class="img-fluid mx-auto d-block" style="height: 200px" alt=""> -->
      </div>

      <div class="mb-3">
        <label for="name-input" class="form-label">Nama</label>
        <input type="text" class="form-control" name="name-input" id="name-input" placeholder="Nama Anda...">
      </div>

      <div class="mb-3">
        <label for="nim-input" class="form-label">NIM/NIY</label>
        <input type="text" class="form-control" name="name-input" id="name-input" placeholder="NIM/NIY Anda...">
      </div>

      <div class="mb-3">
        <label for="email-input" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="email-input" placeholder="Email Anda...">
      </div>

      <div class="mb-3">
        <label for="status-input" class="form-label">Status</label>
        <select class="form-select" id="status-input">
          <option selected value="null">Pilih status</option>
          <option value="mahasiswa">Mahasiswa</option>
          <option value="dosen">Dosen</option>
          <option value="staff">Staff</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="password-input" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id=password-input" placeholder="Password Anda...">
      </div>

      <div class="mb-3">
        <label for="password-input2" class="form-label">Password Confirmation</label>
        <input type="password" class="form-control" name="password2" id=password-input2" placeholder="Password Konfirmasi Anda...">
      </div>

      <div class="d-grid gap-2 mb-2">
        <button class="btn btn-danger" type="button">Registrasi</button>
      </div>

      <hr>

      <div class="mb-3">
        <p class="text-center" style="font-size: 12px;">Sudah punya akun ? <a style="text-decoration: none;" href="<?= base_url('auth/login'); ?>" class="text-danger fw-bold">Login sekarang</a> </p>
      </div>


    </div>
  </div>
</div>