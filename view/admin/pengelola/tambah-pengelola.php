<?php include '../layout/header-pengelola.php' ?>
<?php require_once '../../../model/m_brand.php'; ?>

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
                                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Pengelola</h1>
                                            </div>
                                            <form method="POST" action="proses-tambah.php">
                                                <div class="form-group">
                                                    <label for="nama">Nama Pengelola : </label>
                                                    <input required="required" type="text" name="nama" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="username">Username : </label>
                                                    <input required="required" type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pass">Password : </label>
                                                    <input required="required" type="text" name="pass" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_ba">Brand Ambassador : </label>
                                                    <select required="required" name="id_ba" class="form-control form-control-user" id="exampleInputPassword" aria-describedby="emailHelp">
                                                        <?php
                                                        $tampil = new Brand();
                                                        $result = $tampil->view();
                                                        if(!empty($result)) {
                                                            foreach($result as $data) {
                                                        ?>
                                                        <option value="<?php echo $data['id_ba']; ?>"><?php echo $data['Nama_BA']; ?></option>
                                                        <?php         
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_ba">Level : </label>
                                                    <select required="required" name="level" class="form-control form-control-user" id="exampleInputPassword" aria-describedby="emailHelp">
                                                        <option value="Super_admin">Super Admin</option>
                                                        <option value="admin">Admin</option>
                                                    </select>
                                                </div>
                                                <input type="submit" name="tambah_pengelola" value="Masukkan" class="btn btn-primary btn-user btn-block">
                                                <a class="btn btn-danger btn-user btn-block" href="pengelola.php">Kembali</a>
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