<?php require_once '../../../model/m_barang.php'; ?>
<?php include '../layout/header-barang.php' ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Stok Barang</h1><br>
                    
                    
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div>
                            <?php if($_SESSION['level'] == "Super_admin") { ?>
                            <a href="export-barang.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="_blank">
                                <i class="fas fa-download fa-sm text-white-50"></i> Download Data Barang
                            </a>
                            <?php } ?>
                        </div>
                        <a href="tbarang.php" class="btn btn-primary btn-icon-split">
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
                                            <th>Jumlah Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal EXP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tanggal EXP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        
                                        $no = 1;
                                        $tampil = new Barang();
                                        $result = $tampil->view();
                                        if(!empty($result)) {
                                            foreach($result as $data) {
                                                $tanggalMasuk = $data['tanggal_masuk'];
                                                $tanggalEXP = $data['tanggal_EXP'];
                                                $tgl1 = explode('-',$tanggalMasuk);
                                                $tgl2 = explode('-', $tanggalEXP);
                                                $tanggal_masuk = $tgl1[2]."-".$tgl1[1]."-".$tgl1[0];
                                                $tanggal_EXP = $tgl2[2]."-".$tgl2[1]."-".$tgl2[0];
                                        ?>
                                        <tr>
                                            <td align="center"><?php echo $no++; ?></td>
                                            <td><?php echo $data['Nama_barang']; ?></td>
                                            <td><?php echo $data['jumlah_barang']; ?></td>
                                            <td><?php echo "Rp " . number_format($data['harga_barang'], 2, ",", "."); ?></td>
                                            <td><?php echo $tanggal_masuk; ?></td>
                                            <td><?php echo $tanggal_EXP; ?></td>
                                            <td>
                                                <a href="edit-barang.php?id_barang=<?php echo $data['id_barang']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                                    <i class="fas fa-edit fa-sm text-white-50"></i> Ubah
                                                </a>
                                                
                                                <a class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" href="proses-hapus.php?id=<?php echo $data['id_barang'];?>" onclick="return confirm('Anda yakin ingin menghapus data <?php echo $data['Nama_barang']; ?>?')">
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