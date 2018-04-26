<div class="container-fluid">
<div class="card">
	<?php foreach($barang->result() as $items){?>
	<form method="post" action="<?= base_url('daftarbarang/do_update');?>">
		<div class="form-group">
			<div class="card-header text-center">Update</div>
			<div class="card-body">
				
		<label>Nama Barang</label>
		<input type="hidden" name="kd_barang" value="<?php echo $items->kd_barang;?>">
		<input class="form-control col-sm-8" type="text" value="<?php echo $items->nm_barang;?>" name="nm_barang" />
		<br />
		<label>Kategori</label>
		<select name="kategori" class="form-control col-sm-8" id="exampleFormControlSelect1">
			<option value="elektronik">elektronik</option>
			<option value="sembako">sembako</option>
		</select>
		<br />
		<label>Keterangan</label>
		<textarea class="form-control col-sm-8" value="<?php echo $items->ket_barang;?>" name="keterangan"></textarea>
		<br />
		
		<br />
		<input type="submit" name="submit" value="update" class="btn btn-success" />
		<a href="<?= base_url('daftarbarang');?>" class="btn btn-danger">Batal</a>
		</div>
		</div>
	</form>
	<?php }?>
	</div>
</div>
