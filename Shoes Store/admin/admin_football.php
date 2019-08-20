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


		<a href="#add" role="button" class="btn btn-info" data-toggle="modal" style="position:absolute;margin-left:222px; margin-top:140px; z-index:-1000;"><i class="icon-plus-sign icon-white"></i>Add Product</a>
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
								<td><select name="product_size"   style="width:250px;"  required> 
						<option value="1">Select Size</option>
<option value="US:4,UK:3.5,EU:36">US:4,UK:3.5,EU:36</option>
<option value="US:5,UK:4.5,EU:37">US:5,UK:4.5,EU:37</option>
<option value="US:6,UK:5.5,EU:38">US:6,UK:5.5,EU:38</option>
<option value="US:7,UK:6.5,EU:39">US:7,UK:6.5,EU:39</option>
<option value="US:8,UK:7.5,EU:40">US:8,UK:7.5,EU:40</option>
<option value="US:9,UK:8.5,EU:41">US:9,UK:8.5,EU:41</option>
<option value="US:10,UK:9.5,EU:42">US:10,UK:9.5,EU:42</option>	
<option value="US:11,UK:10.5,EU:43">US:11,UK:10.5,EU:43</option>	
<option value="US:12,UK:11.5,EU:44">US:12,UK:11.5,EU:44</option>	
</select></td>
							</tr>
							<tr>
								<td><input type="text" name="brand" placeholder="Brand Name	" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="number" name="qty" placeholder="No. of Stock" style="width:250px;" required></td>
							</tr>
							<tr>
								<td><input type="hidden" name="category" value="football"></td>
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

				header ("location:admin_football.php");
			}}
		}

				?>
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
			<div class="alert alert-info"><center><h2>Football</h2></center></div>
			<br />
				<label  style="padding:5px; float:right;"><input type="text" name="filter" placeholder="Search Product here..." id="filter"></label>
			<br />

			<div class="alert alert-info">
			<table class="table table-hover" style="background-color:;">
				<thead>
				<tr style="font-size:20px;">
					<th>Product Image</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Sizes</th>
					<th>No. of Stock</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				<?php

					$query = $conn->query("SELECT * FROM `product` WHERE category='football' ORDER BY product_id DESC") or die(mysqli_error());
					while($fetch = $query->fetch_array())
						{
						$id = $fetch['product_id'];
				?>
				<tr class="del<?php echo $id?>">
					<td><img class="img-polaroid" src = "../photo/<?php echo $fetch['product_image']?>" height = "70px" width = "80px"></td>
					<td><?php echo $fetch['product_name']?></td>
					<td><?php echo formatMoney($fetch['product_price'])?></td>
					<td><?php echo $fetch['product_size']?></td>

					<?php
					$query1 = $conn->query("SELECT * FROM `stock` WHERE product_id='$id'") or die(mysqli_error());
					$fetch1 = $query1->fetch_array();

						$qty = $fetch1['qty'];
					?>

					<td><?php echo $fetch1['qty']?></td>
					<td style="width:120px;">
					<?php
					echo "<a href='stockin.php?id=".$id."' class='btn btn-success' rel='facebox'><i class='icon-plus-sign icon-white'></i> Stock In</a> ";
					echo "<a href='stockout.php?id=".$id."' class='btn btn-danger' rel='facebox'><i class='icon-minus-sign icon-white'></i> Stock Out</a>";
					echo "<a href='update-football.php?id=".$id."' class='btn btn-warning' rel='facebox'><i class='icon-plus-sign icon-white'></i> Update</a> ";
					echo "<a href='delete.php?id=".$id."' class='btn btn-access' rel='facebox'><i class='icon-minus-sign icon-white'></i> Delete</a> ";
					?>
					</td>
				</tr>
				<?php
					}
				?>
				</tbody>
			</table>
			</div>
			<?php	
		 /* delete */
		 if (isset($_POST['delete'])){
			$pid = $_POST['pid'];
		 $conn->query("DELETE FROM product WHERE product_id = '$pid'") or die(mysqli_error());
	 
		 echo "<script>window.location = 'admin_football.php'</script>";
		 }
?>

		<?php	
		 /* update */
			if (isset($_POST['edit'])){
		$pid = $_POST['pid'];
		$product_image = $_POST["product_image"] ;
		$product_name=$_POST['product_name'];
		$product_price=$_POST['product_price'];
		$product_size=$_POST['product_size'];
		$brand=$_POST['brand'];
		$category=$_POST['category'];

		$result = $conn->query("SELECT * FROM `product` WHERE product_id='$pid'") or die(mysqli_error());
		$row = $result->fetch_array();
	   
			
	$conn->query( "UPDATE product SET product_image='$product_image',product_name = '$product_name', product_price = '$product_price', product_size = '$product_size',brand='$brand',category='$category' WHERE product_id = '$pid'") or die (mysqli_error());

	echo "<script>window.location = 'admin_football.php'</script>";
  
    }   

?>
  <?php
  /* stock in */
  if(isset($_POST['stockin'])){

  $pid = $_POST['pid'];

 $result = $conn->query("SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = $result->fetch_array();

  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck + $new_stck;

  $que = $conn->query("UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());
  echo "<script>window.location = 'admin_football.php'</script>";
  //header("Location:admin_football.php");
 }

  /* stock out */
 if(isset($_POST['stockout'])){

  $pid = $_POST['pid'];

 $result = $conn->query("SELECT * FROM `stock` WHERE product_id='$pid'") or die(mysqli_error());
 $row = $result->fetch_array();

  $old_stck = $row['qty'];
  $new_stck = $_POST['new_stck'];
  $total = $old_stck - $new_stck;

  $que = $conn->query("UPDATE `stock` SET `qty` = '$total' WHERE `product_id`='$pid'") or die(mysqli_error());
  echo "<script>window.location = 'admin_football.php'</script>";
  //header("Location:admin_football.php");
 }
  ?>



</body>
</html>
<script type="text/javascript">
	$(document).ready( function() {

		$('.remove').click( function() {

		var id = $(this).attr("id");


		if(confirm("Are you sure you want to delete this product?")){


			$.ajax({
			type: "POST",
			url: "../function/remove.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut('slow', function(){ $(this).remove();});
			}
			});
			}else{
			return false;}
		});
	});

</script>
