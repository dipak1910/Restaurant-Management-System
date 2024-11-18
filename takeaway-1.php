<?php
        error_reporting(0);
		session_start();
		if(isset($_GET['cid'])){
		    
		$_SESSION['cid'] = $_GET['cid'];
		    $cid = $_GET['cid'];
		
		    $_SESSION['cid'] = $cid;
		    
		}
		else{
		   $cid = $_SESSION['cid']; 
		}
		if(isset($_SESSION['cid'])){
		}
		else{
		    header("location:takeaway.php");
		}
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
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

    <!-- Menu Items -->
    <link rel="stylesheet" href="css/menu.css" >
    
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
    <style>
        html,body{
            padding: 0;
            margin: 0;
        }
        .menu{
            margin-top: 50px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .menu .category{
            width: 70%;
            overflow: auto;
            white-space: nowrap;   
        }
        .menu .category .categItem{
            margin: 0px 20px;
            display: inline-block;
            padding: 5px 25px;
            background-color: #b13476;
            border: 1px solid black;
            border-radius: 5px;
            color: white;
        }
        .menu .category::-webkit-scrollbar {
            display: none;
          }
        .menu .category .categItem:hover{
            cursor: pointer;
            background-color: white;
            color: #b13476;
            border-color: #b13476;
        }
        .menu .category .categItem h3{
            
            margin:  0px;
        }
        .menu  .items{
            margin-top: 20px;
            width: 70%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .menu  .items .itemsHead{
            font-size: 22px;
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: space-between;
        }
        .menu  .items .itemsHead h3{
            font-weight: 600;
            color: #b13476;
            text-transform: uppercase;
        }
        .menu  .items .itemsMenu{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .menu  .items .itemsMenu .mainItem{
            width: 100%;
            margin: 10px 0px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }
        .menu  .items .itemsMenu .mainItem .itemName,.menu  .items .itemsMenu .mainItem .itemPrice{
            font-weight: 500;
            font-size: 18px;
    width: 300px;
    text-align: center;
            
        }
        .menu  .items .itemsMenu .mainItem .verticalDevider{
            font-weight: 600;
            color: #b13476;
            font-size: 30px;
        }
        .menu  .items .itemsMenu .mainItem .itemsCount{
            /* width: 80px; */
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }
        
        .menu  .items .itemsMenu .mainItem .itemsCount>button{
            margin: 0px 10px;
            text-decoration: none;
            padding: 3px 10px;
            font-size: 16px;
            font-weight: 600;
            border: 0px ;
            border-radius: 5px;
            color: white;
        }
        .menu  .items .itemsMenu .mainItem .itemsCount>button:hover{
            cursor: pointer;
        }
        .menu  .items .itemsMenu .mainItem .itemsCount .itemIncr{
            background-color: green;
        }
        .menu  .items .itemsMenu .mainItem .itemsCount .itemDecr{
            background-color: red;
        }
        .menu  .items .itemsMenu .mainItem .itemsCount .itemMainCount{
            padding: 3px 20px;
            color: white;
            font-weight: 600;
            border-radius: 5px;
            background-color: grey;
        }
        .menu  .items .itemsMenu .mainItem .itemToCart{
            font-size: 16px;
            color: white;
            width: 300px;
            margin-left: 10px;
            background-color: #b13476;
            border: 0px;
            padding: 3px 15px;
            border-radius: 5px;
        } 
        .menu  .items .itemsMenu .mainItem .itemToCart i{
            margin-right: 10px;
        }
    </style>

</head>

<body>

<?php include 'navbar.php' ?>

	<div style="padding:70px;">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="content-wrap-1">
			    <a href="takeaway.php"><i class="fa fa-utensils icon1" style="color: #b13476; border: 2px solid #b13476"></i></a>
					<a href="takeaway-1.php"><i class="fa fa-cart-plus icon1" style="color: #b13476; border: 2px solid #b13476"></i></a>
			    <a href="takeaway-2.php"><i class="fas fa-user-circle icon1" style="color: black; border: 2px solid black"></i></a>

    	</div>
		</div>
		</div>
	</div>

<?php
	require 'db.php';
?>

  <!-- Products Section -->
    <section class="second-sect">
        <div class="main-section-categ">
            <div class="main-section-container">
                <div class="heading-title text-center">
                    <h1 style="margin-bottom:0px; font-size: 32px; color: #b13476">Order Your Favourite Dish</h1>
										<p>Choose the tasty food dish of your choice.</p>
				</div>
				<!-- Choose Category-->
				<div class="menu">
				    <div class="category">
				        <?php 
        			        $exe = mysqli_query($con,"select * from category order by name");
        			        while($r1 = mysqli_fetch_array($exe) ){
        				?>
        				<div class="categItem">
        		           	<a class="btn btn-lg btn-circle btn-outline-new-white" style="font-size:14px; padding:10px; border-radius:8px;" href="takeaway-1.php?cid=<?php echo $r1['cid']; ?>"><?php echo $r1['name']; ?></a>
        				</div>
        				<?php } ?>
				    </div>

                    <div class="items">
                        <div class="itemsMenu">
                                <?php   
                                    $exec = mysqli_query($con,"select * from menu where type = $cid AND takeaway_show = 'YES' order by priority");
                                    while($r = mysqli_fetch_array($exec)){     
                                ?>
                                <div class="mainItem">
        		                    <form method="post" class="mainItem" action="takeaway-1.php?action=add&id=<?php echo $r['mid']; ?>">
                                        <span class="itemName"><?php echo $r['name'];  ?></span>
                                        <span class="verticalDevider">|</span>
                                        <span class="itemPrice">Rs. <?php echo $r['price']; ?></span>
                                        <span class="verticalDevider">|</span>
                                        <span class="itemsCount">
                                            <button class="btn btn-success" onclick="incrementItem(<?php echo $r['mid']; ?>); return false;"> + </button>
        									<span><input type="number" id="<?php echo 'item'.$r['mid']; ?>" name="quantity" class="itemMainCount" value="1" min="1" max="10" readonly></span>
        									<button class="btn btn-danger" onclick="decremtnItem(<?php echo $r['mid']; ?>); return false;"> - </button>
                                        </span>
                                        <span class="verticalDevider">|</span>
                                		<input type="hidden" name="hidden_name" value="<?php echo $r['name']; ?>">
                                    	<input type="hidden" name="hidden_price" value="<?php echo $r['price']; ?>">
                                    <button type="submit" name="add" class="itemToCart"><i class="fa fa-shopping-cart"></i>Add To Cart</button>
                                    </form>
                                </div>
                                <?php  }  ?>
                                <script>
                                    function incrementItem(e) {
                                		const id = '#item' + e;
                                		const getval = $(id).val();
                                		$(id).val(Number(getval) + 1);
                                    }
                                    function decremtnItem(e) {
                                		const id = '#item' + e;
                                		const getval = $(id).val();
                                		if (getval > 0) {
                                			$(id).val(Number(getval) - 1);
                                		}
                                    }
                                    
                                </script>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </section>
 <!-- Retieve Menu Details & Cart -->
    <?php
			require 'db.php';

			if (isset($_POST["add"])){
            
                if (isset($_SESSION["cart"])){
					$item_array_id = array_column($_SESSION["cart"],"product_id");
					
					if (!in_array($_GET["id"],$item_array_id)){
						$count = count($_SESSION["cart"]);
						$i_array = array(
							'product_id' => $_GET["id"],
							'item_name' => $_POST["hidden_name"],
							'product_price' => $_POST["hidden_price"],
							'item_quantity' => $_POST["quantity"],
						);
						$_SESSION["cart"][$count] = $i_array;
						//print_r($_SESSION['cart']);
					}else{
						echo '<script>alert("Product is already Added to Cart")</script>';
					}
				}else{
					$i_array = array(
						'product_id' => $_GET["id"],
						'item_name' => $_POST["hidden_name"],
						'product_price' => $_POST["hidden_price"],
						'item_quantity' => $_POST["quantity"],
					);
					$_SESSION["cart"][0] = $i_array;
				}
				//print_r($_SESSION['cart']);
			}
			if (isset($_GET["action"])){
				if ($_GET["action"] == "delete"){
					foreach ($_SESSION["cart"] as $keys => $value){
						if ($value["product_id"] == $_GET["id"]){
							unset($_SESSION["cart"][$keys]);
							echo '<script>alert("Product has been Removed...!")</script>';
							echo '<script>window.location="takeaway-1.php"</script>';
						}
					}
				}
				if(isset($_SESSION['cart'])){
				    
				}
				else{
				    header("location:takeaway.php");
				}
			}
		?>
	<?php  
	        if((count($_SESSION['cart']) > 0 )){ 
	            //print_r($_SESSION['cart']);

	?>
	    <form method="post" action="takeaway-2.php">
	        <div class="col-md-12">
                <div class="submit-button text-center">
                    <input type="submit" class="btn btn-common" id="checkAvability" name="submit" value="Personal Details" />
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
			</div>
	    </form>
    <?php
	}
    ?>
		<div style="padding:50px;" >
		</div>
		 <form method = "post" action="takeaway-2.php">
            <div style="padding:50px; font-size:60px; text-align:center">
        		<h1> Order Details <h1>
        	</div>
            <div class="table-responsive">
                <table class="table" id="cart-1">
                <tr>
                    <th width="30%">Product Name</th>
                    <th width="10%">Quantity</th>
                    <th width="13%">Price Details</th>
                    <th width="10%">Total Price</th>
                    <th width="17%">Remove Item</th>
                </tr>

                <?php
                    if(!empty($_SESSION["cart"])){
                        $total = 0;
                        foreach ($_SESSION["cart"] as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $value["item_name"]; ?></td>
                                <td><?php echo $value["item_quantity"]; ?></td>
                                <td>&#8377; <?php echo $value["product_price"]; ?></td>
                                <td>
                                &#8377; <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                                <td><a href="takeaway-1.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                            class="text-danger">Remove Item</span></a></td>

                            </tr>
                            <?php
                            $total = $total + ($value["item_quantity"] * $value["product_price"]);
                        }
                            ?>
                            <tr>
                                <td colspan="2"></td>
                                <td><b>Total</b></td>
                                <td>&#8377; <?php echo number_format($total, 2); ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td ><b>Total (Inclusive Of Taxes)</b></td>
                                <td>&#8377; <?php $tx = $total + (($total * 5) / 100); echo number_format($tx,2) ; ?></td>
                                <td></td>
                            </tr>
                            <?php
                        }
                        $_SESSION['total'] = $total;
                    ?>
                </table>
                </div>
            </form>

            <?php include 'contactfooter.php' ?>

<?php include 'footer.php' ?>


	<!-- ALL JS FILES -->
	<!--<script src="js/jquery-3.2.1.min.js"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
