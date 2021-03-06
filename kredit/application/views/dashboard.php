<?php $this->load->view('admin_template/header');?>

<style type="text/css">
        #header-1{
            background-color:  #272C33;
        }
    </style>



        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">

        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?= base_url('admin');?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Master</h3><!-- /.menu-title -->


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-server fa-fw"></i>Master Data</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="<?= base_url('daftarbarang');?>">Daftar Barang</a></li>

                        <li><i class="fa fa-table" aria-hidden="true"></i><a href="<?= base_url('supplier');?>">Data Supplier</a></li>

                        <li><i class="fa fa-table" aria-hidden="true"></i><a href="<?= base_url('daftar_peminjam');?>">Data Member</a></li>

                        <li><i class="fa fa-table" aria-hidden="true"></i><a href="<#">Data Order</a></li>

                        <li><i class="fa fa-table" aria-hidden="true"></i><a href="#">Data Pembayaran</a></li>

                            
                        </ul>
                    </li>
                    

                    <h3 class="menu-title">Kategori</h3><!-- /.menu-title -->

                   <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-flash"></i>Electronic</a>
                         
                        <ul class="sub-menu children dropdown-menu">
                           <?php foreach($nav->result() as $navi) {?>
                            <li><i class="fa fa-table"></i><a href="<?= base_url('kategori/elektronik/'.$navi->kd_barang);?>"><?php echo $navi->nm_barang;?></a></li>
                            <?php }?>
                        </ul>
                        
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cutlery"></i>Sembako</a>
                        
                        <ul class="sub-menu children dropdown-menu">
                            <?php  foreach($nav_sembako->result() as $navi_sembako) {?>
                            <li><i class="menu-icon fa fa-th"></i><a href="<?= base_url('kategori/sembako/'.$navi_sembako->kd_barang);?>"><?php echo $navi_sembako->nm_barang;?></a></li>
                            <?php }?>
                        </ul>
                        
                    </li>
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header-1" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-angle-left"></i></a>
                   <h3 style="color: orange;"><img style="width: 50px; margin-left: 5px;" src="<?= base_url('assets/image/polindra.png');?>"> Akbar Kopkar</h3>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= base_url('assets/image/kopkar.jpg');?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="<?= base_url('admin/logout');?>"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><?php echo $sub; ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        
        <?php $this->load->view($content)?>
         <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

 
<?php $this->load->view('admin_template/footer');?>