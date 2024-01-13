<?php include '../layout/header-pengelola.php' ?>
<?php require_once '../../../model/m_brand.php'; ?>


<?php
$id_user = $_GET['id_user'];
if (isset($id_user)) {
    require_once '../../../model/m_pengelola.php';
    $user = new User();
    $data = $user->get_user($id_user);
    $id_user  = $data['id_user'];
    $nama     = $data['nama'];
    $username = $data['username'];
    $id_ba    = $data['id_ba'];
    $pass     = $data['pass'];
    $level    = $data['level'];
}
?>

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
                                                <h1 class="h4 text-gray-900 mb-4">ubah Data Pengelola</h1>
                                            </div>
                                            <form method="POST" action="proses-edit.php">
                                                <div class="form-group">
                                                    <label for="nama">Nama Pengelola : </label>
                                                    <input required="required" type="hidden" name="id_user" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" value="<?php echo $id_user; ?>" required>
                                                    <input required="required" type="text" name="nama" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" value="<?php echo $nama; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="username">Username : </label>
                                                    <input readonly="readonly" type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" value="<?php echo $username; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pass">Password : </label>
                                                    <input readonly="readonly" type="text" name="pass" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" value="<?php echo $pass; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_ba">Brand Ambassador : </label>
                                                    <select required="required" name="id_ba" class="form-control form-control-user" id="exampleInputPassword" aria-describedby="emailHelp">
                                                        <option>-- Pilih Brand Ambassador --</option>
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
                                                    <label for="level">Level : </label>
                                                    <select required="required" name="level" class="form-control form-control-user" id="exampleInputPassword" aria-describedby="emailHelp">
                                                        <option value="Super_admin">Super Admin</option>
                                                        <option value="admin">Admin</option>
                                                    </select>
                                                </div>
                                                <input type="submit" class="btn btn-primary btn-user btn-block" name="ubah_pengelola" value="Masukkan">
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