<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../CSS/register.css">
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

        <?php
            include 'registerC.php';
            $registeri = new DatabaseRegister();
            $insert = $registeri->insert();

            ?>

            <p id="registerForm">Register</p>
            <form action="" name="myForm" method="post" onsubmit="return validateFormRegister()">
            <label for="name" class="arrangeLabel" id="pak1">Name: </label><br>
            <input type="text" placeholder="Enter name..." name="name" id="emaili"><br>
            <span class="error" id="errorname"></span><br>

            <label for="surname" class="arrangeLabel" id="pak2">Surname: </label><br>
            <input type="text" placeholder="Enter surname..." name="surname" id="emaili"><br>
            <span class="error" id="errorsurname"></span><br>
            
            <label for="email" class="arrangeLabel" id="pak3">Email: </label><br>
            <input type="email" placeholder="Enter email..." name="email" id="emaili"><br>
            <span class="error" id="erroremail"></span><br>

            <label for="password" class="arrangeLabel" id="pak4">Password: </label><br>
            <input type="password" placeholder="Enter password..." name="password" id="emaili"><br> 
            <span class="error" id="errorpassword"></span><br>

            <input type="submit" name="submit" value="Register" class="btn green"><br>
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


    <script src="../JS/register.js"></script>
</body>
</html>