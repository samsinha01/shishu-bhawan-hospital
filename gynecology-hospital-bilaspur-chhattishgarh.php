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
               <p class="m-0"><b>Services /</b> Gynecology</p>
            </div>

            <section>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/gynecology/gyn01.jpg" alt="Gynecology-Custom-Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/gynecology/gyn02.jpg" alt="Gynecology-Custom-Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/gynecology/gyn03.jpg" alt="Gynecology-Custom-Image" class="d-block" style="width:100%">
                </div>
                </div>
                
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev carousel-btn" title="left-btn" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next carousel-btn" title="right-btn" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>

        <section>
            <div class="container p-0">
                <h1 class="text-black">GYNECOLOGY</h1>
                <div class="service-content">
                    <p>The Gynecology Department at <b><i>Shrikant Hospital & Research Institute</i></b> provides comprehensive services for gynecological and pregnancy-related concerns. Our team includes skilled gynecologists, obstetricians, and nurses specializing in high-risk pregnancies. Additionally, proficient surgeons handle gynecological and obstetric procedures in state-of-the-art operating rooms, ensuring safe and complication-free surgeries.</p>
					
					<p>Our commitment to women’s health extends beyond diagnosis and treatment. We emphasize preventive care, offering regular check-ups, screenings, and educational programs to empower our patients with knowledge about their reproductive health. Whether it’s family planning, menopause management, or fertility consultations, our gynecology experts provide personalized guidance to address each woman’s unique needs and concerns.</p>
					
					
					<p>In our dedication to delivering the highest quality care, we prioritize patient comfort and safety. Our gynecological and obstetric surgeries adhere to the latest medical advancements and best practices. We maintain stringent infection control measures and employ cutting-edge technology within our well-equipped operating rooms, ensuring that every procedure is conducted with precision and the utmost care. At <b><i>SShrikant Hospital & Research Institute</i></b>, we are devoted to promoting women’s well-being through every stage of life.</p>
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