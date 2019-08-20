<?php
	include("function/session.php");
	include("dbconn.php");
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
	<script src="/javascripts/filter.js" type="text/javascript" charset="utf-8"></script>
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
			
			
                    <li><a href="aboutus.php">About Us</a></li>                                                                               
                    <li><a href="contactus.php">Contact Us</a></li> 
                    <li><a href="privacy.php">Privacy</a></li> 
                    <li><a href="faqs.php">FAQS</a></li>                         
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
<div id="container">
	

	<div class="nav1">
    <div id="brands0" class="brands-box" style="opacity: 1;">
           
			<div class="item">
              <a href="#"><img src="img/reebok.png" alt="PALLADIUM" class="img-responsive"  width="100px" height="80px"></a>
			</div>
			
			<style type="text/css">
          .brands-box{
              margin-top:50px;
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
		<ul>
		<li><a href="allree1.php" class="active" style="color:#111;">All</a></li>
				<li>|</li>
			<li><a href="productreebok1.php">Basketball</a></li>
			<li>|</li>
			<li><a href="footballreebok1.php"  >Work Out</a></li>
			<li>|</li>
			<li><a href="runningreebok1.php" >Running</a></li>
		</ul>
		<?php echo "<a href='cart.php?id=".$id."&action=view'><button class='btn btn-inverse' style='right:1%; position:fixed; top:10%;'><i class='icon-shopping-cart icon-white'></i> View Cart</button></a>" ?>
		<label  style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Search Product here..." id="filter"></label>
	</div>


		<br />
		<br />
		<div id="product">

			<?php

				$query = $conn->query("SELECT *FROM product WHERE brand='reebok' ORDER BY product_id DESC") or die (mysqli_error());

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
							echo "Price: $ ".formatMoney($fetch['product_price'])."";
							echo "<br />";
							echo "<h3 class='text-info' style='position:absolute; margin-top:5px; text-indent:15px;'> Size: ".$fetch['product_size']."</h3>";
							echo "</center>";
							echo "</div>";
						}

						}
			?>
		</div>
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



	<br />
</div>
<br />
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
