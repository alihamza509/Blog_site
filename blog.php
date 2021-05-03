<?php
include("db/db.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>BLOGS</title>
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
							<h1>Blogs in Different TOPICS</h1>

							<div class="image main">
								<img src="images/banner-image-3-1920x500.jpg" class="img-fluid" alt="" />
							</div>
							
							<div class="container-fluid">
								<div class="row">
									<div class="col-9">
										<div class="row">
											<?php
											$perpage=6;

	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}else{
		$page=1;
	}
   $start=($page-1)*$perpage;
   $new="select*from posts ORDER by 1 DESC LIMIT $start,$perpage";
											$runsec=mysqli_query($con,$new);
											while($sec=mysqli_fetch_array($runsec)){
												$pid=$sec['p_id'];
												$cid=$sec['cat_id'];
												$ptitle=$sec['p_title'];
												$pcontent=$sec['p_content'];
												$author=$sec['author_name'];
												$pimg=$sec['p_img'];
												$pdate=$sec['p_date'];


											?>
											<div class="col-sm-6 text-center">
												<img src="images/<?php echo $pimg ?>" class="img-fluid" alt="" />

												<h2 class="m-n"><a href="blog-post.php?pid=<?php echo $pid ?>"><?php echo$ptitle ?>.</a></h2>

												<p> <?php echo$author ?> &nbsp;|&nbsp; <?php echo $pdate ?></p>
											</div>
<?php } ?>
											
										</div>
									</div>

									<div class="col-3">
										<div class="form-group">
				                            <h4>Blog Search</h4>
				                        </div>
<form action="search.php" method="get">
										<div class="form-group">
				                            <div class="input-group">
				                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2" name="search">

<input type="submit" name="submit" value="find" style="font-size:14px; ">
				                            </div>
				                        </div></form>
				                        <h2>CATEGORIES</h2>
				                        <?php
				                        $first="select*from categories";
				                        $runfirst=mysqli_query($con,$first);
				                        while($fukf=mysqli_fetch_array($runfirst)){ $cid=$fukf['cat_id'];
				                        $cname=$fukf['cat_name'];
				                        ?>
				                        <p><a href="cat.php?cid=<?php echo $cid ?>"><?php echo$cname ?>.</a></p>
<?php } ?>
				                        
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
  
  <ul class="pagination pagination-lg justify-content-center  " >
    <li class="page-item"><?php
$query="select*from posts";
$runquery=mysqli_query($con,$query);
$tota=mysqli_num_rows($runquery);
$total=ceil($tota/$perpage);
echo"
<div id='pagination'>
<a href='blog.php?page=1'></a >
</div>       
 ";
for($i=1; $i<=$total; $i++){
	echo"<a href='blog.php?page=$i'>$i</a>";
}
echo"<a href='blog.php?page=$total'></a>";
?></li>
    
  </ul>
</div>
<style type="text/css">
	.pagination {
  display: inline-block;
  font-size:30px;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  border: 1px solid #ddd;
  margin: 0 4px; /* Gray */
}
.center {
  text-align: center;
}
</style>

						
                
              
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>

								&nbsp;
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