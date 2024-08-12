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
                <p class="m-0"><b>Services /</b> ENT</p>
                </div>

                <section>
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/ENT/ent01.jpg" alt="ENT-Custom-Image" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ENT/ent02.jpg" alt="ENT-Custom-Image" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ENT/ent03.jpg" alt="ENT-Custom-Image" class="d-block" style="width:100%">
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
                                    <h3>Dr Anil Mokasdar</h3>
                                    <p class="m-0">MBBS, MS(ENT)</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            
            <section>
                <div class="container p-0">
                    <h1 class="text-black">ENT</h1>
                    <div class="service-content">
                        <p>Otolaryngology as a medical specialty focuses on conditions of the Ear, Nose and Throat (ENT). From the treatment of hearing loss and ear infections to facial trauma and swallowing disorders, the Department of ENT at <b><i>Shrikant Hospital & Research Institute in Bilaspur</i></b>  offers a wide gamut of Ear, Nose, Throat, Head and Neck treatments to the patients and are one of the Best ENT Specialists in Bilaspur.</p>
                        
                        <p>The department treats patients with high precision and efficiency using technologically  advanced equipment such as video endoscopes, operating microscope, Coblation system, Microdebrider system and 3D navigation systems.</p>
                        
                        
                        <h1>SPECIALITIES</h1>
                        
                        <P><strong>Hearing and Balance Disorders: </strong>Comprehensive diagnosis and treatment of hearing loss, tinnitus, and balance disorders such as vertigo, using advanced audiological tests and vestibular assessments.</P>

                        <P><strong>Nasal and Sinus Conditions: </strong>Expert care for sinusitis, nasal polyps, allergies, and other nasal conditions, including medical and surgical interventions such as endoscopic sinus surgery.</P>

                        <P><strong>Throat and Voice Disorders:</strong> Diagnosis and treatment of throat conditions including tonsillitis, voice disorders, and swallowing difficulties, with therapies ranging from medication to minimally invasive surgery.</P>

                        <P><strong>Ear Infections and Disorders: </strong>Specialized treatment for chronic ear infections, eardrum perforations, and ear-related conditions, utilizing advanced procedures like tympanoplasty and myringotomy.</P>

                        <P><strong>Sleep Apnea and Snoring:</strong> Comprehensive evaluation and treatment of sleep-related breathing disorders including obstructive sleep apnea and snoring, offering solutions such as CPAP therapy and surgical options.</P>

                        <P><strong>Pediatric ENT Care: </strong> Child-friendly diagnosis and treatment for common pediatric ENT conditions such as tonsillitis, adenoid problems, and ear infections, with a focus on minimizing discomfort and anxiety.</P>
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