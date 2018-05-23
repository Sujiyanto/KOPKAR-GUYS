<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	
	<br/>
	<div class="register">
	<center><h2 style="color: #3498db">Register</h2></center>	
		<form action="simpan-user.php" method="post" name="register">
			<div>
				
				<input type="text" name="nik" id="nik" placeholder="NIK" class="formregister" />
			</div>
			<div>
				<input type="text" name="nama_member" id="nama_member" placeholder="Nama" class="formregister" />
			</div>
			<div>
				<input type="text" name="no_hp" id="no_hp" placeholder="No. Hp" class="formregister" />
			</div>
			<div>
				<input type="text" name="email" id="email" placeholder="Email" class="formregister" />
			</div>
			<div>
				<input type="text" name="alamat" id="alamat" placeholder="Alamat" class="formregister" />
			</div>
			<div>
				<input type="text" name="username" id="username" placeholder="Username" class="formregister" />
			</div>
			<div>
				<input type="password" name="password" id="password" placeholder="Password" class="formregister"/>
			</div>			
			<div>
				<input type="submit" value="Register" class="tombollogin" name="register">
			</div>
			<br>
			<div>
				<center><a href="login.php">Kembali</a></center>
			</div>
		</form>
			 
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>