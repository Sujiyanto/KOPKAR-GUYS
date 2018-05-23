<?php 
session_start();
if (empty($_SESSION['username'])){
  header('location:../index.php');  
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
          <a href="#">Data Member</a>
        </li>
        <li class="breadcrumb-item active">Input Data Kredit</li>
      </ol>
    <!-- Contain -->
    <section class="content">
                        <div class="col-xs-12">
                            <div class="panel">
                                <div class="panel-body">
                                   <form class="form-horizontal style-form" style="margin-top: 20px;" action="insert-kredit.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">ID Kredit</label>
                                  <div class="col-sm-8">
                                      <input name="id_order" type="text" id="id_order" class="form-control" placeholder="Tidak perlu di isi" autofocus="on" readonly="readonly" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">NIK</label>
                                   <div class="col-sm-8">
                                       <?php  
                                        $result = mysqli_query($con,"select * from member");
                                        $jsArray1 = "var asd = new Array();\n";
                                        echo '<select name="nik" onchange="document.getElementById(\'nama_member\').value = asd[this.value]">';
                                        echo '<option>--Pilih NIK--</option>';
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value="' . $row['nik'] . '" name="nik">' . $row['nik'] . '</option>';
                                            $jsArray1 .= "asd['" . $row['nik'] . "'] = '" . addslashes($row['nama_member']) . "';\n";
                                        }
                                        echo '</select>';
                                       ?>
                                   </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Nama Member</label>
                                  <div class="col-sm-8">
                                     <input name="nama_member" class="form-control" id="nama_member" type="text" readonly="readonly" />
                                      <script type="text/javascript">
                                      <?php 
                                      echo $jsArray1; ?>
                                      </script>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Jumlah Kredit</label>
                                  <div class="col-sm-8">
                                      <input name="jumlah_kredit" class="form-control" id="jumlah_kredit" type="text" placeholder="Jumlah Kredit" onfocus="mulaiHitung()" onblur="berhentiHitung()" />
                                  </div>
                              </div>
                              <!-- <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Jangka Waktu/bln</label>
                                  <div class="col-sm-8">
                                      <select name="jangka_waktu" onfocus="mulaihitung()" onblur="berhentiHitung()">
                                            <option>0</option>
                                            <option>3</option>
                                            <option>6</option>
                                            <option>12</option>
                                      </select >
                                  </div>
                              </div> -->
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Jangka Waktu/bln</label>
                                  <div class="col-sm-8">
                                      <input name="jangka_waktu" class="form-control" id="jangka_waktu" type="text" placeholder="Jangka Waktu/bln" onfocus="mulaiHitung()" onblur="berhentiHitung()"/>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Angsuran/bln</label>
                                  <div class="col-sm-8">
                                      <input name="angsuran" class="form-control" id="angsuran" type="text" placeholder="Angsuran" />
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Total Kredit</label>
                                  <div class="col-sm-8">
                                      <input name="total_kredit" class="form-control" id="total_kredit" type="text" placeholder="Total Kredit"/>
                                  </div>
                              </div>
                              <div class="form-group" style="margin-bottom: 20px;">
                                  <label class="col-sm-2 col-sm-2 control-label"></label>
                                  <div class="col-sm-8">
                                      <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                    <a href="barang-masuk-elektronik.php" class="btn btn-sm btn-danger">Batal </a>
                                  </div>
                              </div>
                              <div style="margin-top: 20px;"></div>
                              <script type="text/javascript">
                              function mulaiHitung(){
                                Interval = setInterval("hitung()", 1);
                              }
                              function hitung(){
                                jumlah_kredit = parseInt(document.getElementById("jumlah_kredit").value);
                                jangka_waktu = parseInt(document.getElementById("jangka_waktu").value);
                                angsuran = jumlah_kredit / jangka_waktu;
                                document.getElementById("angsuran").value = angsuran;

                                total_kredit = (angsuran * jangka_waktu);
                                document.getElementById("total_kredit").value = total_kredit;
                              }
                              function berhentiHitung(){
                                clearInterval(Interval);
                              }
                            </script>
                      </form>
                                </div>
                            </div><!-- /.box -->
                        </div>
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
