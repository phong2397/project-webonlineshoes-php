
<div>	



<?php
  include("../dbconn.php");
  $id = $_GET['id'];
  ?>
					<form method="post"  >
					<table>
					<tr><td><input type="hidden" name="pid" autocomplete="off" class="input-large number" id="text" value="<?php echo $id; ?>" /></td></tr>
							<tr>
								<td><h4 >Are you sure want to delete</h4></td>
							</tr>
							
							<td><input class="btn btn-success" type="submit" name="delete" value="Okay"></td></tr>
						</table>
						
			
			
				
					</form>
					</div>	          

		