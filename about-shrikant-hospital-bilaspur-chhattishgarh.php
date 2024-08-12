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
		
        <!----------CSS-FILE------------->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/about.css" rel="stylesheet">
    </head>

    <body>
        <?php
			include("header.php");
		?>
		<?php
			include("nav.php");
		?>
        <article class="container">
            <h1 class="text-center">ABOUT US</h1>
            <div class="content">

                <video id="video_5750777540000_1715862225710_0" controls  autoplay src="img/video/shrikant-vdo.mp4" muted="" poster="https://stream.jdmagicbox.com/thumbnail/omni-fdf130c3ac40705087c8af8a27db7e61-022PXX22_XX22_170427143737_A7Q3-57447-1568693709769/jd-Ott_720x540_Thumbnail.0000009.jpg" preload="none" class="" playsinline="" disablepictureinpicture=""></video>

                <P>Shrikant Hospital & Research Institute is a NABH preaccrediated hundred beded Super speciality hospita, our NICU is accrediated LEVEL 3A by National neonatology forum. We at Shri Shishu Bhavan super spacility hospital  provide the highest quality and affordable treatments to our patients. Our hospital is located at the heart of  Bilaspur city (Chhattisgarh). All patients are assured of the best service in a very pleasant and non-stressful atmosphere. Proper attention is paid to the hygiene and sanitation. We have the best and most experienced surgeons and specialists treating our patients with utmost care. With our rich knowledge and experience, be assured of quality healthcare services that we provide. We have an unwavering commitment.</P>
            </div>
        </article>


        <?php
			include("footer.php");
		?>


        <script>
			function myFunction(x) {
  			x.classList.toggle("change");

			var navLink=document.querySelector(".nav-links");
			navLink.classList.toggle("show");
			}
		</script>
    </body>
</html>