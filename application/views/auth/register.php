<div class="container">
  <div class=" h-100 d-flex row justify-content-center m-4">
    <div class="col-6 border card shadow" style="padding: 60px;">

      <div class="mb-3">
        <!-- <img src="https://png.pngtree.com/png-vector/20190114/ourlarge/pngtree-abstract-colorful-logo-3d-modern-icon-concept-png-image_313249.jpg" class="img-fluid mx-auto d-block" style="height: 200px" alt=""> -->
      </div>

      <form action="<?= base_url('registerproses') ?>" method="POST">
        <div class="mb-3">
          <label for="name-input" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama-input" id="nama-input" placeholder="Nama Anda...">
        </div>

        <div class="mb-3">
          <label for="nomor-input" class="form-label">NIM/NIY</label>
          <input type="text" class="form-control" name="nomor-input" id="nomor-input" placeholder="NIM/NIY Anda...">
        </div>

        <div class="mb-3">
          <label for="email-input" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email-input" id="email-input" placeholder="Email Anda...">
        </div>

        <div class="mb-3">
          <label for="status-input" class="form-label">Status</label>
          <select class="form-control" id="status-input" name="status-input">
            <option selected value="null">Pilih status</option>
            <option value="mahasiswa">Mahasiswa</option>
            <option value="dosen">Dosen</option>
            <option value="staff">Staff</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
          <select class="form-control" id="jenis-kelamin" name="jenis-kelamin">
            <option selected value="null">Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="alamat">Alamat</label>
          <textarea class="form-control" id="alamat" name="alamat-input" placeholder="Alamat Anda" required></textarea>
        </div>

        <div class="mb-3">
          <label for="password-input" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password-input" placeholder="Password Anda...">
        </div>

        <div class="mb-3">
          <label for="password-input2" class="form-label">Password Confirmation</label>
          <input type="password" class="form-control" name="password2" id="password-input2" placeholder="Password Konfirmasi Anda...">
        </div>

        <div class="mb-2 mt-4">
          <input class="btn btn-danger btn-block" type="submit" value="Register">
        </div>

      </form>


      <hr>

      <div class="mb-3">
        <p class="text-center" style="font-size: 12px;">Sudah punya akun ? <a style="text-decoration: none;" href="<?= base_url('auth/login'); ?>" class="text-danger fw-bold">Login sekarang</a> </p>
      </div>


    </div>
  </div>
</div>