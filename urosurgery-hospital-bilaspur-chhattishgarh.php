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
               <p class="m-0"><b>Services /</b> Urosurgery</p>
            </div>

            <section>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/urosurgery/uro03.jpg" alt="Plastic-Surgery-Custom-Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/urosurgery/uro4.jpg" alt="Physiotherapy-Custom-Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/urosurgery/uro2.jpg" alt="Physiotherapy-Custom-Image" class="d-block" style="width:100%">
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

        <section class="doc-card-parent">
            <div class="container">
                <h2 class="text-center drop-shadow text-blue">Our Specialists</h2>
                <div class="inner-doc-card doc-grid-2">
                    <div class="card">
                        <figure>
                            <img src="img/doctor/dummy.png" alt="MD-img">

                            <figcaption>
                                <h3>Dr. Name</h3>
                                <p class="m-0">Description</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="card">
                        <figure>
                            <img src="img/doctor/dummy.png" alt="MD-img">

                            <figcaption>
                                <h3>Dr. Name</h3>
                                <p class="m-0">Description</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container p-0">
                <h1 class="text-black">UROSURGERY</h1>
                <div class="service-content">
                    <p>Welcome to the Urosurgery department at Shrikant Hospital & Research Institute, where expertise meets compassionate care. Our specialized team is dedicated to providing comprehensive surgical treatment for a wide range of urological conditions.</p>
					
					<h1>SPECIALITIES</h1>
					
                    <P><strong>Kidney and Ureter Surgery: </strong>Advanced procedures for kidney stones, tumors, and obstructions, including minimally invasive laparoscopic and robotic surgeries.</P>

					<P><strong>Bladder Surgery: </strong>Treatment for bladder cancer, incontinence, and other bladder disorders, using the latest surgical techniques.</P>

                    <P><strong>Prostate Surgery: </strong>Comprehensive care for prostate conditions, including benign prostatic hyperplasia (BPH) and prostate cancer, with options for minimally invasive surgery.</P>

                    <P><strong>Pediatric Urosurgery: </strong>Specialized surgical care for children with congenital and acquired urological conditions.</P>
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