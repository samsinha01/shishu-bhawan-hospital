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
                <p class="m-0"><b>Child /</b> Pediatrics Cardioogy & Echocardiography</p>
            </div>

            <section>
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/pediatrics/ped-cardio.jpg" alt="Pediatrics-cardiology-Image" class="d-block" style="width:100%">
                        </div>
                    </div>
                </div>
            </section>

            <section class="doc-card-parent">
                <div class="container">
                    <h2 class="text-center drop-shadow text-blue">Our Specialists</h2>
                    <div class="inner-doc-card doc-grid-2">
                        <div class="card">
                            <figure>
                                <img src="img/doctor/prashant.jpeg" alt="MD-img">

                                <figcaption>
                                    <h3>Dr. Prashant Thakur</h3>
                                    <p class="m-0">Pediatrics Cardiology</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            
            <section>
                <div class="container p-0">
                    <h1 class="text-black"> PEDIATRICS CARDIOLOGY & ECHOCARDIOGRAPHY</h1>
                    <div class="service-content">
                        <p>At Shrikant Hospital & Research Institute, our pediatrics Cardiology & Echocardiography department is dedicated to delivering comprehensive and compassionate care for children with heart conditions. Our team of experienced pediatrics cardiologists specializes in diagnosing and treating a wide range of cardiac issues, employing advanced techniques and a patient-centered approach to ensure the best outcomes for our young patients.</p>
                        
                        <h1>SPECIALITIES</h1>
                        
                        <P><strong>Congenital Heart Defects: </strong> Comprehensive evaluation and management of congenital heart abnormalities, from diagnosis through surgical intervention and long-term care.</P>

                        <P><strong>Stroke Care: </strong>Rapid diagnosis and treatment of stroke, including advanced neuroimaging, thrombolytic therapy, and post-stroke rehabilitation.</P>

                        <P><strong>Arrhythmias:  </strong>Diagnosis and treatment of irregular heartbeats, using the latest in electrophysiology and medical management.</P>

                        <P><strong>Heart Failure: </strong>Advanced care for children with heart failure, including medication management, lifestyle counseling, and potential surgical options..</P>

                        <P><strong>Cardiomyopathies: </strong> Management of heart muscle diseases, focusing on improving heart function and quality of life.</P>

                        <P><strong>Hyperlipidemia:  </strong> Treatment and management of high cholesterol levels in children, incorporating dietary guidance and medical therapy when necessary.</P>
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