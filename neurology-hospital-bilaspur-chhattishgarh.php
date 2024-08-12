<!Doctype html>
<html>
    <head>
        <title>
            Shrikant Hospitl & Research Institute
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
               <p class="m-0"><b>Services /</b> Neurology</p>
            </div>

            <section>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/neuroser.jpg" alt="NUEROLOGY-Custom-Image" class="d-block" style="width:100%">
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
                            <img src="img/doctor/ashish-aujha.jpeg" alt="MD-img">

                            <figcaption>
                                <h3>Dr. Ashish Singh Aujha</h3>
                                <p class="m-0">MBBS, MD(Pediatrics), Dch(Lon) MRCPCH(UK), CCT(UK)</p>
                            </figcaption>
                        </figure>
                    </div>
                    
                </div>
            </div>
        </section>

        <section>
            <div class="container p-0">
                <h1 class="text-black">NEUROLOGY</h1>
                <div class="service-content">
                    <p>Welcome to the Neurology department at Shrikant Hospital & Research Institute, where cutting-edge diagnostics and compassionate care come together. Our expert team is dedicated to providing comprehensive neurological care for a wide range of conditions, ensuring optimal treatment outcomes and patient well-being.</p>
					
					<h1>SPECIALITIES</h1>
					
                    <P><strong>Comprehensive Neurological Evaluation: </strong> In-depth assessments to diagnose and manage neurological conditions such as epilepsy, Parkinson’s disease, multiple sclerosis, and migraines.</P>

                    <P><strong>Stroke Care: </strong>Rapid diagnosis and treatment of stroke, including advanced neuroimaging, thrombolytic therapy, and post-stroke rehabilitation.</P>

					<P><strong>Movement Disorders Clinic: </strong>Specialized care for movement disorders including Parkinson’s disease, tremors, and dystonia, with advanced treatment options such as deep brain stimulation.</P>

                    <P><strong>Headache and Migraine Management: </strong>Tailored treatment plans for chronic headaches and migraines, including medication management, lifestyle changes, and nerve block injections.</P>

                    <P><strong>Neurodiagnostic Services: </strong>State-of-the-art diagnostic tests including EEG, EMG, nerve conduction studies, and advanced imaging for precise diagnosis and treatment planning.</P>

                    <P><strong>Pediatric Neurology: </strong>Specialized care for children with neurological conditions, ensuring developmentally appropriate treatments and a supportive environment.</P>
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