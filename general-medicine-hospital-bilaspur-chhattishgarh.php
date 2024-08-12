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
               <p class="m-0"><b>Services /</b> General Medicine</p>
            </div>

            <section>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/medicine/med01.jpg" alt="General-Medicine-Custom-Image" class="d-block" >
                </div>
                <div class="carousel-item">
                    <img src="img/medicine/med02.jpg" alt="General-Medicine-Custom-Image" class="d-block" >
                </div>
                <div class="carousel-item">
                    <img src="img/medicine/med03.jpg" alt="General-Medicine-Custom-Image" class="d-block" >
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
                <h2 class="text-center">Our Specialists</h2>
                <div class="inner-doc-card doc-grid-2">
                    <div class="card">
                        <figure>
                            <img src="img/doctor/dummy.png" alt="MD-img">

                            <figcaption>
                                <h3>Dr. Harendra Shukla</h3>
                                <p class="m-0">MBBS,Physician MD</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container p-0">
                <h1 class="text-black">GENERAL MEDICINE</h1>
                <div class="service-content">
                <p>The Department of General Medicine at <b><i>Shrikant Hospital & Research Institute</i></b> is staffed with excellent General Physicians who specialize in many diseases but whose primary treatment does not involve surgery. They provide care to patients of all ages. They are very adept at providing treatment of acute non-life-threatening diseases, early detection and refer to a specialized inhouse doctor in case of patients with serious illnesses. They involve firstly in preventive care including health education and immunization. They are highly knowledgeable about all branches of medicine.</p>
					
					<p>A general physician conducts a physical examination of the patient and then recommends necessary tests and diagnostic procedures. The results of these tests, the general physical examination and symptoms are then co-related to give a final diagnosis. Depending on the final diagnosis, the general physician gives the necessary treatment or refers to a specialist.</p>
					
					<h1>Treatments and Procedures</h1>
					
					<p>The following conditions are looked into and appropriate advice is given by the practitioners</p>
					
					<p>General Medicine is all about primary care. Patients of all ages including adults, adolescents and children are treated. Some of the conditions that are diagnosed initially are</p>
					
					<p>Conditions like Headache, Muscular weakness and Epilepsy Infectious diseases</p>
					
					<p>Respiratory illnesses like Asthma, Allergies and Lung infections</p>
					
					<p>Medical conditions of Joints and Limbs and Backache</p>
					
					<p>Most of the metabolic diseases</p>
					<p>Endocrine diseases such as diabetes, thyroid</p>
					<p>Common fevers</p>
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