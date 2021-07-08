<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="card shadow mb-4 mt-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Fasilitas</h6>
                    <br>
                    <div class="btn btn-primary" data-toggle="modal" data-target="#input-fasilitas">Tambah</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Fasilitas</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $number = 1;
                                foreach ($fasilitas as $fs) : ?>
                                    <tr>
                                        <td> <?= $number; ?> </td>
                                        <td> <?= $fs['nama_fasilitas']; ?> </td>
                                        <td> <?= $fs['total_amount']; ?> buah</td>
                                        <td> <span class="badge badge-danger">Delete</span> </td>
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

    <!-- Modal -->
    <div class="modal fade" id="input-fasilitas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="kelola/tambah" method="POST">
                    <div class="modal-body">
                        <div class="">
                            <label for="name">Nama</label>
                            <input type="text" type="text" id="name" name="name" class="form-control">
                        </div>

                        <div class="">
                            <label for="name">Jumlah</label>
                            <input type="text" type="number" id="jumlah" name="jumlah" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Tambah">
                    </div>
                </form>
            </div>
        </div>
    </div>

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