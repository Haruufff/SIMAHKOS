<?php require_once '../../../model/m_pengelola.php'; ?>
<?php include '../layout/header-pengelola.php' ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Pengelola</h1>
                    
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div>
                            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-download fa-sm text-white-50"></i> Download PDF
                            </a>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-download fa-sm text-white-50"></i> Download EXCEL
                            </a> -->
                        </div>
                        <a href="tambah-pengelola.php" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus-circle"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </a>
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
                        <div class='alert alert-success alert-dismissible' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Pengelola berhasil disimpan.
                        </div>";
                    }elseif ($_GET['alert'] == 3) {
                        echo "
                        <div class='alert alert-success alert-dismissible' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Pengelola berhasil diubah.
                        </div>";
                    } elseif ($_GET['alert'] == 4) {
                        echo "
                        <div class='alert alert-success alert-dismissible' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Pengelola berhasil dihapus.
                        </div>";
                    }

                    ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengelola</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Brand</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Brand</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        
                                        $no = 1;
                                        $tampil = new User();
                                        $result = $tampil->view();
                                        if(!empty($result)) {
                                            foreach($result as $data) {

                                        ?>
                                        <tr>
                                            <td align="center"><?php echo $no++; ?></td>
                                            <td><?php echo $data['id_user']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['username']; ?></td>
                                            <td><?php echo $data['Nama_BA']; ?></td>
                                            <td><?php echo $data['level']; ?></td>
                                            <td>
                                                <a href="edit-pengelola.php?id_user=<?php echo $data['id_user']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                                    <i class="fas fa-edit fa-sm text-white-50"></i> Ubah
                                                </a>
                                                
                                                <a href="proses-hapus.php?id_user=<?php echo $data['id_user'];?>" onclick="return confirm('Anda yakin ingin menghapus data <?php echo $data['nama']; ?>?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                                    <i class="fas fa-trash fa-sm text-white-50"></i> Hapus
                                                </a>
                                            </td>
                                        </tr>
                                        <?php 

                                            }
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include '../layout/footer-table.php' ?>