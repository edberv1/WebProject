<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
    <script>
        function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    </script>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="home.php"><img src="../Assets/logo.png" id="logo"></a>
  <a href="home.php">Home</a>
  <a href="about.php">About</a>
  <a href="weather.php">Extras</a>
  <?php
                    if (!(isset($_SESSION['user_type']))) {
                        echo "<a class='ula' id='pad' href='login.php'>Login</a>";
                    } else if (isset($_SESSION['user_type']) == 'user') {
                        echo "<a class='ula' id='pad' href='logout.php'>Logout</a>";
                    }
                    ?> 
  <a href="register.php">Register</a> 
  <a class="icon" onclick="myFunction()">
    <i class="fa fa-bars">↓</i>
  </a>
</div>

    <main>
        
        <div class="formStyle">
            <p id="loginForm">Login</p>

            <?php
                include 'registerC.php';
                $logini = new DatabaseRegister();
                $check = $logini->check();   
            ?>   
         
            <form action="" name="myForm" method="post" onsubmit="return validateFormLogin()">
                
            <label for="email" class="arrangeLabel" id="pak1">Email: </label>
            <input type="email" placeholder="Enter email" id="emaili" name="email"><br>
            <span class="error" id="erroremail"></span><br>
            
            <label for="password" class="arrangeLabel" id="pak2">Password: </label>
            <input type="password" placeholder="Enter password" id="passi" name="password"><br>
            <span class="error" id="errorpassword"></span>

            <p id="dont">Not a memeber?<a href="register.php"> Register here </a></p>
            <input type="submit" name="submit" value="Login" class="btn green"><br>
            
            </form>
        </div>
    </main>

    <footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

                

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a class="link-1" href="home.php">Home</a>

					<a href="about.php">About</a>

					<a href="weather.php">Extras</a>

					<a href="login.php">Login</a> 

					<a href="register.php">Register</a> 

                    
				</p>
                <a href="home.php"><img src="../ASSETS/logo.png"></a> 
				<p>GiveHelp &copy; 2023</p>
			</div>

		</footer>


    <script src="../JS/login.js"></script>
</body>
</html>