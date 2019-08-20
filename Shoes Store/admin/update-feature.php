<div>	



<?php
  include("../dbconn.php");
  $id = $_GET['id'];
  ?>
					<form method="post"  >
					<table>
					<tr><td><input type="hidden" name="pid" autocomplete="off" class="input-large number" id="text" value="<?php echo $id; ?>" /></td></tr>
							<tr>
								<td><input type="file" name="product_image" ></td>
							</tr>
							
							<tr>
								<td><input type="text" name="product_name" placeholder="Product Name" style="width:250px;" ></td>
							</tr>
							<tr>
								<td><input type="text" name="product_price" placeholder="Price" style="width:250px;" ></td>
							</tr>
							<tr>
								<td><select name="product_size"  placeholder="Size" style="width:250px;"  required> 
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
								<td><input type="text" name="brand" placeholder="Brand Name	" style="width:250px;" ></td>
							</tr>
						
							<tr>
								<td><input type="hidden" name="category" value="feature"></td>	
							</tr>
							<tr>
							<td><input class="btn btn-success" type="submit" name="edit" value="Save"></td></tr>
						</table>
						
			
			
				
					</form>
					</div>	          

		