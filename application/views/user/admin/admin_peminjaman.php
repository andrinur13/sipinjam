<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="card shadow mb-4 mt-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Fasilitas</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jumlah</th>
                                    <th>Tgl Peminjaman</th>
                                    <th>Tgl Pengembalian</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $number = 1;
                                foreach ($peminjaman as $pmj) : ?>
                                    <tr>
                                        <td> <?= $number; ?> </td>
                                        <td> <?= $pmj['amount']; ?> buah </td>
                                        <td> <?= $pmj['tanggal_pinjam']; ?> </td>
                                        <td> <?= $pmj['tanggal_kembali']; ?> </td>
                                        <td>
                                            <?php if ($pmj['id_petugas'] == null) : ?>
                                                <span class="badge badge-warning">Belum Direspon</span>
                                            <?php else : ?>
                                                <span class="badge badge-success">Direspon</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if ($pmj['id_petugas'] == null) : ?>
                                                <a href="<?= base_url('peminjaman/setujui/') . $pmj['id_peminjaman']; ?>" class="badge badge-primary"> Terima </a> || <a href="" class="badge badge-danger"> Tolak </a>
                                            <?php else : ?>
                                                <span class="badge badge-primary"> Direspon </span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $number++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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