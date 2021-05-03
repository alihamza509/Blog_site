<?php
include("db/db.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>DETAIL OF BLOGS</title>
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
									<span class="fa fa-pencil"></span> <span class="title">ALI BLOGS</span>
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
							<li><a href="index.php">Home</a></li>

							<li><a href="blog.php" class="active">Blog</a></li>

							<li><a href="about.php">About</a></li>

							<li><a href="team.php">Authors</a></li>

							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<?php
							if(isset($_GET['pid'])){
								$postid=$_GET['pid'];

							}
							$det="select*from posts where p_id='$postid'";
							$rundet=mysqli_query($con,$det);
							while($secs=mysqli_fetch_array($rundet)){
												$pid=$secs['p_id'];
												$cid=$secs['cat_id'];
												$ptitle=$secs['p_title'];
												$pcontent=$secs['p_content'];
												$author=$secs['author_name'];
												$pimg=$secs['p_img'];
												$pdate=$secs['p_date'];


											?>
							
							<h1>HERE IS THE DETAIL RELATED THE <?php echo$ptitle?> written by <?php echo$author ?>.</h1>

							<div class="image main">
								<img src="images/<?php echo$pimg ?>" class="img-fluid" alt="" />
							</div>

							<p><?php echo$pcontent ?></p>
						</div>
					<?php } ?>
					</div>
					
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Leave a comment</h2>
								
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>

										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>

										<div class="field">
											<textarea name="message" id="message" rows="3" placeholder="Your message"></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="Submit" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section>

								<h2>Share This</h2>

								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="#" class="icon style2 fa-behance"><span class="label">Behance</span></a></li>
								</ul>
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 welding seniors </li>
						
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