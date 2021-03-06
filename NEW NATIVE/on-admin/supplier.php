<?php 
session_start();
if (empty($_SESSION['username'])){
  header('location:login.php');  
} else {
  include "koneksi.php";
}
?>
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
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-tags"></i>
            <span class="nav-link-text">Transaksi</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="order-barang.php"><i class="fa fa-cart-plus"></i>
            <span class="nav-link-text">Order Barang</span></a>
            </li>
            <li>
              <a href="kredit-uang.php"><i class="fa fa-money"></i>
            <span class="nav-link-text">Kredit Uang</span></a>
            </li>
          </ul>
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
          <a href="#">Data Supplier</a>
        </li>
      </ol>
    <!-- Contain -->
    <section class="content">
    <div class="text-left" style="margin-top: 10px;">
        <a href="input-supplier.php" class="btn btn-sm btn-warning"><i class="fa fa-plus-circle "></i> Add Suuplier</a>
    </div> <br>
            
            <form action="supplier.php" method="POST">
              <div class="input-group">
              <input type='text' class="form-control input-sm pull-left" name='qcari' placeholder='Cari berdasarkan Nama Supplier' required /> 
              <div class="input-group-btn">
              <button class="btn btn-sm btn-default" type="submit"><i class="fa fa-search"></i></button>
              </div>
              </div>
            </form>
                <br>
                  <?php
                  $query1="select * from supplier";
                    
                  if(isset($_POST['qcari'])){
                  $qcari=$_POST['qcari'];
                  $query1="SELECT * FROM  supplier 
                  where nama_supplier like '%$qcari%'";
                    }
                    $tampil=mysqli_query($con,$query1) or die(mysqli_error());
                    ?>
                  <table id="example" class="table table-hover table-bordered">
                  <thead>
                      <tr>
                        <th><center>Nama </center></th>
                        <th><center>No. Telp</center></th>
                        <th><center>Alamat </center></th>
                        <th><center>Tools</center></th>
                      </tr>
                  </thead>
                     <?php 
                    while($data=mysqli_fetch_array($tampil))
                    { ?>
                    <tbody>
                    <tr>
                    <td><?php echo $data['nama_supplier'];?></td>
                    <td><?php echo $data['no_telp'];?></td>
                    <td><?php echo $data['alamat'];?></td>
                    <td>
                        <center>
                            <div id="thanks">
                                <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Supplier" href="edit-supplier.php?hal=edit&kd=<?php echo $data['id_supplier'];?>">
                                <span class="fa fa-edit"></span>
                                </a>
                                <a onclick="return confirm ('Yakin hapus <?php echo $data['nama_supplier'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Anggota" href="hapus-supplier.php?hal=hapus&kd=<?php echo $data['id_supplier'];?>"><span class="fa fa-trash-o">
                                </a>
                            </div>
                        </center>
                    </td>
                    </tr>

                 <?php   
              } 
              ?>
                   </tbody>
                   </table>
                   
                  <?php $tampil=mysqli_query($con,"select * from supplier order by id_supplier");
                        $supplier=mysqli_num_rows($tampil);
                    ?>
                  <center><h6>Jumlah Supplier : <?php echo "$supplier"; ?> Orang </h6> </center>
              <!-- row end -->
                </section>
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
