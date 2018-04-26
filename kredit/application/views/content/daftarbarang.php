            <div class="container">

                <!-- /.row -->
                <div class="row">
                    <div class="col-sm-12">
                        <p>Silahkan untuk menambah, atau mengedit, ataupun menghapus barang Anda di tabel di bawah ini.</p>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <button type="button" class="btn btn-success" name="add" id="add" data-toggle="modal" data-target="#add_data">Add Data&nbsp;&nbsp;<i class="fa fa-plus"></i></button>
                            </div>
                    
                            <br/>

                            <!-- /.panel-heading -->


                            <div class="table-responsive">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead class="thead-default">
                                        <tr class="table-active">
                                            <th>Kode</th>
                                            <th>Nama Barang</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($barang->result() as $item){ ?>
                                        <tr>
                                            <td><?php echo $item->kd_barang;?></td>
                                            <td><?php echo $item->nm_barang;?></td>
                                            <td><?php echo $item->kategori;?></td>
                                            <td>
                                                <a style="margin: 1px;" href="<?= base_url('daftarbarang/updatebarang/'.$item->kd_barang);?>" class="btn btn-info btn-sm"><i class="ti ti-pencil"></i></a>


                                            <a class="btn btn-danger btn-sm" data-target="#konfirmasi_hapus" data-toggle="modal" data-href="<?= base_url('daftarbarang/deletebarang/'.$item->kd_barang);?>"><i class="ti ti-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>

                            <!--Modal add data-->
                            <div class="modal fade" id="add_data">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Insert Data</h4>
                                        </div>

                                        <div class="modal-body">
                                            <div class="form-group">
                                            <form method="post" id="insert_form">
                                                <label>Nama Barang</label>
                                                <input class="form-control" type="text" name="add_barang" id="add_barang" />
                                                <br />
                                                <label>Kategori</label>
                                                <select class="form-control" type="text" name="add_kategori" id="add_kategori" >
                                                    <option value="elektronik">elektronik</option>
                                                    <option value="sembako">sembako</option>
                                                </select>
                                                <br />
                                                <label>Keterangan</label>
                                                <textarea class="form-control" name="add_keterangan" id="add_keterangan"></textarea>
                                                <br />
                                                <input type="submit" name="insert" id="insert" value="insert" class="btn btn-success" />
                                            </form>
                                        
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                        </div><!--end form-group -->
                                    </div><!--end modal-body -->
                                </div><!--end modal-content -->
                            </div> <!--end modal-dialog-->
                        </div> <!--end modal data-->

                            <div class="modal fade" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <b>Anda yakin ingin menghapus data ini ?</b><br><br>
                                            <a class="btn btn-danger btn-ok"> Hapus</a>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                            <script type="text/javascript">

                                $(document).ready(function() {
                                    $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
                                        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                                    });

                                    $('#insert_form').on('submit', function(){
                                        event.preventDefault();
                                        if ($('#add_kategori').val() == ''){
                                            alert("kategori tidak boleh kosong");
                                        }
                                        else if($('#add_barang').val() == ''){
                                            alert("Nama Barang Tidak Boleh Kosong");
                                        }
                                        else if($('#add_keterangan').val() == ''){ 
                                            alert("Keterangan Tidak Boleh Kosong");
                                        }else{
                                            $.ajax({
                                                url: "<?= base_url('daftarbarang/add_barang');?>",
                                                method: "POST",
                                                data:$('#insert_form').serialize(),
                                                success:function(data)
                                                {   
                                                    $('#insert_form')[0].reset();
                                                    $('#add_data').modal('hide');
                                                    $('#bootstrap-data-table').html(data);
                                                    window.location = "<?= base_url('daftarbarang')?>";
                                                }
                                            });
                                        }
                                    });
                              
                                });

                        </script>

                    </div>
                    <!-- /.table-responsive -->

                    <!-- /.panel-body -->

                </div>
                <!-- /.panel -->
            </div>
        </div>
    </div>
