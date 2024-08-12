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
               <p class="m-0"><b>Child Care /</b> Pediatrics Surgery</p>
            </div>

            <section>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/ped-sur/ped1.jpg" alt="Pediatrics-Custom-Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/ped-sur/ped2.jpg" alt="Pediatrics-Custom-Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/ped-sur/ped3.jpg" alt="Pediatrics-Custom-Image" class="d-block" style="width:100%">
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
                            <img src="img/doctor/neonsur01.webp" alt="MD-img">

                            <figcaption>
                                <h3>Dr. Anurag Kumar</h3>
                                <p class="m-0">MBBS, Mch(Pediatric Surgery)</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="card">
                        <figure>
                            <img src="img/doctor/neonsur02.webp" alt="MD-img">

                            <figcaption>
                                <h3>Dr. Omprakash Makhija</h3>
                                <p class="m-0">MBBS, Mch(Pediatric Surgery)</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container p-0">
                <h1 class="text-black">PEDIATRICS SURGERY</h1>
                <div class="service-content">
                    <p>Welcome to the Pediatric Surgery department at Shrikant Hospital & Research Institute, where specialized care meets compassion. Our expert team is dedicated to providing high-quality surgical care for infants, children, and adolescents, ensuring the best possible outcomes and a positive experience for both patients and their families.</p>
					
					<h1>SPECIALITIES</h1>
					
                    <P><strong>Congenital Anomaly Corrections: </strong>Surgical treatment for congenital anomalies such as cleft lip and palate, congenital heart defects, and other birth defects.</P>

                    <P><strong>General Pediatric Surgery: </strong>Procedures for common childhood conditions including hernias, appendicitis, and pyloric stenosis.</P>

					<P><strong>Minimally Invasive Surgery: </strong>Advanced laparoscopic and thoracoscopic techniques to reduce pain and recovery time.</P>

                    <P><strong>Trauma Surgery: </strong> Emergency surgical care for children who have experienced traumatic injuries.</P>

                    <P><strong>Oncologic Surgery: </strong>Surgical treatment for pediatric cancers, including tumor removal and biopsies.</P>

                    <h1>Why Choose Shrikant hospital?</h1>

                    <P><strong>Experienced Pediatric Surgeons: </strong>Our team of board-certified pediatric surgeons is highly skilled and experienced in performing a wide range of surgeries on children.</P>

					<P><strong>Child-Friendly Environment: </strong>We prioritize creating a supportive, comforting, and child-friendly environment to reduce anxiety and promote healing.</P>

                    <P><strong>Comprehensive Care: </strong> Our multidisciplinary approach ensures that each child receives holistic care, including preoperative and postoperative support tailored to their needs.</P>
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