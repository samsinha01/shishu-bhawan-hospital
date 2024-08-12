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
               <p class="m-0"><b>Services /</b> General Surgery</p>
            </div>

            <section>
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/gen-surgery/gensur01.jpg" alt="General Surgery-Custom-Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/gen-surgery/gensur02.jpeg" alt="General Surgery-Custom-Image" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="img/gen-surgery/gensur3.jpg" alt="General Surgery-Custom-Image" class="d-block" style="width:100%">
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
                                <h3>Dr. Deepak Meghani</h3>
                                <p class="m-0">MBBS, MS(General Surgery)</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container p-0">
                <h1 class="text-black">GENERAL SURGERY</h1>
                <div class="service-content">
                    <p>Simple, Complex and critical surgeries are handled by our expert surgeons in their respective fields with use of modern techniques like Laparoscopy. In minimally invasive surgery, doctors use a variety of techniques to operate with less damage to the body than with open surgery. In general, minimally invasive surgery is associated with less pain, a shorter hospital stay and fewer complications. Laparoscopy is a type of surgery which is done through one or more small incisions, using small tubes and tiny cameras and surgical instruments.</p>
					
					<h1>SPECIALITIES</h1>
					
                    <P><strong>Abdominal Surgery: </strong>Expert surgical care for abdominal conditions including appendicitis, hernias, gallbladder diseases, and gastrointestinal disorders.</P>

                    <P><strong>Laparoscopic Surgery:</strong> Minimally invasive procedures for various conditions, including cholecystectomy, hernia repairs, and diagnostic laparoscopy, offering quicker recovery and reduced pain.</P>

                    <P><strong>Breast Surgery:</strong> Comprehensive surgical treatment for breast conditions including benign lumps, breast cancer, and reconstructive procedures, with a focus on preserving aesthetics and function.</P>

                    <P><strong>Thyroid and Parathyroid Surgery:</strong>Specialized surgical care for thyroid and parathyroid disorders, including thyroidectomy and parathyroidectomy, using advanced techniques for precise outcomes.</P>

                    <P><strong>Colorectal Surgery:</strong>Treatment for colorectal conditions such as colorectal cancer, diverticulitis, and inflammatory bowel disease, including minimally invasive options.</P>

                    <P><strong>Emergency Surgery:</strong>Rapid surgical intervention for urgent conditions such as trauma, acute abdominal pain, and severe infections, ensuring prompt and effective care.</P>

                    <P><strong>Skin and Soft Tissue Surgery:</strong> Procedures for skin lesions, cysts, and soft tissue masses, including excision and biopsy, focusing on minimal scarring and optimal healing.</P>
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