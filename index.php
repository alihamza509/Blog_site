<?php
include("db/db.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>ALI BLOGS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="fa fa-pencil"></span> <span class="title">WELCOME TO ALI BLOGS</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php" class="active">Home</a></li>

							<li><a href="blog.php">Blog</a></li>

							<li><a href="about.php">About</a></li>

							<li><a href="team.php">Authors</a></li>

							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="images/slider-image-1-1920x700.jpg" alt="First slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/slider-image-2-1920x700.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/slider-image-3-1920x700.jpg" alt="Third slide">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

						<br>
						<br>

						<div class="inner">
							<!-- About Us -->
							<header id="inner">
								<h1>HERE is the blogs related the web development</h1>
								<p>Here all your blogs related the programming fields OUR author edit the blogs of different fields related to development in which all are expert intheir feilds related to it.</p>
							</header>

							<br>

							<h2 class="h2">Latest blog posts</h2>
							<?php
											$second="select*from posts order by 1 desc limit 0,3";
											$runsec=mysqli_query($con,$second);
											while($sec=mysqli_fetch_array($runsec)){
												$pid=$sec['p_id'];
												$cid=$sec['cat_id'];
												$ptitle=$sec['p_title'];
												$pcontent=$sec['p_content'];
												$author=$sec['author_name'];
												$pimg=$sec['p_img'];
												$pdate=$sec['p_date'];


											?>
							<div class="row">
								<div class="col-sm-12 text-center">
									<img src="images/<?php echo $pimg ?>" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="blog-post.php?pid=<?php echo $pid?>"><?php echo $ptitle ?></a></h2>

									<p> <?php echo$author ?> &nbsp;|&nbsp; <?php echo $pdate ?></p>
								</div>
							</div>
<?php } ?>
							<p class="text-center"><a href="blog.php">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
						</div>
					</div>
					

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Contact Us</h2>
								<form method="post" action="">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>

										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>

										<div class="field">
											<input type="text" name="subject" id="subject" placeholder="Subject" />
										</div>

										<div class="field">
											<textarea name="message" id="message" rows="3" placeholder="Message"></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="Send Message" class="primary" name="enter" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section>
								<h2>Contact Info</h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span> <a href="#">ah8483120@gmail.com</a></li>
									<li><span class="fa fa-phone"></span> 0333_716600 </li>
									<li><span class="fa fa-map-pin"></span> DHONKAL ROAD wazirabad District gujranwala</li>
								</ul>

								<h2>Follow Us</h2>

								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 welding seniors</li>
								
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php
if(isset($_POST['enter'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$reply="notyet";
	$query="insert into msg(sender_name,sender_email,subject,message,msg_time,	reply)values('$name','$email','$subject','$message',NOW(),'$reply')";
	$runquery=mysqli_query($con,$query);
	if($runquery){
		echo"<script>alert('MESSAGE SEND')</script>";
		echo"<script>window.open('index.php','_self')</script>";
	}
}
?>