<!DOCTYPE html>
<html>
<head>
<title>Daftar</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="<?= base_url('assets/member/css/jquery-ui.css')?>"/>
<link href="<?= base_url('assets/member/css/style.css')?>" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->


<!-- //css files -->
</head>
<body>
	<h1>Registration Form</h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form action="<?= base_url('member/add_member');?>" method="post">	
			<input type="hidden" name="nik">
			<input type="hidden" name="level" value="member">
			<div class="w3l-num">
				<label class="head">Nama<span class="w3l-star"> * </span></label>
				<input type="text" name="nama" placeholder="Nama lengkap" required />
			</div>

			<div class="w3l-sym">
				<label class="head">Jenis Kelamin<span class="w3l-star"> * </span></label>	
					<select name="jk" class="form-control" required="">
						
						<option value="laki">Lelaki</option>
						<option value="perempuan">Perempuan</option>
					</select>
			</div>
<br/>
			<div class="w3l-num">
					<label class="head">Email<span class="w3l-star"> * </span></label>
					<input type="text" name="email" placeholder="Email" required />
				</div>
			<div class="w3l-sym">
					<label class="head">Password<span class="w3l-star"> * </span></label>
					<input type="password" name="passwd" placeholder="Password" required />
			</div>
			<div class="clear"></div>
			<div class="w3l-details1">
				<div class="w3l-num">
					<label class="head">Nomer Telepon<span class="w3l-star"> * </span></label>
					<input type="text"  name="telp" placeholder="Telepon" required="">
				</div>
					
			<div class="clear"></div>
			
			</div>
			<div class="w3l-user">
				<label class="head">Alamat<span class="w3l-star"> * </span></label>
				<input type="text" name="alamat" placeholder="Alamat" required="">
			</div>
			
			
			<div class="clear"></div>
			<div class="btn">
					<input type="submit" name="submit" value="Daftar"/>
				</div>

			
			<div class="clear"></div>
				
			
		</form>
	</div>
</div>
	<footer>&copy; 2018 AKBAR KOPKAR | POLITEKNIK NEGERI INDRAMAYU</a>
	</footer>
	<!-- Default-JavaScript --> <script type="text/javascript" src="<?= base_url('assets/member/js/jquery-2.1.4.min.js')?>"></script>


</body>
</html>