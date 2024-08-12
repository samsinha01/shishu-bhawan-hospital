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
                <p class="m-0"><b>Child Care /</b> Developmental Pediatrics & Autism Clinic</p>
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
                    <div class="inner-doc-card doc-grid-3">
                        <div class="card">
                            <figure>
                                <img src="img/doctor/md02.webp" alt="MD-img">

                                <figcaption>
                                    <h3>Dr. Pallavi Giri</h3>
                                    <p class="m-0">MBBS,MD Pediatrician And Incharge Developmental & Autism Clinic</p>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="card">
                            <figure>
                                <img src="img/doctor/dummy.png" alt="MD-img">

                                <figcaption>
                                    <h3>Dr. Pratibha Agrawal</h3>
                                    <p class="m-0">MBBS, Dch</p>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="card">
                            <figure>
                                <img src="img/doctor/dhruv.jpeg" alt="MD-img">

                                <figcaption>
                                    <h3>Dr. Dhruv Vaza</h3>
                                    <p class="m-0">DHLS,CBT,VBT,OPT,M.PYCHOLOGY</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            
            <section>
                <div class="container p-0">
                    <h1 class="text-black">DEVELOPMENTAL PEDIATRICS & AUTISM CLINIC</h1>
                    <div class="service-content">
                        <p>At Shrikant Hospital & Research Institute, our Development & Autism Clinic is dedicated to providing specialized care for children with developmental delays and autism spectrum disorders. Our team of expert pediatricians, therapists, and specialists is committed to offering comprehensive evaluations and personalized treatment plans, utilizing a patient-centered approach to ensure the best outcomes for our young patients.</p>
                        
                        <h1>SPECIALITIES</h1>
                        
                        <P><strong>Autism Spectrum Disorders (ASD): </strong>Comprehensive diagnostic evaluations and tailored intervention plans to support children with ASD in achieving their full potential.</P>

                        <P><strong>Developmental Delays:</strong>Assessment and treatment for delays in speech, motor skills, and cognitive development, ensuring early intervention to maximize developmental progress.</P>

                        <P><strong>Behavioral Disorders:</strong> Management of conditions such as Attention Deficit Hyperactivity Disorder (ADHD) and other behavioral challenges, using evidence-based approaches to improve behavior and learning outcomes.</P>

                        <P><strong>Learning Disabilities:</strong>Support for children with learning difficulties, including dyslexia, dysgraphia, and other specific learning disorders, through targeted educational strategies and therapies.</P>

                        <P><strong>Social and Emotional Development: </strong> Guidance and interventions to support social skills, emotional regulation, and overall psychological well-being.</P>

                        <P><strong> </strong> </P>
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