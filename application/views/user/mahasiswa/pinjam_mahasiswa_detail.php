<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="card shadow mb-4 mt-4 p-4">
                <form action="<?= base_url('peminjaman/proses') ?>" method="POST">
                    <input type="number" hidden name="id_fasilitas" id="id_fasilitas" value="<?= $fasilitas['id_fasilitas']; ?>">
                    <input type="number" hidden name="id_user" id="id_user" value="<?= $user['id_user']; ?>">

                    <div class="mb-3">
                        <label for="jumlah_pinjam" class="form-label">Jumlah Pinjam</label>
                        <input type="number" class="form-control" name="jumlah_pinjam" id="jumlah_pinjam">
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                        <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam">
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tanggal_kembali" id="tanggal_kembali">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary btn-block" value="Pinjam">
                    </div>
                </form>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>