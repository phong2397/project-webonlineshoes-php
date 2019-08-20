<?php
	include("function/login.php");
	include("function/customer_signup.php");
?>
<!DOCTYPE html>
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
<div id="container">
	
		<img src="img/contactus.jpg" style="width:1150px; height:250px; border:1px solid #000; ">
	<br />
	<br />

		<div id="content">
			<form method="post">
				<table style="position:relative; left:25%;">
					<tr>
						<td style="font-size:20px;">Email:</td><td><input type="email" name="email" placeholder="Email" style="width:400px;"></td>
					</tr>
					<tr>
						<td style="font-size:20px;">Message:</td><td><textarea name="message" style="width:400px; height:300px;" required></textarea></td>
					</tr>
					<tr>
						<td></td><td><button class="btn btn-info" name="send" style="width:300px;"><i class="icon icon-ok icon-white"></i>Submit</button>&nbsp;<a href="index.php"><button class="btn btn-danger" style="width:110px;"><i class="icon icon-remove icon-white"></i>Cancel</button></a></td>
					</tr>
				</table>
			</form>
		</div>
		<?php


			if(isset($POST['send']));
			{
				@$email = $_POST['email'];
				@$message = $_POST['message'];

				$conn->query ("INSERT INTO `contact` (email, message) VALUES ('$email', '$message')") or die (mysqli_error());
			}
		?>

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

