<!Doctype html>
<html>
    <head>
        <title>
            Shrikant Hospital & Research Institute
		</title>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!---BOOTSTRAP-5-CSS-JS-FILE-->
        <link href="css/bootstrap5.css" rel="stylesheet">
        <script src="js/bootstrap5.js"></script>
        
        <!--------------FONT-AWESOME------------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		

		<!---------font-family-link----------->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">

        <!----------CSS-FILE------------->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/emergency.css" rel="stylesheet">
    </head>


    <body>
        <?php
			include("header.php");
		?>
		<?php
			include("nav.php");
		?>


        <article class="container">
            <div class="aboutation">
               <p class="m-0"><b>Home /</b> Emergency</p>
            </div>

            <section class="emer-bg sec-1">
                <div>
                    <h1  class="text-white relative">Emergency and Trauma Service</h1>
                </div>
            </section>

            <section class="sec-2">
                <div class="inner-sec-2">
                    <p>No. of Ambulance available: 02</p>
                    <p>Ambulance's availability: 24*7</p>
                </div>
            </section>

            <section class="sec-3">
                <p>No. of Doctor available with particular reference to Emergency and Trauma Service</p>
                <div class="inner-sec-3 grid-4">
                    <figure>
                        <img src="img/emergency/emer-ser1.webp" alt="emergency-service-img">
                        <figcaption>
                            <h4 class="text-center">Pediatrician</h4>
                        </figcaption>
                    </figure>

                    <figure>
                        <img src="img/emergency/emer-ser2.webp" alt="emergency-service-img">
                        <figcaption>
                            <h4 class="text-center">Pediatric Surgeon</h4>
                        </figcaption>
                    </figure>

                    <figure>
                        <img src="img/emergency/emer-ser3.webp" alt="emergency-service-img">
                        <figcaption>
                            <h4 class="text-center">Orthopedic Surgeon</h4>
                        </figcaption>
                    </figure>

                    <figure>
                        <img src="img/emergency/emer-ser4.jpg" alt="emergency-service-img">
                        <figcaption>
                            <h4 class="text-center">Neurosurgeon</h4>
                        </figcaption>
                    </figure>
                </div>
            </section>
        </article>


        <?php
			include("footer.php");
		?>
      



        <!------------------toggle-menu-script---------------------->
        <script>
			function myFunction(x) {
  			    x.classList.toggle("change");

			    var navLink=document.querySelector(".nav-links");
			    navLink.classList.toggle("show");
			}
		</script>
    </body>
</html>