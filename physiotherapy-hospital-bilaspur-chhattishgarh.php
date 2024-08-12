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
               <p class="m-0"><b>Services /</b> Physiotherapy</p>
            </div>

            <section>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/physiotherapy/physio1.jpg" alt="Physiotherapy-Custom-Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/physiotherapy/physio2.jpg" alt="Physiotherapy-Custom-Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/physiotherapy/physio3.jpg" alt="Physiotherapy-Custom-Image" class="d-block" style="width:100%">
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
                                <h3>Dr. Huma Khan</h3>
                                <p class="m-0">MBBS, BPT</p>
                            </figcaption>
                        </figure>
                    </div>
                    
                </div>
            </div>
        </section>
        
        <section>
            <div class="container p-0">
                <h1 class="text-black">PHYSIOTHERAPY</h1>
                <div class="service-content">
                    <p>The Department of Physiotherapy at <b><i>Shrikant Hospital & Research Institute</i></b> is staffed with skilled Physiotherapists and provide the highest quality of evidence based Physiotherapy using a hands-on approach, exercise and education to decrease pain, improve function and return patients to doing things they love.</p>
					
					<p>Every patient has their own specific needs and expectations and the department of qualified physiotherapists work with individual patients to get them back to pain free and healthy life.</p>
					
					<h1>SPECIALITIES</h1>
					
					<p><b>BARIATRICS:</b> Physiotherapists help manage concerns such as arthritis, fibromyalgia, diabetes, osteoarthritis, osteoporosis or joint pain by evaluating strength, flexibility, balance, mobility and endurance and weight loss</p>
					
					<p><b>NEUROLOGY:</b> Neurological Physiotherapy helps patients with disorders that affect the brain, spinal cord and nerves such as stroke, MS and Parkinson’s disease. It is based on exercises to restore motor function through attempting to overcome motor deficits and improve motor patterns</p>
					
					<p><b>ORTHOPEDICS: </b>Physiotherapy plays major role in pain management, achieving complete range of motion (ROM), strength training, gait training, posture correction and ergonomic advice.</p>
					
					<p><b>CARDIOLOGY: </b> Physiotherapists starts rehabilitation by commencing non strenuous exercises and simple passive movements to maintain the overall activities of daily living.</p>
					
					<p><b>GYNECOLOGY:</b> It is a subspecialty in Physiotherapy concerned with health throughout the child bearing period, and helps the mother to adjust advantageously to the physical and psychologic changes of pregnancy and the post natal period so that stresses of child bearing are minimized.</p>
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