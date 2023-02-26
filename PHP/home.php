<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">
    <title>Home</title>

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


    <div class="heading">

        <h1>"Look deep into nature, and then you will understand everything better."</h1><br><br>

    </div>

    
    <div class="mainimg">

        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img alt="img1" src="https://wallpapercave.com/wp/wp6966643.jpg" style="width:100%">
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img alt="img2" src="https://wallpaper.dog/large/10737881.jpg" style="width:100%">
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img alt="img3" src="https://wallpapercave.com/wp/wp1990734.jpg" style="width:100%">
            </div>
          
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
        
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
    </div>


    <main id="mainColums">
    
    
        <div class="leftcolum">
            
            <img src="https://img.freepik.com/free-photo/beautiful-shot-forest-with-tall-green-trees-with-sun-shining-through-branches_181624-20728.jpg?w=1380&t=st=1670362056~exp=1670362656~hmac=5f0122b2bd68212fcb536beb4b100968be01a7289d11115964b12c3eef79f03d" class="clothes" alt="plant"><br><br>
            <a href="donatePlants.php" class="btn green">Donate Plants</a> 
                
    
        </div>
        
        <div class="rightcolum">
        <img class="money" src="https://img.freepik.com/free-photo/high-angle-two-stacks-coins-with-plants-copy-space_23-2148803918.jpg?w=1380&t=st=1670362241~exp=1670362841~hmac=bb61d418db9e79f50b0acae77fe88ce23551168143fa50f4852072406710f2f7" alt="money"><br><br>
          <a href="donateMoney.php" class="btn green">Donate Money</a>       
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

    <script src="../JS/a.js"></script>
</body>
</html>