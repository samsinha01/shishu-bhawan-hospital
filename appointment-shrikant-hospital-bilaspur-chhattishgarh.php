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
        <link href="css/appointment.css" rel="stylesheet">
    </head>

    <body>
        <?php
			include("header.php");
		?>
		<?php
			include("nav.php");
		?>

        <main class="container">
            <article class="m-5">
                <section class="appoint-sec-1">
                    <h1 class="text-center p-3">Book Appointment</h1>
                    <form action="#" method="post">
                        <div class="form-group mb-3">
                            <label class="">Name:</label>
                            <input type="text" placeholder="Enter Your Name" class="form-control" id="name">
                        </div>

                        <div class="form-group mb-3">
                            <label class="">Mobile Number:</label>
                            <input type="number" placeholder="Enter Mobile Number" class="form-control" id="phone">
                        </div>

                        <div class="form-group mb-3">
                            <label class="">Address:</label>
                            <input type="text" placeholder="Enter Your Address" class="form-control" id="address">
                        </div>

                        <div class="form-group mb-3">
                            <label class="d-block">What's Your Problem?</label>
                            <textarea rows="3" cols="" class="form-control" id="problem"></textarea>
                        </div>

                        <div class="text-center">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </section>
            </article>
        </main>




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

            document.querySelector("form").onsubmit=(event)=>{
                event.preventDefault();
                var name = document.getElementById("name").value;
                var phone = document.getElementById("phone").value;
                var address = document.getElementById("address").value;
                var problem = document.getElementById("problem").value;

                console.log(name);
                console.log(phone);
                console.log(address);
                console.log(problem);
                var url = "https://wa.me/919826183363?text="
                + "Name: " + name + "%0a"
                + "Phone: " + phone + "%0a"
                + "Address: " + address + "%0a"
                + "Problem: " + problem;
                window.open(url, '_blank').focus();
            }
		</script>
    </body>
</html>