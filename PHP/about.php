<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/about.css">
    <title>About</title>
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
        <div class="mainAbout">
            <div class="topAbout">
                <h1>Changing the donation process.</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, voluptatum.</p>
                <img src="https://img.freepik.com/free-vector/hand-drawn-flat-design-forest-landscape_23-2149157285.jpg?w=1380&t=st=1670718587~exp=1670719187~hmac=307e23789984478a7116a86c92d53d8c981a2aac8ce6528f47963f32a2c8fca3" alt="">
            </div>

            <div class="bottomAbout">
                <span class="quote">We combine the benefits of the best local farms with advances made possible by technology to deliver you the best planting experience possible. Plants surrounds us, but we don’t always think about where it comes from or how it got to us. The way we live depends on plants and a clean envoirement.</span>
                <p class="paragrafi">Meet the awesome team behind GiveHelp.We’re solving the gap between the world’s problems, nature and people.</p>
                <div class="cards">
                    <section class="firstPerson">
                        <img src="https://uploads-ssl.webflow.com/5b681be5dc6fa89a65131967/5b71bbb98f97f26168e64035_image-avatar-04.jpg" alt="">
                        <h2>Edber Vuçitërna</h2>
                        <p>CEO, Co-founder</p>
                    </section>

                    <section class="secondPerson">
                        <img src="https://uploads-ssl.webflow.com/5b681be5dc6fa89a65131967/5b71bf7686ea531f9fbec814_image-avatar-011.jpg" alt="">
                        <h2>Esned Spahiu</h2>
                        <p>CFO, Co-founder</p>
                    </section>

                    <section class="fthirdPerson">
                        <img src="https://uploads-ssl.webflow.com/5b681be5dc6fa89a65131967/5b71bc2e88664e26cfbebb95_image-avatar-09.jpg" alt="">
                        <h2>Filan Fisteku</h2>
                        <p>Planner</p>
                    </section>
                </div>

            </div>
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

</body>
</html>