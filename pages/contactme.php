<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Creative Cog Design</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="../css/contact.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" href="https://use.typekit.net/ufy4eie.css">
	<link rel="stylesheet" href="https://use.typekit.net/ufy4eie.css">
</head>
<body>
	<div class="container-fluid">
		<!-- BEGIN ROW -->
		  <div class="row">
			  <!--BEGIN NAV COL-->
			<div class="col-lg-2 col-md-2 col-sm-12 navDiv">
				<nav class="navbar sticky-top">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseExample">MENU</button>
					<div class="collapse navbar-collapse" id="collapseExample">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link active" href="..\index.html">HOME</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">PROJECTS
									<span class="caret"></span>
								</a>
								<div class="dropdown-menu" aria-labelledby="dropdown_target">
									<div>
										<a class="dropdown-item" href="../pages/web.html">WEB</a>
									</div>

									<div>
										<a class="dropdown-item" href="../pages/graphics.html">GRAPHICS</a>
									</div>
								</div>

							</li>
							<li class="nav-item">
								<a class="nav-link" href="../pages/about.html">ABOUT</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./pages/contactMe.php">HIRE</a>
							</li>
						</ul>
					</div>
				</nav>
				<!--END NAV COL-->
			</div>
			<!--BEGIN MIDDLE COL-->
			<div class="col-lg-8 col-md-8 col-sm-12">
				<!--class='menu-active'-->
				<main >
					<header class="jumbotron">
						<h1>Need help with a project?</h1>
					</header>
					<section>
						<p>lets chat!</p>
                        <?php
                            if(isset($_GET['error']))
                            {
                              $Msg = " Please fill in the blanks";      
                              echo '<div class="alert alert-danger">'.$Msg.'</div>';  
                            }
                            if(isset($_GET['success'])) {
                                $Msg = " Your message was sent";      
                                echo '<div class="alert alert-success">'.$Msg.'</div>';  
                            }
                        ?>
						<form class="contactForm" action="contact.php" method="post">
							<div class="form-row">
								<div class="col-lg-2 col-md-1 col-sm-1"></div>
								<div class="col-lg-8 col-md-10 col-sm-10">
								  <label for="name">Full Name</label>
								  <input type="text" id="name" name="name" placeholder="Your full name">
								</div>
								<div class="col-lg-2 col-md-1 col-sm-1"></div>
							</div>

							<div class="form-row">
								<div class="col-lg-2 col-md-1 col-sm-1"></div>
								<div class="col-lg-8 col-md-10 col-sm-10">
								  <label for="mail">Email</label>
								  <input type="text" id="mail" name="mail" placeholder="Your email">
								</div>
								<div class="col-lg-2 col-md-1 col-sm-1"></div>
							</div>
							<div class="form-row">
								<div class="col-lg-2 col-md-1 col-sm-1"></div>
								<div class="col-lg-8 col-md-10 col-sm-10">
								  <label for="subject">Subject</label>
								  <input type="text" id="subject" name="subject" placeholder="What is the project?">
								</div>
								<div class="col-lg-2 col-md-1 col-sm-1"></div>
							</div>
							<div class="form-row">
								<div class="col-lg-2 col-md-1 col-sm-1"></div>
								<div class="col-lg-8 col-md-10 col-sm-10">
								  <label for="message">Message</label>
								  <textarea id="message" name="message" placeholder="Describe what you need help with." style="height:200px"></textarea>
								</div>
								<div class="col-lg-2 col-md-1 col-sm-1"></div>
							</div>
							
							<div class="form-row">
								<div class="col-lg-2 col-md-1 col-sm-1"></div>
								<div class="col-lg-8 col-md-10 col-sm-10">
									<input type="submit" value="submit" name = "btn-send">
								</div>
								<div class="col-lg-2 col-md-1 col-sm-1"></div>
							</div>

						</form>
					</section>
				
					<aside class="onlineContacts ">
						<h4>find me</h4>
						<ul>
							<li>linkedIn <a href="https://www.linkedin.com/in/jennifer-anne-phillips/">https://www.linkedin.com/in/jennifer-anne-phillips/</a></li>
							<li>github <a href="https://www.github.com/jennp1987">https://www.github.com/jennp1987</a></li>
						</ul>
					</aside>
		
				<footer>
					<p>&copy; 2021 Creative Cog Design</p>
					<p>San Diego, CA</p>
				</footer>
			</main>
			<!--END MIDDLE MAIN CO-->
			</div>
		<div class="col-lg-2 col-md-2 col-sm-0"></div>
			<!--END ROW-->
		</div>
			<!--END DIV CONTAINER-FLUID-->
		</div>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

	<script>

		$(document).click(function(event) {
			var clickover = $(event.target);
			var $navbar = $(".navbar-collapse");
			var _opened = $navbar.hasClass("show");
			var _navToggle = $(".navbar-toggler");
			var _closed = _navToggle.hasClass('collapsed');
			var $main = $('main');
			//FIRST CONDITION ---
			//SECOND CONDITION --- _opened === true &&
			//IF IT'S OPEN AND IF YOU CLICK ON THE BUTTON YOU CLOSE THE MENU AND REMOVES SKEW
			 if ( _opened === true && clickover.hasClass('navbar-toggler')) {
				$main.removeClass('menu-active');
				//$navbar.collapse('hide');

			//CLOSES NAV AND REMOVES SKEW WHEN YOU CLICK OFF OF NAV
			 } else if (!clickover.hasClass('navbar-toggler')) {
				$navbar.collapse('hide');
				$main.removeClass('menu-active');

			//IF ITS CLOSED REMOVE CLASS 
			} else if (clickover.hasClass('navbar-toggler collapsed')) {
				$main.removeClass('menu-active');
			//REMOVE CLASS IF CLICK EVENT IS NOT ON BUTTON. USED FOR A TAGS. 
			} else if ( !clickover.hasClass('navbar-toggler')) {
				$main.removeClass('menu-active');
			}else {
				$main.addClass('menu-active');
			}

		});


	</script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/ec4eb3f4ab.js" crossorigin="anonymous"></script>
</body>

</html>

