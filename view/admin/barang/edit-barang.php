<?php include '../layout/header-barang.php' ?>

                <!-- Begin Page Content -->
                <!-- /.container-fluid -->

                <?php

                $id_barang = $_GET['id_barang'];
                if (isset($id_barang)) {
                    require_once '../../../model/m_barang.php';
                    $barang = new Barang();
                    $data = $barang->get_barang($id_barang);
                    $id_barang      = $data['id_barang'];
                    $Nama_barang    = $data['Nama_barang'];
                    $jumlah_barang  = $data['jumlah_barang'];
                    $harga_barang   = $data['harga_barang'];
                    $tanggal_masuk  = $data['tanggal_masuk'];
                    $tanggal_EXP    = $data['tanggal_EXP'];
                }

                ?>
                <div class="row justify-content-center animated--grow-in">
                    <div class="col-xl-7 col-lg-10 col-md-9">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Ubah Data Stok Barang</h1>
                                            </div>
                                            <form method="POST" action="proses-ubah.php">
                                                <div class="form-group">
                                                    <label for="Nama_barang">Nama Barang : </label>
                                                    <input required="required" type="hidden" name="id_barang" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" value="<?php echo $id_barang; ?>" required>
                                                    <input required="required" type="text" name="Nama_barang" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" value="<?php echo $Nama_barang; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                <label for="jumlah_barang">Jumlah Barang : </label>
                                                    <input readonly="readonly" type="text" name="jumlah_barang" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" value="<?php echo $jumlah_barang; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                <label for="harga_barang">Harga Barang : </label>
                                                    <input required="required" type="text" name="harga_barang" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" value="<?php echo $harga_barang; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                <label for="tanggalMasuk">Tanggal Barang Masuk : </label>
                                                    <input required="required" type="date" name="tanggal_masuk" class="form-control form-control-user" data-date-format="dd-mm-yyyy" value="<?php echo $tanggal_masuk; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                <label for="Nama_barang">Tanggal Kadaluarsa Barang : </label>
                                                <input required="required" type="date" name="tanggal_EXP" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" value="<?php echo $tanggal_EXP; ?>" required>
                                                </div>
                                                <input type="submit" class="btn btn-primary btn-user btn-block" name="ubah_dbarang" value="Masukkan">
                                                <a class="btn btn-danger btn-user btn-block" href="dbarang.php">Kembali</a>
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