<?php
		session_start();
		if(isset($_SESSION['exit'])){
		    unset($_SESSION['exit']);
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
    <link rel="shortcut icon" href="./images/dwarkeshlogo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
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
		<link rel="stylesheet" href="css/c-items.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php include 'navbar.php' ?>

	<div style="padding:70px;">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="content-wrap-1">
			    <a href="takwaway.php"><i class="fa fa-utensils icon1" style="color: #b13476; border: 2px solid #b13476"></i></a>
					<a href="takeaway-1.php"><i class="fa fa-cart-plus icon1" style="color: black; border: 2px solid black"></i></a>
			    <a href="takeaway-2.php"><i class="fas fa-user-circle icon1" style="color: black; border: 2px solid black"></i></a>

    	</div>
		</div>
		</div>
	</div>

<?php
	require 'db.php';

	$exec = mysqli_query($con,"select * from category order by name");

?>

  <!-- Products Section -->
    <section class="second-sect">
        <div class="main-section-categ">
            <div class="main-section-container">
                <div class="heading-title text-center">
                    <h1 style="margin-bottom:0px; font-size: 32px; color: #b13476">Choose the Food Category</h1>
					<p>Please Select the menu as per your choice.</p>

					
				</div>
				


                <div class="products wow fadeInRight">
                    <?php
					    while($r = mysqli_fetch_array($exec)){
					            $cid = $r['cid'];
					           $q = mysqli_query($con,"select count(name) from menu where type=$cid");
					           while($r1 = mysqli_fetch_array($q)){
				    ?>
		                    <div class="item" style="border-radius:10px; border:1px solid #b13476;">
		                        <div class="imgBx">
		                            <img style="max-width: 100%; max-height: 100%;" src="<?php echo $r['img']; ?>"/>
		                        </div>
		                        <div class="cntBx">
		                            <div class="item-title" style="color : #b13476;"><?php echo $r['name']; ?></div>
		                            <div class="description">
		                                <p>Total Items :  <?php echo $r1[0]; ?> </p>
		                            </div>
										<div style="padding-top:15px;">
		                                	<a class="btn btn-lg btn-circle btn-outline-new-white" style="font-size:14px; padding:10px; border-radius:8px;" href="takeaway-1.php?cid=<?php echo $r['cid']; ?>">Order Now</a>
										</div>
		                          </div>
		                    </div>
                        <?php  } } ?>
                </div>
            </div>
					</div>
    </section>


		<div style="padding:50px;" >
		</div>
		<?php include 'contactfooter.php' ?>

<?php include 'footer.php' ?>

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
