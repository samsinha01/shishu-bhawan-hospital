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
               <p class="m-0"><b>Facilities /</b> ECG</p>
            </div>

            <section>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/ecg.jpg" alt="X-Ray-Custom-Image" class="d-block" style="width:100%">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container p-0">
                <h1 class="text-black">ELECTROCARDIOGRAM (ECG)</h1>
                <div class="service-content">
                    <p>Welcome to the Cardiology department at Shrikant Hospital & Research Institute, where our commitment to precision and compassionate care is paramount. Our expert team provides high-quality Electrocardiogram (ECG) services to support accurate diagnosis and effective treatment of heart conditions.</p>
					
					<h1>SPECIALITIES</h1>
					
                    <P><strong>Routine ECG: </strong>Non-invasive monitoring of heart activity to diagnose and manage conditions such as arrhythmias, heart attacks, and other cardiac disorders.</P>

                    <P><strong>Stress ECG: </strong>Evaluating heart function under physical stress to detect and assess the severity of coronary artery disease and other heart conditions.</P>

					<P><strong>Holter Monitoring: </strong>Continuous 24-48 hour ECG monitoring to record heart activity during daily routines, identifying irregularities that may not appear during a standard ECG.</P>

                    <P><strong>Pediatric ECG: </strong>Specialized ECG services for infants, children, and adolescents, ensuring age-appropriate care and accurate diagnosis.</P>

                    <P><strong>Emergency ECG: </strong>Rapid ECG services for emergency situations to quickly assess and diagnose urgent cardiac conditions.</P>
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