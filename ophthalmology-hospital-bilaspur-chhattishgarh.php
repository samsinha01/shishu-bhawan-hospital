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
               <p class="m-0"><b>Facilities /</b> Ophthalmology</p>
            </div>

            <section>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/ophthalmology1.jpg" alt="OPHTHALMOLOGY-Custom-Image" class="d-block" style="width:100%">
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
                <h1 class="text-black">OPHTHALMOLOGY</h1>
                <div class="service-content">
                    <p>Welcome to the Ophthalmology department at Shrikant Hospital & Research Institute, where expert eye care and compassionate treatment are our top priorities. Our specialized team provides comprehensive eye care services to diagnose, treat, and manage a wide range of vision and eye health conditions, ensuring clear vision and improved quality of life for our patients.</p>
					
					<h1>SPECIALITIES</h1>
					
                    <P><strong>Comprehensive Eye Exams: </strong>Routine and detailed eye examinations to detect vision problems and eye diseases such as glaucoma, cataracts, and macular degeneration.</P>

                    <P><strong>Cataract Surgery: </strong>Advanced cataract removal with intraocular lens implantation, using the latest techniques for rapid recovery and improved vision.</P>

					<P><strong>LASIK and Refractive Surgery: </strong>State-of-the-art laser treatments to correct refractive errors like myopia, hyperopia, and astigmatism, providing freedom from glasses and contact lenses.</P>

                    <P><strong>Glaucoma Management: </strong>Early detection and personalized treatment plans for glaucoma, including medication, laser therapy, and surgical options.</P>

                    <P><strong>Retina Services: </strong>Specialized care for retinal diseases such as diabetic retinopathy, retinal detachment, and age-related macular degeneration, utilizing advanced diagnostic and treatment technologies.</P>

                    <P><strong>Pediatric Ophthalmology: </strong>Expert care for children's vision needs, including treatment for amblyopia (lazy eye), strabismus (crossed eyes), and other pediatric eye conditions.</P>

                    <P><strong>Emergency Eye Care: </strong>Immediate care for eye injuries, infections, and sudden vision changes to ensure prompt and effective treatment.</P>
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