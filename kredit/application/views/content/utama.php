<div class="content mt-3">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                  <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

			<div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Customer</div>
                                <div class="stat-digit">
                                	<?php
                                	echo $customer;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-->

           <div class="col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-shopping-cart text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Barang Tercatat</div>
                                <div class="stat-digit"><?php
                                	echo $barang;?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-->
            <!--/.col-->

          


            

            <!--/.col-->            
        </div>