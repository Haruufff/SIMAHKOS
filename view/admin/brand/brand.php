<?php
require_once '../../../model/m_brand.php';
?>
<?php include '../layout/header-ba.php' ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Brand</h1>
                    
                    
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div>
                            <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-download fa-sm text-white-50"></i> Download PDF
                            </a>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-download fa-sm text-white-50"></i> Download EXCEL
                            </a>-->
                        </div>
                        <a href="tambah-brand.php" class="btn btn-primary btn-icon-split">
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
                            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Brand berhasil disimpan.
                        </div>";
                    }elseif ($_GET['alert'] == 3) {
                        echo "
                        <div class='alert alert-success alert-dismissible' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data brand berhasil diubah.
                        </div>";
                    } elseif ($_GET['alert'] == 4) {
                        echo "
                        <div class='alert alert-success alert-dismissible' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data brand berhasil dihapus.
                        </div>";
                    }

                    ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Brand</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID</th>
                                            <th>Nama Brand</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID</th>
                                            <th>Nama Brand</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        
                                        $no = 1;
                                        $tampil = new Brand();
                                        $result = $tampil->view();
                                        if(!empty($result)) {
                                            foreach($result as $data) {
                                        ?>
                                        <tr>
                                            <td align="center"><?php echo $no++; ?></td>
                                            <td><?php echo $data['id_ba']; ?></td>
                                            <td><?php echo $data['Nama_BA']; ?></td>
                                            <td>
                                                <a class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" href="proses-hapus.php?id_ba=<?php echo $data['id_ba']; ?>" onclick="return confirm('Anda yakin ingin menghapus data Brand <?php echo $data['Nama_BA']; ?>?')">
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