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
	<script src="../jscript/jquery-1.9.1.js" type="text/javascript"></script>

		<!--Le Facebox-->
		<link href="../facefiles/facebox.css" media="screen" rel="stylesheet" type="text/css" />
		<script src="../facefiles/jquery-1.9.js" type="text/javascript"></script>
		<script src="../facefiles/jquery-1.2.2.pack.js" type="text/javascript"></script>
		<script src="../facefiles/facebox.js" type="text/javascript"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
		$('a[rel*=facebox]').facebox()
		})
		</script>

		<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML =
              "<html><head><title></title></head><body>" +
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;


        }
		</script>
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


		<div id="add" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Add Product...</h3>
			</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data">
					<center>
						<table>
							<tr>
								<td><input type="file" name="product_image" required></td>
							</tr>
							<?php include("random_id.php");
							echo '<tr>
								<td><input type="hidden" name="product_code" value="'.$code.'" required></td>
							<tr/>';
							?>
							<tr>
								<td><input type="text" name="product_name" placeholder="Product Name" style="width:250px;" required></td>
							<tr/>
							<tr>
								<td><input type="text" name="product_price" placeholder="Price" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="text" name="product_size" placeholder="Size" style="width:250px;" maxLength="2" required></td>
							</tr>
							<tr>
								<td><input type="text" name="brand" placeholder="Brand Name	" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="number" name="qty" placeholder="No. of Stock" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="hidden" name="category" value="basketball"></td>
							</tr>
						</table>
					</center>
				</div>
			<div class="modal-footer">
				<input class="btn btn-primary" type="submit" name="add" value="Add">
				<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</form>
			</div>
		</div>

		<?php
			if (isset($_POST['add']))
				{
					$product_code = $_POST['product_code'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$product_size = $_POST['product_size'];
					$brand = $_POST['brand'];
					$category = $_POST['category'];
					$qty = $_POST['qty'];
					$code = rand(0,98987787866533499);

								$name = $code.$_FILES["product_image"] ["name"];
								$type = $_FILES["product_image"] ["type"];
								$size = $_FILES["product_image"] ["size"];
								$temp = $_FILES["product_image"] ["tmp_name"];
								$error = $_FILES["product_image"] ["error"];

								if ($error > 0){
									die("Error uploading file! Code $error.");}
								else
								{
									if($size > 30000000000) //conditions for the file
									{
										die("Format is not allowed or file size is too big!");
									}
									else
									{
										move_uploaded_file($temp,"../photo/".$name);


				$q1 = $conn->query("INSERT INTO product ( product_id,product_name, product_price, product_size, product_image, brand, category)
				VALUES ('$product_code','$product_name','$product_price','$product_size','$name', '$brand', '$category')");

				$q2 = $conn->query("INSERT INTO stock ( product_id, qty) VALUES ('$product_code','$qty')");

				header ("location:admin_product.php");
			}}
		}

				?>

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
			<div class="alert alert-info"><center><h2>Transactions	</h2></center></div>
			<br />


			<div class="alert alert-info">
			<form method="post" class="well"  style="background-color:#fff; overflow:hidden;">
	<div id="printablediv">
	<center>
    <table class="table" style="width:50%;">
   
	<label style="font-size:25px;"><strong> <img class=receipt src="../img/logo1.png"  style="width:40px"> Online Shoe Store Inc.</strong></label>
	<label style="font-size:20px;"><strong><b> Official Order</b></strong></label>
		<tr>
        <th><h5>Quanlity</h5></td>
			<th><h5>Brand</h5></td> 
			<th><h5>SHOES</h5></td>
            <th><h5>AMOUNT</h5></td>
            
        </tr>
                      
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
    <?php
    $td_id = $_GET['tdid']; 
    $query1 = $conn->query("SELECT * FROM transaction LEFT JOIN customer ON customer.customerid = transaction.customerid where  transaction_id = '$td_id' "  ) or die (mysqli_error());
    $fetch = $query1->fetch_array();
    echo "<b>Customer Name: </b>". $fetch['firstname'].' '.$fetch['lastname'];
                            $query2 = $conn->query("SELECT * FROM transaction_detail LEFT JOIN product ON product.product_id = transaction_detail.product_id WHERE transaction_detail.transaction_id = '$td_id'") or die (mysqli_error());
                     
                            while($row = $query2->fetch_array()){
                           
        
                                $o_qty = $row['order_qty'];
                           
                            $brand1=$row['brand'];
                            $brand=$row['product_name'];
                            $price = $row['product_price'];

                            echo "<tr>";
                            echo "<td>".$o_qty."</td>";
							echo "<td>".$brand1."</td>";
							echo "<td>".$brand."</td>";
							echo "<td>".formatMoney($price)."</td>";
						
							echo "</tr>";
							}   
							$Q3 = $conn->query("SELECT sum(amount) FROM transaction WHERE transaction_id='$td_id'");
							while($row = $Q3->fetch_array()){

							$amnt = $row['sum(amount)'];
							echo "<tr><td></td><td></td><td><b>TOTAL : </b></td> <td><b>$ ".formatMoney($amnt)."</b></td></tr>";
							}
							
							?>

	</table>
	<legend></legend>

	</center>
	</div>

	<div class='pull-right'>
	<div class="add"><a onclick="javascript:printDiv('printablediv')" name="print" style="cursor:pointer;" class="btn btn-info"><i class="icon-white icon-print"></i> Print Receipt</a></div>
	</div>
	</form>
			</div>
			</div>



</body>
</html>
