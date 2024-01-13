<?php include '../layout/header-ba.php' ?>

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
                                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Brand</h1>
                                            </div>
                                            <form method="POST" action="proses-tambah.php">
                                                <div class="form-group">
                                                    <label for="Nama_BA">Nama Brand : </label>
                                                    <input required="required" type="text" name="Nama_BA" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" name="tambah_brand" value="Masukkan" class="btn btn-primary btn-user btn-block">
                                                    <a class="btn btn-danger btn-user btn-block" href="brand.php">Kembali</a>
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