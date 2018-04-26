<div class="container-fluid">
<div class="card">
	<?php foreach($supplier->result() as $items){?>
	<form method="post" action="<?= base_url('supplier/do_update');?>">
		<div class="form-group">
			<div class="card-header text-center">Update</div>
			<div class="card-body">
				
		<label>Nama Supplier</label>
		<input type="hidden" name="kd_supplier" value="<?php echo $items->kd_supplier;?>">
		<input class="form-control col-sm-8" type="text" value="<?php echo $items->nm_supplier;?>" name="nm_supplier" />
		<br />
		<label>Alamat</label>
		<textarea class="form-control col-sm-8" name="alamat"><?php echo $items->alamat;?></textarea>
		<br />
		<label>Telp. Supplier</label>
		<input class="form-control col-sm-8" type="text" value="<?php echo $items->telp;?>" name="telp" />
		<br />
		
		<br />
		<input type="submit" name="submit" value="update" class="btn btn-success" />
		<a href="<?= base_url('supplier');?>" class="btn btn-danger">Batal</a>
		</div>
		</div>
	</form>
	<?php }?>
	</div>
</div>
