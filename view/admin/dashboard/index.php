<?php include '../layout/header-index.php' ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    

                    <!-- Content Row -->
                    <div class="row">                      
                        <!-- Data Barang Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a class="nav-link" href="../barang/dbarang.php">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Data Stok Barang</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Data barang terjual Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a class="nav-link" href="../terjual/dbterjual.php">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Data Barang Terjual</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php if($_SESSION['level'] == "Super_admin") { ?>
                        <!-- Data Pengelola Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a class="nav-link" href="../pengelola/pengelola.php">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Data Pengelola</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Data Brand Card -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a class="nav-link" href="../brand/brand.php">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Data Brand</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php include '../layout/footer.php' ?>