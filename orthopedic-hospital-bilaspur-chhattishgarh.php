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
               <p class="m-0"><b>Services /</b> Orthopedic</p>
            </div>

            <section>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/orthopedic/ortho01.jpg" alt="Orthopedic-Custom-Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/orthopedic/ortho02.jpg" alt="Orthopedic-Custom-Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/orthopedic/ortho03.jpg" alt="Orthopedic-Custom-Image" class="d-block" style="width:100%">
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
                            <img src="img/doctor/ashish-aujha.jpeg" alt="MD-img">

                            <figcaption>
                                <h3>Dr Aashish Singh Aujha</h3>
                                <p class="m-0">MBBS,Orthopedic</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="card">
                        <figure>
                            <img src="img/doctor/dummy.png" alt="MD-img">

                            <figcaption>
                                <h3>Dr R Chatarjee</h3>
                                <p class="m-0">MBBS,Pediatric Orthopaedic</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container p-0">
                <h1 class="text-blue">ORTHOPEDIC</h1>
                <div class="service-content">
                    <p>As one of best Orthopedic Departments in Bilaspur, at <b><i>Shrikant Hospital & Research Institute</i></b>, the mission is to provide excellence in clinical outcomes and an exceptional patient experience, while in an environment that fosters growth through research and expertise in all aspects of Musculoskeletal medicine. All surgeons are well versed in their field and hence provide a level of care unattainable elsewhere.</p>
					
					<p>With expertise in virtually every orthopedic subspeciality, <b><i>Shrikant Hospital & Research Institute</i></b> is multi specialized center with the ability to manage all aspects of Musculoskeletal care.</p>
					
					<p>At <b><i>Shrikant Hospital & Research Institute</i></b>, the center for Orthopedics, Joint Reconstruction & Sports medicine offers precise diagnosis and treatment for all the disorders affecting the Musculoskeletal system including Joints, Bones, Tendons, Ligaments, Muscles and associated nerves.
					</p>
					<h1 class="text-blue">SPECIALITIES</h1>
					
					<p><b>SHOULDER SURGERIES:</b> The flexibility needed in the ball and socket joint places the shoulder at high risk of injury and instability. Shoulder surgeries play a major role in getting the shoulder back to health. The most common shoulder surgeries care Rotor Cuff Repair, Total Shoulder Replacement, Arthroscopy for Frozen Shoulder, Acromioclavicular Joint Repair for Arthritis</p>
					
					<p><b>HAND & ARM SURGERY:</b> Hand & Arm Surgery is used to treat conditions that affect Hand & Wrist, Forearm and Elbow. Conditions that may require surgery include Carpal Tunnel Syndrome, Congenital Hand deformities, Tennis Elbow, Loss of Limb or Finger, Cysts and Tumors</p>
					
					<p><b>FOOT & ANKLE SURGERY: </b>Surgery may be used to address a variety of foot and ankle conditions like Achilles tendonitis, tendon tears, bunions, diabetic foot problems and ankle arthritis.</p>
					
					<p><b>ORTHOPEDIC ONCOLOGY: </b> This division offers expert care to children and adults diagnosed with  tumors and tumor like condition of the bone and soft tissue including bone metastases, sarcomas, benign and cancerous tumors of the bone or soft tissue and pathologic fractures.</p>
					
					<p><b>ARTHROSCOPY & SPORTS MEDICINE: </b> Sports Medicine deals with training in anatomy, biomechanics, pathophysiology of musculoskeletal injuries and functional rehabilitation, besides bony injuries, soft tissue injuries. Arthroscopy provides comprehensive evaluation and management for a wide range of sports injuries to the knee, foot, ankle, shoulder, elbow and hip</p>
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