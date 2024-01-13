<?php require_once '../../../model/m_barang.php'; ?>

<html>
<head>
  <title>Stock Barang</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
    <br><br><br>
	<h2>Data Stok barang</h2>
    <br>
	<div class="data-tables datatable-dark">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Barang</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal EXP</th>
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
                </tr>
                <?php 
                    }    
                } 
                ?>
            </tbody>
        </table>
	</div>
</div>
	
<script>
$(document).ready(function() {
    $('#dataTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>