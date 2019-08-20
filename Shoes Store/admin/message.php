<?php
	include("../function/session.php");
	include("../dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Shoe Store</title>
	<link rel = "stylesheet" type = "text/css" href="../css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery-1.7.2.min.js"></script>
	<script src="../js/carousel.js"></script>
	<script src="../js/button.js"></script>
	<script src="../js/dropdown.js"></script>
	<script src="../js/tab.js"></script>
	<script src="../js/tooltip.js"></script>
	<script src="../js/popover.js"></script>
	<script src="../js/collapse.js"></script>
	<script src="../js/modal.js"></script>
	<script src="../js/scrollspy.js"></script>
	<script src="../js/alert.js"></script>
	<script src="../js/transition.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../javascripts/filter.js" type="text/javascript" charset="utf-8"></script>
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
				<img src="../img/logo1.png" class="brand" style="width:50px">
	     
				<?php
				$id = (int) $_SESSION['id'];

					$query = $conn->query ("SELECT * FROM admin WHERE adminid = '$id' ") or die (mysqli_error());
					$fetch = $query->fetch_array ();
			?>

		
			

		
				<div style="    margin-left: 600px;">
			
				<a>Welcome:&nbsp;&nbsp;&nbsp;<i class="icon-user icon-black"></i><?php echo $fetch['username']; ?></a>
				<a href="../function/admin_logout.php"><i class="icon-off icon-black"></i>logout</a></li>
		</div>
    </div><!-- /.nav-inner -->	
				</ul><!-- /.nav -->           
            </nav><!--/.nav-collapse -->
			

		</div><!-- /.container -->
	
</header>
	<br>

	<div id="leftnav">
		<ul>
			<li><a href="admin_home.php" >Dashboard</a></li>
			<li><a href="admin_home.php">Products</a>
				<ul>
					<li><a href="admin_feature.php "style="font-size:15px; margin-left:15px;">Features</a></li>
					<li><a href="admin_product.php "style="font-size:15px; margin-left:15px;">Basketball</a></li>
					<li><a href="admin_football.php" style="font-size:15px; margin-left:15px;">Football</a></li>
					<li><a href="admin_running.php"style="font-size:15px; margin-left:15px;">Running</a></li>
				</ul>
			</li>
			<li><a href="transaction.php">Transactions</a></li>
			<li><a href="customer.php">Customers</a></li>
			<li><a href="message.php">Messages</a></li>
			<li><a href="order.php">Orders</a></li>
		</ul>
	</div>

	<div id="rightcontent" style="position:absolute; top:10%;">
			<div class="alert alert-info"><center><h2>Messages</h2></center></div>
			<br />
				<label  style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Search here..." id="filter"></label>
			<br />

		<div class="alert alert-info">
			<table class="table table-hover" style="background-color:;">
				<thead>
				<tr style="font-size:20px;">
					<th>Email</th>
					<th>Message</th>
				</tr>
				</thead>
				<?php
					$query = $conn->query("SELECT * FROM `contact`") or die(mysqli_error());
					while($fetch = $query->fetch_array())
						{
				?>
				<tr>
					<td><?php echo $fetch['email'];?></td>
					<td><?php echo $fetch['message']?></td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>

	</div>



</body>
</html>
