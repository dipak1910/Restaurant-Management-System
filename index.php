<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>Dwarkesh Restaurant and Banquet</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="./images/dwarkeshlogo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php include 'navbar.php' ?>

	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/s1.png" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Dwarkesh Restaurant</strong></h1>
							<p class="m-b-40">Premium Restaurant & Banquet Services.  <br>
							Book your order now !</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#services">Order Now</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/s2.png" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Dwarkesh Restaurant</strong></h1>
							<p class="m-b-40">Premium Restaurant & Banquet Services.  <br>
							Book your order now !</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="takeaway.php">Order Now</a></p>
						</div>
					</div>
				</div>
			</li>
			
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->

	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Dwarkesh Restaurant & Banquet</span></h1>
						<p>Dwarkesh Restauarant is a bench mark for Taste & Hygiene. We offer best quality food with premium services. Trending Takeaway service is also available here. Dwarkesh Banquet is perfect location for all your functions. Now book your banquet online and celebrate the function offline!</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#services">Book a Order Now</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12" style="padding-left : 130px">
					<img src="images/p2.jpg" alt="" class="img-fluid" height="82%" width="82%">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->

	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						Best Food. Best Services. Best Banquest Hall.
					</p>
					<span class="lead">Dwarkesh Restaurant & Banquet</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->

	<!-- Start Menu -->
	<div class="menu-box" id="menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Menu</h2>
						<p>Have a look at our special and delicious food dishes.</p>
					</div>
				</div>
			</div>

			<div class="row inner-menu-box">

				<div class="col-12">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
                                <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 1");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
							    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 3");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
							    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 5");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
					        	</div>
					        	<div class="row">
					        	    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 7");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
							    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 8");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
							    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 20");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
					        	</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- End Menu -->

	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Food Dishes and Banquet Designs at a glance.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 style="color:#b13476"> <b><u>Food Dishes </b></u></h2>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-01.jpg">
							<img class="img-fluid" src="images/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-02.jpg">
							<img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-03.jpg">
							<img class="img-fluid" src="images/gallery-img-03.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 style="color:#b13476"> <b><u>Banquet Designs </b></u></h2>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="plan_image/Rs. 10000.jpeg">
							<img class="img-fluid" style="height: 12%;" src="plan_image/Rs. 10000.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="plan_image/Rs. 8000.jpeg">
							<img class="img-fluid" style="height: 12%;" src="plan_image/Rs. 8000.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="plan_image/Rs. 21000.jpeg">
							<img class="img-fluid" src="plan_image/Rs. 21000.jpeg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>


		</div>
	</div>
	<!-- End Gallery -->


	<!-- Start Services -->
	<div id="services">
		<div class="container-fluid p-5" style="background-color:#dcdcdc; border-top:3px solid #b13476; border-bottom:3px solid #b13476;">
			<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Our Services </h2>
						<h2 style="color : #b13476">Takeaway Orders & Banquet Hall</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center" style="border-right:2px solid black">
					<div class="inner-column" style="text-align: center;">
						<p>Takeaway Orders Service is available at our restaurant. </p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="takeaway.php">Order Now</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center" >
					<div class="inner-column" style="text-align: center;">
						<p>Attractive Banquet Hall for all your ceremonies. </p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="banquet.php">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- End Services -->

	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>Valuable Reviews of our valuable customers.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Ravindra Patel</strong></h5>
								<!--<h6 class="text-dark m-0">Senior Technician</h6>-->
								<p class="m-0 pt-3">Really good services and good food dishes. Infact this is my all time favourite restaurant.</p>
							</div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Jatin Patel</strong></h5>
								<!--<h6 class="text-dark m-0">Business Man</h6>-->
								<p class="m-0 pt-3">Banquet decoration was very attractive. Food menu and other services were very appreciable; and at reasonalble rate.</p></div>
							<div class="carousel-item text-center">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/quotations-button.png" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Kishan</strong></h5>
								<!--<h6 class="text-dark m-0">Professor</h6>-->
								<p class="m-0 pt-3">Dwarkesh Restaurant is our family restaurant. Such a great dishes and taste. Very fascinating management.</p>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->
	<?php include 'contactfooter.php' ?>

<?php include 'footer.php' ?>

	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
