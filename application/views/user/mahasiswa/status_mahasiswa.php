<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="card shadow mb-4 mt-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Status Peminjaman</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Fasilitas</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <?php if ($peminjaman != null) : ?>
                                <tbody>
                                    <?php
                                    $number = 1;
                                    foreach ($peminjaman as $pmj) : ?>
                                        <?php if ($pmj['id_petugas'] != null) : ?>
                                            <tr>
                                                <td> <?= $number; ?> </td>
                                                <td> <?= $pmj['nama_fasilitas']; ?> </td>
                                                <td> <?= $pmj['tanggal_pinjam']; ?> </td>
                                                <td> <?= $pmj['tanggal_kembali']; ?> </td>
                                                <td> <span class="badge badge-success">Disetujui</span> </td>
                                            </tr>
                                            <?php elseif($pmj['id_petugas'] == null) : ?>
                                                <tr>
                                                <td> <?= $number; ?> </td>
                                                <td> <?= $pmj['nama_fasilitas']; ?> </td>
                                                <td> <?= $pmj['tanggal_pinjam']; ?> </td>
                                                <td> <?= $pmj['tanggal_kembali']; ?> </td>
                                                <td> <span class="badge badge-warning">Menunggu ACC</span> </td>
                                            </tr>
                                            <?php  ?>
                                        <?php endif; ?>
                                    <?php
                                        $number++;
                                    endforeach; ?>
                                </tbody>
                            <?php endif; ?>
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