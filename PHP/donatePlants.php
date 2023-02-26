<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonatePlants</title>
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
    <link rel="stylesheet" href="../CSS/plants.css">
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


    <br><br>


    <h1 class="main-text">Donate Plants</h1>
        <main id="mainStyle">
            <div class="right-side">
        
                <img src="https://img.freepik.com/free-photo/people-stacking-hands-together-park_53876-63293.jpg?w=1380&t=st=1670365596~exp=1670366196~hmac=a69fd1bf8630cc47992a401edd0256e7eb2cc327a103c807ef27aae7b85c6bd1">
                
            </div>

    <div class="left-side">

    <?php
            include 'DonatePlantsC.php';
            $donatePlants = new DatabaseDonatePlants();
            $check = $donatePlants->check();
        ?>
        <form name="myForm" method="post" onsubmit="return donatePlants()">
        <div>
            <label for="formName" class="form-label">Name: <br></label>
            <input type="text" class="formStyle" id="formName" name="name" placeholder="Name here..."><br>
            <span class="error" id="errorname"></span>

        </div><br>

        <div >
            <label for="formSurname" class="form-label">Surname: <br></label>
            <input type="text" class="formStyle" id="formSurname" name="surname" placeholder="Surname here..."><br>
            <span class="error" id="errorsurname"></span>

        </div><br>

        <div>
            <label for="inputEmail" class="form-label">Email:<br></label>
            <input type="email" class="formStyle" id="inputEmail" name="email" placeholder="Email here..."><br>
            <span class="error" id="erroremail"></span>

        </div><br>
        <div>
                <label for="inputPhone" class="form-label">Phone Number:<br></label>
                <input type="number" class="formStyle" id="inputNumber" name="number" placeholder="044..."><br>
                <span class="error" id="errornumber"></span>
        </div><br>
        
        
        <div>
            <label for="inputPlants" class="form-label">Plant name:<br></label>
            <textarea name="plants" id="txtA"  placeholder="Write here the information about the plant..."></textarea><br>
            <span class="error" id="errortext"></span>
        </div><br>
        
        <input type="submit" name="submit" value="Donate" class="btn green"></input>
        
        </form>

    </div>


    
</main>

    
    <!-- Footeri -->
    
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
    <script src="../JS/plants.js"></script>
</body>
</html>