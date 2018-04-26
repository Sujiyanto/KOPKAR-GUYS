<div class="container-fluid">
<div class="card">
	<?php foreach($peminjam->result() as $rows){?>
	<form method="post" action="<?= base_url('daftar_peminjam/doupdate_peminjam');?>">
		<div class="form-group">
			<div class="card-header text-center">Update</div>
			<div class="card-body">
				
		<label>Nama Kreditur</label>
		<input type="hidden" name="kd_peminjam" value="<?php echo $rows->kd_peminjam;?>">
		<input class="form-control col-sm-8" type="text" value="<?php echo $rows->nm_peminjam;?>" name="nm_peminjam" />
		<br />
		<label>Nomor KTP / SIM</label>
		<input class="form-control col-sm-8" type="text" value="<?php echo $rows->idc_peminjam;?>" name="idc_peminjam" />
		<br />
		<label>Alamat KTP / SIM</label>
		<input class="form-control col-sm-8" value="<?php echo $rows->amt_peminjam;?>" name="amt_peminjam" />
		<br />
		<label>Nomor Telpon</label>
		<input class="form-control col-sm-8" value="<?php echo $rows->tlp_peminjam;?>" name="tlp_peminjam" />
		<br />
		
		<br />
		<input type="submit" name="submit" value="update" class="btn btn-success" />
		<a href="<?= base_url('daftar_peminjam');?>" class="btn btn-danger">Batal</a>
		</div>
		</div>
	</form>
	<?php }?>
	</div>
</div>
