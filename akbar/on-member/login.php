<html>
<head>
	<title>Member Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	
	<br/>
	<div class="login">
	<center><h2 style="color: #3498db">LOGIN MEMBER</h2></center>	
	<br/>
		<form action="proses_login.php" method="post" onSubmit="return validasi()">
			<div>
				<input type="text" name="username" id="username" placeholder="Username" class="formlogin" />
			</div>
			<div>
				<input type="password" name="password" id="password" placeholder="Password" class="formlogin"/>
			</div>			
			<div>
				<input type="submit" value="LOGIN" class="tombollogin" name="login">
			</div>
			<br>
			<div>
				<center><a href="register.php">Create Account</a></center>
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