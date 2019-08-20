<?php
$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='yhannaki@gmail.com'; // Business email ID
?>
<?php
	include("function/session.php");
	include("dbconn.php");
?>
<html>
<head>
	<title>Online Shoe Store</title>
	<link rel="icon" href="img/logo.jpg" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

/* MEGA MENU STYLE
********************************/ 
.mega-menu {
	padding: 10px 0px ! important;
	width: 100px;
  border-radius: 0;
  margin-top: 0px;
	}

	.mega-menu li {
		display: inline-block;
		float: left;
		font-size: 0.94rem;
		padding: 3px 0px;
		}

		.mega-menu li.mega-menu-column {

			width: 50px;
			}

			.mega-menu .nav-header {
			padding: 0 !important;
			margin-bottom: 10px;
			display: inline-block;
			width: 50%;
			border-bottom: 1px solid #ddd;
			}
      .mega-menu img { padding-bottom: 10px;}







/* Disable Toggle style
********************************/  

/* Dropdown Toggle on style */
.navbar .nav li.dropdown.open > .dropdown-toggle, 
.navbar .nav li.dropdown.active > .dropdown-toggle, 
.navbar .nav li.dropdown.open.active > .dropdown-toggle {
    background: inherit; /* Set to inherit when using mouse hover to open dropdown */
    color: inherit;
    }   
    /* Toggle off style */
    .navbar .nav li.dropdown.open.active > .dropdown-toggle,
    .navbar .nav > li.dropdown > a:focus { 
    background: inherit;
    color: inherit;
    }
    /* Toggle hover */
    .navbar .nav li.dropdown > .dropdown-toggle:hover,
    .navbar .nav li.dropdown.open > .dropdown-toggle:hover {
    background-color: #DDDDDD;
    }
            
            
    /* Toggle caret*/
    .navbar .nav li.dropdown > .dropdown-toggle .caret {
        border-bottom-color:;
        border-top-color:;
        }
        /* Toggle caret hover */
        .navbar .nav li.dropdown > a:hover .caret, 
        .navbar .nav li.dropdown > a:focus .caret {
        border-bottom-color: #333;
        border-top-color: #333;
        }
        /* Toggle caret active */
        .navbar .nav li.dropdown.open > .dropdown-toggle .caret, 
        .navbar .nav li.dropdown.active > .dropdown-toggle .caret, 
        .navbar .nav li.dropdown.open.active > .dropdown-toggle .caret {
        border-bottom-color:#333;
        border-top-color: #333;
        }



/* Hover style
********************************/ 
.navbar .nav > li > a, .mega-menu a
 { 
  -webkit-transition: all 200ms ease;
	 -moz-transition: all 200ms ease;
	  -ms-transition: all 200ms ease;
	   -o-transition: all 200ms ease;
	      transition: all 200ms ease; 
	
		 /* -webkit-transform: translate3d(0, 0, 0); Webkit Hardware Acceleration*/ 
	     -webkit-backface-visibility: hidden; /* Safari Flicker Fix #2 */
	     -webkit-transform: translateZ(0);
}	
</style>
  <script>jQuery(document).ready(function(){
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).fadeOut("fast");
    });
});</script>
<body>
<header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
		<div class="container">
        
            <!-- Mobile toggle button -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>

            <!-- Logo -->
  
			
            <!-- Navigation -->
            <nav class="nav-collapse collapse">
                <ul class="nav">
                <img src="img/logo1.png" class="brand" style="width:40px">
	
				    <li><a href="home.php">Home</a></li>
                    <li class="dropdown">
                        <a href="product.php" class="dropdown-toggle" data-toggle="dropdown">Product<b class="caret"></b></a>                      

						<ul class="dropdown-menu mega-menu">
    
						<li class="mega-menu-column">
						    <ul>
						      
						        <li><a href="runningnike1.php">Nike</a></li>
						        <li><a href="runningdas1.php">Adidas</a></li>
						        <li><a href="runningreebok1.php">Reebok</a></li>
						        <li><a href="runningconve1.php">Converse</a></li>
						        <li><a href="runningbitis1.php">Biti's</a></li>
						    </ul>
						    </li>  
						  
						   
							
						</ul><!-- dropdown-menu -->
						
					</li><!-- /.dropdown -->
			
			
                    <li><a href="aboutus1.php">About Us</a></li>                                                                               
                    <li><a href="contactus1.php">Contact Us</a></li> 
                    <li><a href="privacy1.php">Privacy</a></li> 
                    <li><a href="faqs1.php">FAQS</a></li>                         
					<?php
				$id = (int) $_SESSION['id'];

					$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
					$fetch = $query->fetch_array ();
			?>

		
				
				Welcome:&nbsp;&nbsp;&nbsp;<a href="#profile" href  data-toggle="modal"><i class="icon-user icon-black"></i><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['lastname'];?></a>
				<a href="function/logout.php"><i class="icon-off icon-black"></i>logout</a>
    </div><!-- /.nav-inner -->	
				</ul><!-- /.nav -->           
            </nav><!--/.nav-collapse -->
			

		</div><!-- /.container -->
	
</header>

	<div id="profile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">My Account</h3>
				</div>
					<div class="modal-body">
						<?php
							$id = (int) $_SESSION['id'];

								$query = $conn->query ("SELECT * FROM customer WHERE customerid = '$id' ") or die (mysqli_error());
								$fetch = $query->fetch_array ();
						?>
						<center>
					<form method="post">
						<center>
							<table>
								<tr>
									<td class="profile">Name:</td><td class="profile"><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['mi'];?>&nbsp;<?php echo $fetch['lastname'];?></td>
								</tr>
								<tr>
									<td class="profile">Address:</td><td class="profile"><?php echo $fetch['address'];?></td>
								</tr>
								<tr>
									<td class="profile">Country:</td><td class="profile"><?php echo $fetch['country'];?></td>
								</tr>
								<tr>
									<td class="profile">ZIP Code:</td><td class="profile"><?php echo $fetch['zipcode'];?></td>
								</tr>
								<tr>
									<td class="profile">Mobile Number:</td><td class="profile"><?php echo $fetch['mobile'];?></td>
								</tr>
								<tr>
									<td class="profile">Telephone Number:</td><td class="profile"><?php echo $fetch['telephone'];?></td>
								</tr>
								<tr>
									<td class="profile">Email:</td><td class="profile"><?php echo $fetch['email'];?></td>
								</tr>
							</table>
						</center>
					</div>
				<div class="modal-footer">
					<a href="account.php?id=<?php echo $fetch['customerid']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account"></a>
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>



	<br>
<div id="container" style="margin-top:40px">
	
	<form method="post" class="well"  style="background-color:#fff; overflow:hidden;">
	<table class="table" style="width:50%;">
	<label style="font-size:25px;">Summary of Order/s</label>
		<tr>
			<th><h5>Quantity</h5></td>
			<th><h5>Product Name</h5></td>
			<th><h5>Size</h5></td>
			<th><h5>Price</h5></td>
		</tr>

		<?php
		$t_id = $_GET['tid'];
		$query = $conn->query("SELECT * FROM transaction WHERE transaction_id = '$t_id'") or die (mysqli_error());
		$fetch = $query->fetch_array();

		$amnt = $fetch['amount'];
		$t_id = $fetch['transaction_id'];

		$query2 = $conn->query("SELECT * FROM transaction_detail LEFT JOIN product ON product.product_id = transaction_detail.product_id WHERE transaction_detail.transaction_id = '$t_id'") or die (mysqli_error());
		while($row = $query2->fetch_array()){

		$pname = $row['product_name'];
		$psize = $row['product_size'];
		$pprice = $row['product_price'];
		$oqty = $row['order_qty'];

		echo "<tr>";
		echo "<td>".$oqty."</td>";
		echo "<td>".$pname."</td>";
		echo "<td>".$psize."</td>";
		echo "<td>".formatMoney($pprice)."</td>";
		echo "</tr>";
		}
		?>

	</table>
	<?php
function formatMoney($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}
?>
	<legend></legend>
	<h4>TOTAL: $ <?php echo formatMoney($amnt); ?></h4>
	</form>
	<div class='pull-right'>
<div class="">
    <form action="<?php echo $paypal_url ?>" method="post" >
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="Alphaware Shoes">
    <input type="hidden" name="item_number" value="<?php echo $t_id; ?>">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="<?php echo $amnt; ?>">
    <input type="hidden" name="cpp_header_image" value="http://www.phpgang.com/wp-content/uploads/gang.jpg">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="PHP">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="function/cancel.php">
    <input type="hidden" name="return" value="function/success.php">
    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
</div>
	</div>


		<div id="purchase" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Mode Of Payment</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="image" src="images/button.jpg" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"  />
						<br/>
						<br/>
						<button class="btn btn-lg" >Cash</button>
					</center>
				</div>
			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>


		<br />
		<br />
</div>
<br />
<div id="footer">
	<div class="foot">
		
		<p style="font-size:25px;">Online Shoe Store Inc. 2019 Brought To You </p>
		<h4 >Hỗ trợ thanh toán</h4>
          <div class="modcontent ">
            <p><img alt="" src="img/logopayment.jpg"></p>
			</div>
	</div>

		<div id="foot">
		
         
          <h4 >FOLLOW US</h3>
          <div class="modcontent ">
            <p><a href="https://www.facebook.com"><img alt="" src="img/facebook.png"></a>&nbsp;&nbsp;<a href="https://www.instagram.com"><img alt="" src="img/instagram.png"></a>&nbsp;&nbsp;<a href="https://www.youtube.com"><img alt="" src="img/youtube.png"></a>&nbsp;&nbsp;<a href="https://www.lazada.vn"><img alt="" src="img/LZD1.png"></a>&nbsp;&nbsp;<a href="https://shopee.vn"><img alt="" src="img/Shopee.png" style="height:50px; width:50px"></a></p>
          </div>
       
		</div>
</div>
</body>
</html>
