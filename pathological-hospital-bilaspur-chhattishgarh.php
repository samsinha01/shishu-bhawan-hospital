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
        <link href="css/service.css" rel="stylesheet">
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
               <p class="m-0"><b>Facilities /</b> Pathoogical</p>
            </div>

            <section>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/pathological.jpg" alt="Pathological-Custom-Image" class="d-block" style="width:100%">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container p-0">
                <h1 class="text-black">PATHOLOGICAL</h1>
                <div class="service-content">
                    <p>Welcome to the Pathology department at Shrikant Hospital & Research Institute, where precision diagnostics meet compassionate care. Our expert team is committed to providing accurate and timely pathological testing to support effective diagnosis and treatment planning.</p>
					
					<h1>SPECIALITIES</h1>
					
                    <P><strong>Blood Tests: </strong>Comprehensive blood panels for diagnosing and monitoring various health conditions, including complete blood count (CBC), lipid profiles, and metabolic panels.</P>

                    <P><strong>Biopsy Analysis: </strong>Expert examination of tissue samples to diagnose cancer, infections, and other conditions.</P>

					<P><strong>Microbiological Tests: </strong>Detection and identification of pathogens causing infections through cultures, sensitivity tests, and molecular diagnostics.</P>
                </div>
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