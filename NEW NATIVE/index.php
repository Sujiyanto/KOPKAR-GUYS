<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <br/>
  <br/>
  
  <br/>
  <div class="login">
  <center><h2 style="color: #3498db">LOGIN</h2></center>  
  <br/>
    
    <form action="on-admin/login.php">
      <div>
        <button class="tombollogin">Admin</button>
      </div>
    </form>
    <form action="on-member/login.php">
      <div>
        <button class="tombollogin">Member</button>
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