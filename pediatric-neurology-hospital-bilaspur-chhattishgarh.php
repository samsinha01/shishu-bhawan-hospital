<!Doctype html>
<html>
    <head>
        <title>
            Shrikant Hospital & Research Institute.
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
                <p class="m-0"><b>Child Care /</b> Pediatric Neurology</p>
                </div>

                <section>
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/pediatrics/ped-neuro.jpg" alt="Pediatric-Neurology-Custom-Image" class="d-block" style="width:100%">
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
                                    <h3>Dr Ashish Singh Aujha</h3>
                                    <p class="m-0">MBBS, MD(Pediatrics), Dch(Lon) MRCPCH(UK), CCT(UK)</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            
            <section>
                <div class="container p-0">
                    <h1 class="text-black">PEDIATRIC NEUROLOGY</h1>
                    <div class="service-content">
                        <p>At Shrikant Hospital & Research Institute, our Pediatric Neurology department is dedicated to providing comprehensive and compassionate care for children with neurological disorders. Our team of experienced pediatric neurologists is committed to diagnosing and treating a wide range of conditions, utilizing advanced techniques and a patient-centered approach to ensure the best outcomes for our young patients.</p>
                        
                        <h1>SPECIALITIES</h1>
                        
                        <P><strong>Epilepsy and Seizure Disorders: </strong>  Comprehensive evaluation and treatment plans, including medication management, dietary therapies, and surgical options when necessary.</P>

                        <P><strong>Stroke Care: </strong>Rapid diagnosis and treatment of stroke, including advanced neuroimaging, thrombolytic therapy, and post-stroke rehabilitation.</P>

                        <P><strong>Cerebral Palsy: </strong>Multidisciplinary care for children with cerebral palsy, focusing on improving mobility, communication, and overall quality of life.</P>

                        <P><strong>Neurogenetic Disorders:</strong>Diagnosis and management of inherited neurological conditions, with access to genetic counseling and testing.</P>

                        <P><strong>Neurodiagnostic Services: </strong>State-of-the-art diagnostic tests including EEG, EMG, nerve conduction studies, and advanced imaging for precise diagnosis and treatment planning.</P>

                        <P><strong>Neuromuscular Diseases: </strong>Treatment for conditions affecting muscle strength and function, such as muscular dystrophy and spinal muscular atrophy.</P>
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