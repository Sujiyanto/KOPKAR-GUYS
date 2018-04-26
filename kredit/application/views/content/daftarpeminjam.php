            <div class="container">

                <!-- /.row -->
                <div class="row">
                    <div class="col-sm-12">
                        <p>Daftar Peminjam / Kreditur</p>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <button type="button" class="btn btn-success" name="add" id="add" data-toggle="modal" data-target="#add_data">nama-nama dan alamat peminjam / kreditur.&nbsp;&nbsp;<i class="fa fa-plus"></i></button>
                            </div>
                            <br/>
                            <!-- /.panel-heading -->

                            <div class="table-responsive">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead class="thead-default">
                                        <tr class="table-active">
                                            <th>Kode</th>
                                            <th>Nama Peminjam</th>
                                            <th>Alamat Peminjam</th>
                                            <th>Telepon Peminjam</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($penyicil->result() as $row){ ?>
                                        <tr>
                                            <td><?php echo $row->kd_peminjam;?></td>
                                            <td><?php echo $row->nm_peminjam;?></td>
                                            <td><?php echo $row->amt_peminjam;?></td>
                                            <td><?php echo $row->tlp_peminjam;?></td>
                                            <td>
                                                <a href="<?= base_url('daftar_peminjam/update_peminjam/'.$row->kd_peminjam);?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                                <a class="btn btn-danger btn-sm" data-target="#konfirmasi_hapus" data-toggle="modal" data-href="<?= base_url('daftar_peminjam/delete_penyicil/'.$row->kd_peminjam);?>"><i class="ti ti-trash"></i></a>
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
                                                    <label>Nama Peminjam/kreditur</label>
                                                    <input class="form-control" type="text" name="nama" id="nama" />
                                                    <br />
                                                    <label>Nomor KTP/SIM</label>
                                                    <input class="form-control" type="text" name="ktpsim" id="ktpsim" />
                                                    <br />
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                                                    <br />
                                                    <label>Nomor Telepon</label>
                                                    <input class="form-control" type="text" name="telepon" id="telepon" />
                                                    <br />
                                                    <input type="submit" name="insert" id="insert" value="insert" class="btn btn-success" />
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                            if ($('#nama').val() == ''){
                                                alert("Nama tidak boleh kosong");
                                            }
                                            else if($('#ktpsim').val() == ''){
                                                alert("Ktp/SIM Tidak Boleh Kosong");
                                            }
                                            else if($('#alamat').val() == ''){ 
                                                alert("Keterangan alamat Tidak Boleh Kosong");
                                            }
                                            else if($('#telepon').val() == ''){
                                                alert("Nomer Telepon Tidak Boleh Kosong");
                                            }
                                            else{
                                                $.ajax({
                                                    url: "<?= base_url('daftar_peminjam/add_peminjam');?>",
                                                    method: "POST",
                                                    data:$('#insert_form').serialize(),
                                                    success:function(data)
                                                    {   
                                                        $('#insert_form')[0].reset();
                                                        $('#add_data').modal('hide');
                                                        $('#bootstrap-data-table').html(data);
                                                        window.location = "<?= base_url('daftar_peminjam')?>";

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
