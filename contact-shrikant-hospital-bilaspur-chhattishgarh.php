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

        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

		

		<!---------font-family-link----------->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">

        <!----------CSS-FILE------------->
        <link href="css/contact.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>


    <body>
        <?php
			include("header.php");
		?>
		<?php
			include("nav.php");
		?>
        
        <article>
            <div class="container1">
                <span class="big-circle"></span>
                <img src="img/shape.png" class="square" alt="" />

                <div class="form">
                    <div class="contact-info">
                        <h3 class="title">Let's get in touch</h3>
                        <p class="text">
                            Welcome to Shrikant Hospital & Research Institute. You have any query "Please Contact or send Message"
                        </p>

                        <div class="info">
                            <div class="information">
                                <i class="fas fa-map-marker-alt"></i> &nbsp &nbsp

                                <p class="m-0">IDGAH Road,Infront Of Press Club Building,Near Madhyanagari Chowk, Bilaspur</p>
                            </div>

                             <div class="information">
                                <i class="fas fa-envelope"></i> &nbsp &nbsp
                                <p class="m-0">Pallavishrikantgiri@gmail.com</p>
                            </div>

                            <div class="information">
                                <i class="fas fa-phone"></i>&nbsp&nbsp
                                <p class="m-0">07752-470470</p>
                            </div>
                        </div>

                        <div class="social-media">
                            <p>Connect with us :</p>

                            <div class="social-icons">
                                <a href="https://www.facebook.com/shri.shishubhawan.3" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>

                                <a href="https://api.whatsapp.com/send?phone=919826183363&forceIntent=true&load=loadInIOSExternalSafari" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form">
                        <span class="circle one"></span>
                        <span class="circle two"></span>

                        <form action="index.html" autocomplete="off">
                            <h3 class="title">Contact us</h3>

                            <div class="input-container">
                                <input type="text" name="name" class="input" />
                                <label for="">Username</label>
                                <span>Username</span>
                            </div>

                            <div class="input-container">
                                <input type="email" name="email" class="input" />
                                <label for="">Email</label>
                                <span>Email</span>
                            </div>

                            <div class="input-container">
                                <input type="tel" name="phone" class="input" />
                                <label for="">Phone</label>
                                <span>Phone</span>
                            </div>

                            <div class="input-container textarea">
                                <textarea name="message" class="input"></textarea>
                                <label for="">Message</label>
                                <span>Message</span>
                            </div>

                            <input type="submit" value="Send" class="submit-btn" />
                        </form>
                    </div>
                </div>
            </div>
        </article>

        <?php
			include("footer.php");
		?>



        <script src="js/contact.js"></script>
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