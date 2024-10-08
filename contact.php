<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>contact us</title>
	<link rel="stylesheet" href="contact.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

	<!-- starting of the Header-->

	<header class="header">
		<img class="logo" src="logo.jpg">
	
		<nav class="navbar">
		  <a href="home.html">home</a>
	
		  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			Categories
		  </button>
		  <div class="dropdown-menu">
			<a class="dropdown-item" href="ba.html">BA</a>
			<a class="dropdown-item" href="bca.html">BCA</a>
			<a class="dropdown-item" href="bcom.html">BCom</a>
			<a class="dropdown-item" href="bba.html">BBA</a>
		  </div>
		  <a href="blog.html">blog's</a>
		  <a href="about.html">about us</a>
		  <a href="http://localhost/contact.php">contact us</a>
		  <a href="review.html">review</a>
		</nav>
	
		<div class="icons">
		  <a href="http://localhost/register.php"><div class="fa fa-bars" id="menu-btn"></div>
		  <div class="fa fa-user" id="login-btn"></div>
		  </a>
		</div>
	  </header>
	
	<!-- End of the Header-->



	<!-- contact box section-->
	<section id="section">
		<div class="box_sec">
			<div class="info">
				<h2 class="title">Contact Us </h2>
				<h3 class="sub_title">Fill up the form and our team will get back to you within 24 hours</h3>
				<ul class="info_details">
					<li>
						<i class="fas fa-phone-alt"></i>
						<span>Phone: </span> <a href="tel:+1234567890">1234567890</a>
					</li>
					<li>
						<i class="fas fa-paper-plane"></i>
						<span>Email: </span> <a href="mailto:info@bookbazar.com">info@bookbazar.com</a>
					</li>
					<li>
						<i class="fas fa-globe"></i>
						<span>Website: </span> <a href="h.html">bookbazar.com</a>
					</li>
				</ul>
				<ul class="social-icons">
					<li>
						<a href="https://www.instagram.com/">
							<i class="fab fa-square-instagram"></i></a>
					</li>
					<li>
						<a href="https://www.facebook.com/">
							<i class="fab fa-facebook-f"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/">
							<i class="fab fa-square-twitter"></i></a>
					</li>
					<li>
						<a href="https://www.youtube.com/">
							<i class="fab fa-youtube"></i>
							</a>
					</li>

				</ul>
			</div>
			<div class="form">
				<form method="POST" action="text1.php">
					<h2 class="form-title">Send us a message</h2>
					<div class="form-field">
						<div class="form-group">
							<input type="text" class="fname" name="name" placeholder="First Name">
						</div>
						<div class="form-group">
							<input type="text" class="lname" name="lname" placeholder="Last Name">
						</div>
						<div class="form-group">
							<input type="email" class="email" name="mail" placeholder="Mail">
						</div>
						<div class="form-group">
							<input type="number" class="phone" name="number" placeholder="Phone">
						</div>
						<div class="form-group">
							<textarea name="message" id="" name="message" placeholder="Write your message">
						</textarea>
						</div>
					</div>
					<input type="submit" value="Send message" class="submit-button">
				</form>
			</div>
		</div>
	</section>
	<!-- contact box section-->


	<!-- Starting of the Footer-->
	<footer>
		<div class="row">

			<div class="col">
				<h3> Customer Services</h3>
				<ul>
					
					<li>
						<span> <i class="fa-solid fa-arrow-right"></i> </span> <a href="about.html">About Us</a>
					</li>
					<li>
						<span> <i class="fa-solid fa-arrow-right"></i> </span> <a href="contact.html">Contact Us</a>
					</li>
					
				</ul>
			</div>

			<div class="col">
				<h3> Policy</h3>
				<ul>
					<li>
						<span> <i class="fa-solid fa-arrow-right"></i> </span> <a href="return.html">Return Policy</a>
					</li>
					<li>
						<span> <i class="fa-solid fa-arrow-right"></i> </span> <a href="terms.html">Terms Of Use</a>
					</li>
					
					<li>
						<span> <i class="fa-solid fa-arrow-right"></i> </span> <a href="privacy.html">Privacy</a>
					</li>
				</ul>
			</div>


			<div class="col">
				<h3>Support</h3>

				<div class="address">
					<p> <i class="fa fa-phone" aria-hidden="true"></i>
						<a href="tel:+911234567890"> +91 1234567890 </a>
					</p>
				</div>

				<div class="address">
					<p class="a1">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<a class="a2" href="mailto:info@bookbazar.com"> info@bookbazar.com </a>
					</p>
				</div>

				<div class="social-icon">
					<a href="https://www.instagram.com/"> <i class="fab fa-square-instagram"></i></a>
					<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.twitter.com/"><i class="fab fa-square-twitter"></i></a>
					<a href="https://www.youtube.com/"> <i class="fab fa-youtube"></i></a>
				</div>
			</div>

		</div>
		<hr>
		<p class="copyright">
			Copyright @2024 Bookbazar, All Rights Reserved |
		</p>
	</footer>

	<!-- Ending of the Footer-->

</body>

</html>