<?php
	include("function/login.php");
	include("function/customer_signup.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online  Shoe Store</title>
	<link rel="icon" href="img/logo.jpg" />
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="	https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
						      
						        <li><a href="runningnike.php">Nike</a></li>
						        <li><a href="runningdas.php">Adidas</a></li>
						        <li><a href="runningreebok.php">Reebok</a></li>
						        <li><a href="runningconve.php">Converse</a></li>
						        <li><a href="runningbitis.php">Biti's</a></li>
						    </ul>
						    </li>  
							
						</ul><!-- dropdown-menu -->
						
					</li><!-- /.dropdown -->
			
			
                    <li><a href="aboutus.php">About Us</a></li>                                                                               
                    <li><a href="contactus.php">Contact Us</a></li> 
                    <li><a href="privacy.php">Privacy</a></li> 
                    <li><a href="faqs.php">FAQS</a></li>                         
					<div style="float: right">
		<a href="#login"   data-toggle="modal" style="margin-left:10px"><i class="fa fa-lock"></i>Login</a>
		<a href="#signup"   data-toggle="modal"><i class="fa fa-user"></i>Sign Up</a></div>
		
    </div><!-- /.nav-inner -->	
				</ul><!-- /.nav -->           
            </nav><!--/.nav-collapse -->
                    
		</div><!-- /.container -->
	
</header>
<div id="carousel">
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="active item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner1.jpg" class="carousel"></div>
				<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner2.jpg" class="carousel"></div>
				<div class="item" style="padding:0; border-bottom:0 solid #111;"><img src="img/banner3.jpg" class="carousel"></div>
			</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	
	</div>
	</div>
		<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Login...</h3>
			</div>
				<div class="modal-body">
					<form method="post">
					<center>
						<input type="email" name="email" placeholder="Email" style="width:250px;">
						<input type="password" name="password" placeholder="Password" style="width:250px;">
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="login" value="Login">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>
	
		<div id="signup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 id="myModalLabel">Sign Up Here...</h3>
				</div>
					<div class="modal-body">
						<center>
					<form method="post">
						<input type="text" name="firstname" placeholder="Firstname" required>
						<input type="text" name="mi" placeholder="Middle Initial" maxlength="1" required>
						<input type="text" name="lastname" placeholder="Lastname" required>
						<input type="text" name="address" placeholder="Address" style="width:430px;"required>
						
						<select name="country"  placeholder="Province" > 
						<option value="country">Select country</option>
<option value="TP HCM">TP HCM</option>
<option value="Ha Noi">Ha Noi</option>
<option value="Da Nang">Da Nang</option>
<option value="Hoi An">Hoi An</option>
<option value="Da Lat">Da Lat</option>
<option value="Vinh Ha long">Vinh Ha long</option>
<option value="Hue">Hue</option>
<option value="Hoi An">Hoi An</option>
<option value="Long An">Long An</option>
<option value="Tay Ninh">Tay Ninh</option>
</select>
						<input type="text" name="zipcode" placeholder="ZIP Code" required maxlength="4">
						<input type="text" name="mobile" placeholder="Mobile Number" maxlength="11">
						<input type="text" name="telephone" placeholder="Telephone Number" maxlength="8">
						<input type="email" name="email" placeholder="Email" required>
						<input type="password" name="password" placeholder="Password" required>
						</center>
					</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="signup" value="Sign Up">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
					</form>
			</div>
	<br>	


<div class="container">

<div id="content">
	

<div id="brands0" class="brands-box" style="opacity: 1;">
            <div class="item">
              <a href="#"><img src="img/conve.png" alt="CONVERSE" class="img-responsive" width="100px" height="80px"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/adidas.png" alt="ADIDAS" class="img-responsive"  width="100px" height="80px"></a>
            </div>
            <div class="item">
              <a href="#"><img src="img/reebok.png" alt="PALLADIUM" class="img-responsive"  width="100px" height="80px"></a>
			</div>
			<div class="item">
              <a href="#"><img src="img/nike.jpg" alt="PALLADIUM" class="img-responsive"  width="100px" height="80px"></a>
			</div>
			<div class="item">
              <a href="#"><img src="img/bitis.jpg" alt="PALLADIUM" class="img-responsive"  width="100px" height="80px"></a>
			</div>
			<style type="text/css">
          .brands-box{
            margin-bottom: 35px;
            text-align: center;
          }
          .brands-box .item{
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
          }
.brands0 img{
	width :114px;
	height:88px
}
        </style>
          </div>


	

	<div id="product" style="position:relative; ">
	
		<center><h2><legend><b>Latest Product</b></legend></h2></center>
		
		<br />

		<?php

			$query = $conn->query("SELECT *FROM product WHERE category='feature' ORDER BY product_id DESC") or die (mysqli_error());

				while($fetch = $query->fetch_array())
					{

					$pid = $fetch['product_id'];

					$query1 = $conn->query("SELECT * FROM stock WHERE product_id = '$pid'") or die (mysqli_error());
					$rows = $query1->fetch_array();

					$qty = $rows['qty'];
					if($qty <= 5){

					}else{
						echo "<div class='float'>";
						echo "<center>";
						echo "<a href='details.php?id=".$fetch['product_id']."'><img class='img-polaroid' src='photo/".$fetch['product_image']."' height = '300px' width = '300px'></a>";
						echo "".$fetch['product_name']."";
						echo "<br />";
						echo "Price:$ ".formatMoney($fetch['product_price'])."";
						echo "<br />";
						echo "<h3 class='text-info' style='position:absolute; margin-top:5px; text-indent:15px;'> Size: ".$fetch['product_size']."</h3>";
						echo "</center>";
						echo "</div>";
					}

					}
		?>
	</div>
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

</div>

	<br />
</div>

<br />
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
</div>
</body>
</html>
