<?php session_start(); ?>
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
    <title> Restaurant and Banquet</title>
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

	<div style="padding:100px;">
	</div>



	<section class="second-sect">
        <div class="main-section-categ">
            <div class="main-section-container">
                <div class="heading-title text-center">
                    <h1 style="margin-bottom:0px; font-size: 32px; color: #b13476">Plan Details</h1>
					<p>Fill up your details and confirm your booking</p>
                </div>

              </div>
            </div>
    </section>

    <div style="height: 20%;text-align:center;">
       <a href="menu.jpeg" download><img src="./images/menu.jpeg" height="20%" width="90%" alt="Image Not Loaded" /></a>
    </div>
    <div class="contact-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form id="contactForm" method="post" action="banquet-1.php">
							<div class="row">
                                <div class="col-md-12">
									<span class="field-title" > Select Plan : </span>
									<div class="form-group">
										<select class="custom-select d-block form-control" id="n-reason" required data-error="Please Select No. of Slots" name="menu">
											<option disabled selected>Select Plan *</option>
											<option value="250">Plan - 1 : 250/- per dish</option>
											<option value="300">Plan - 2 : 300/- per dish</option>
											<option value="350">Plan - 3 : 350/- per dish</option>
											<option value="450">Plan - 4 : 450/- per dish</option>
											<option value="550">Plan - 5 : 550/- per dish</option>
										</select>
										<div class="help-block with-errors"></div>									
									</div>
                                </div>
								<div class="col-md-12">
									<span class="field-title" > Enter Number Of People </span>
									<div class="form-group">
										<input type="number" onchange="calc()" class="form-control" id="b-name" name="b-no" min="50" max="1000" placeholder="Enter Number of people" required data-error="Please Enter Number"> 
										<div class="help-block with-errors"></div>
									</div>
                                </div>
                                <script>
                                    function calc(){
                                        var plan = document.getElementById('n-reason').value;
                                        var person = document.getElementById('b-name').value;
                                        
                                        console.log(plan);
                                        console.log(person);
                                        var total = plan * person;
                                        total.toString().toLocaleString();
                                        var t = document.getElementById('total').value = total;
                                    }
                                </script>
                                <div class="col-md-12">
                                    <span class="field-title">Total Food Bill</span>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="total" readonly value="0" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-button text-center">
											<button class="btn btn-lg btn-circle btn-outline-new-white" style="font-size:14px; padding:10px; border-radius:8px;" id="submit" type="submit" name="submit">Banquet Design</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
										</div>
                                </div>
								</div>	
                                </form>
                                <div class="text-center" style="margin-top: 2%;">
    							    <h2 class="text-warning">
    								    <strong id="showResvered">
    								    <?php 
    								        if(isset($_SESSION['er'])){
                                                echo 'Select Plan & Person No.';
                                                unset($_SESSION['er']);
                                            }
                                         ?>
                                        </strong>
    							    </h2>
    						    </div>
							</div>
						</div>
							<div style="padding:5%;"></div>
				</div>
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
