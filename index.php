<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Login</title>

<!-- favicon link css  -->
<link rel="shortcut icon" type="image/png" href="img/MIST.png" />
<link rel="stylesheet" href="login.css" />
<title>Login</title>
	
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	
<script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.js" integrity="sha256-mkdmXjMvBcpAyyFNCVdbwg4v+ycJho65QLDwVE3ViDs=" crossorigin="anonymous"></script> 
	
<script type="text/javascript" src="js/particles.js"></script> 
<script type="text/javascript" src="js/loginstyle.js"></script>
	
<script type="text/javascript" src="js/login.js"></script>	
	
</head>
	
<body id="particles">	
<div id="container">
  <div id="inviteContainer">
    <div class="logoContainer"> 
		<img class="logo" src="img/MIST.png" alt="MIST"/>
		<br>
		<img class="text" src="img/MIST_ARCHIVE.png" alt="MIST ARCHIVE" /> </div>
    <div class="acceptContainer">
      <form action="login.php" method="post">
        <h1>WELCOME TO MIST ARCHIVE</h1>
        <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
        <div class="formContainer">
          <div class="formDiv" style="transition-delay: 0.2s">
            <p>ID</p>
            <input type="text" name="uname" required="" id="idInput" />
          </div>
          <div class="formDiv" style="transition-delay: 0.4s">
            <p>PASSWORD</p>
            <input type="password" name="password" required="" id="passwordInput"/>
            <a class="forgotPas" href="#">FORGOT YOUR PASSWORD?</a> </div>
             <div class="formDiv" style="transition-delay: 0.6s">
            <button  class="acceptBtn" type="submit" onclick="loginValidator()">Login</button>
            <span class="register">Need an account?<a href="registerform.html">Register</a></span></div>
        </div>
			  
      </form>
    </div>
  </div>
</div>
	

</body>	
</html>