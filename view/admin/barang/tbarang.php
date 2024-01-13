<?php include '../layout/header-barang.php' ?>

                <!-- Begin Page Content -->
                <!-- /.container-fluid -->
                <div class="row justify-content-center animated--grow-in">
                    <div class="col-xl-7 col-lg-10 col-md-9">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Stok Barang</h1>
                                            </div>
                                            <form method="POST" action="proses-tambah.php">
                                                <div class="form-group">
                                                    <label for="Nama_barang">Nama Barang : </label>
                                                    <input required="required" type="text" name="Nama_barang" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jumlah_barang">Jumlah Barang : </label>
                                                    <input required="required" type="text" name="jumlah_barang" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga_barang">Harga Barang : </label>
                                                    <input required="required" type="text" name="harga_barang" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggalMasuk">Tanggal Barang Masuk : </label>
                                                    <input required="required" type="date" name="tanggal_masuk" class="form-control form-control-user" data-date-format="dd-mm-yyyy">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Nama_barang">Tanggal Kadaluarsa Barang : </label>
                                                    <input required="required" type="date" name="tanggal_EXP" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" name="tambah_dbarang" value="Masukkan" class="btn btn-primary btn-user btn-block">
                                                    <a class="btn btn-danger btn-user btn-block" href="dbarang.php">Kembali</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

<?php include '../layout/footer.php' ?>