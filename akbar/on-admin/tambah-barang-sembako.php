<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>AKBAR KOPKAR</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">AKBAR KOPKAR</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-database"></i>
            <span class="nav-link-text">Data Barang</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="barang-masuk-elektronik.php"><i class="fa fa-television"></i>
            <span class="nav-link-text">Elektronik</span></a>
            </li>
            <li>
              <a href="barang-masuk-sembako.php"><i class="fa fa-cutlery"></i>
            <span class="nav-link-text">Sembako</span></a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="supplier.php">
            <i class="fa fa-users"></i>
            <span class="nav-link-text">Data Supplier</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="member.php">
            <i class="fa fa-user-plus"></i>
            <span class="nav-link-text">Data Member</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="order.php">
            <i class="fa fa-cart-plus"></i>
            <span class="nav-link-text">Data Order</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="pembayaran.php">
            <i class="fa fa-dollar"></i>
            <span class="nav-link-text">Data Pembayaran</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
               
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Data Barang</a>
        </li>
        <li class="breadcrumb-item active">Tambah Barang</li>
      </ol>
    
    <!-- Contain -->
    <form class="form-horizontal" action="aksi-tambah-barang-sembako.php" method="post">
              <div class="box-body">
              <!-- <div class="form-group">
                  <label class="col-sm-2 control-label">ID Barang</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="id_barang" placeholder="ID Barang">
                  </div>
                </div> -->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
                  </div>
                </div>
                 <!-- <div class="form-group">
                  <label class="col-sm-2 control-label">Supplier</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="supplier" placeholder="Supplier">
                  </div>
                </div> -->
                <div class="form-group">
                        <label class="col-sm-2 control-label">Supplier</label>
                        <div class="col-md-5">
                            <?php  
                            include 'koneksi.php'; 
                            $result = mysqli_query($conn,"select * from supplier");
                            $jsArray = "var barang = new Array();\n";
                            echo '<select name="supplier" onchange="document.getElementById(\'harga\').value = supplier[this.value]">';
                            echo '<option>--Supplier--</option>';
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<option value="' . $row['nama_supplier'] . '">' . $row['nama_supplier'] . '</option>';
                                $jsArray .= "supplier['" . $row['nama_supplier'] . "'] = '" . addslashes($row['harga']) . "';\n";
                            }
                            echo '</select>';
                            ?>
                        </div>
                    </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="harga" placeholder="Harga">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Uang Muka</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="uang_muka" placeholder="Uang Muka">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Stok</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="stok" placeholder="Stok">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Satuan</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="satuan" placeholder="Satuan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Keterangan</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="barang-masuk.php" class="btn btn-default">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-primary"></input>
              </div>
              <!-- /.box-footer -->
            </form>
    <!-- End Contain -->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Akbar Kopkar Polindra 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
