<?php include '../layout/header-bterjual.php' ?>
<?php require_once '../../../model/m_bterjual.php' ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Stok Barang</h1>
                    
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div>
                            <?php if($_SESSION['level'] == "Super_admin") { ?>
                            <a href="export-bterjual.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="_blank">
                                <i class="fas fa-download fa-sm text-white-50"></i> Download Data Terjual
                            </a>
                            <?php } ?>
                        </div>
                        <a href="tambah-dbterjual.php" class="btn btn-primary btn-icon-split">
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
                            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Barang berhasil disimpan.
                        </div>";
                    }elseif ($_GET['alert'] == 3) {
                        echo "
                        <div class='alert alert-success alert-dismissible' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Barang berhasil diubah.
                        </div>";
                    } elseif ($_GET['alert'] == 4) {
                        echo "
                        <div class='alert alert-success alert-dismissible' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                            <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Data Barang berhasil dihapus.
                        </div>";
                    }
                    ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Terjual</th>
                                            <th>Tanggal Terjual</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Terjual</th>
                                            <th>Tanggal Terjual</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        
                                        $no = 1;
                                        $tampil = new Terjual();
                                        $result = $tampil->view();
                                        if(!empty($result)) {
                                            foreach($result as $data) {
                                                $tglTerjual      = $data['tanggal_terjual'];
                                                $tgl             = explode('-',$tglTerjual);
                                                $tanggal_terjual = $tgl[2]."-".$tgl[1]."-".$tgl[0];
                                        ?>
                                        <tr>
                                            <td align="center"><?php echo $no++; ?></td>
                                            <td><?php echo $data['Nama_barang']; ?></td>
                                            <td><?php echo $data['jumlah_bterjual']; ?></td>
                                            <td><?php echo $tanggal_terjual?></td> 
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