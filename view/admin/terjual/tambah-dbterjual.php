<?php include '../layout/header-barang.php' ?>
<?php require_once '../../../model/m_bterjual.php'; ?>

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
                                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Barang Terjual</h1>
                                            </div>

                                            <?php

                                            if(empty($_GET['alert'])) {
                                                echo "";
                                            }elseif($_GET['alert'] == 1) {
                                                echo "
                                                <div class='alert alert-danger alert-dismissible' role='alert'>
                                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                        <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                    <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
                                                </div>";
                                            }elseif($_GET['alert'] == 2) {
                                                echo "
                                                <div class='alert alert-danger alert-dismissible' role='alert'>
                                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                        <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                    <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Melebihi Stok barang yang tersedia.
                                                </div>";
                                            }
                                        
                                            ?>


                                            <form method="POST" action="proses-tambah.php">
                                                <div class="form-group">
                                                    <label for="id_ba">Nama Barang : </label>
                                                    <select required="required" name="id_barang" class="form-control form-control-user" id="exampleInputPassword" aria-describedby="emailHelp">
                                                        <option>-- List Barang --</option>
                                                        <?php
                                                        $tampil = new Terjual();
                                                        $result = $tampil->view_barang();
                                                        if(!empty($result)) {
                                                            foreach($result as $data) {
                                                        ?>
                                                        <option value="<?php echo $data['id_barang']; ?>"><?php echo $data['Nama_barang']; ?> (<?php echo $data['jumlah_barang']; ?>)</option>
                                                        <?php         
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jumlah_barang">Jumlah Terjual : </label>
                                                    <input required="required" type="text" name="jumlah_bterjual" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Nama_barang">Tanggal Terjual : </label>
                                                    <input required="required" type="date" name="tanggal_terjual" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" name="tambah_dbterjual" value="Masukkan" class="btn btn-primary btn-user btn-block">
                                                    <a class="btn btn-danger btn-user btn-block" href="dbterjual.php">Kembali</a>
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