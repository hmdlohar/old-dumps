<?php 
include "common.php";
include "head.php";
if($_GET['product_id']){
	$product_id=$_GET['product_id'];}
	else{
	$product_id=1;	
	}

?>
	<tr><td>
		<div class=order_form>
			<form action='register_order.php' method=POST>
			<table>
				<input type=hidden name=item value="<?php echo $product_id; ?>">
			<tr><td><span class=form_fields>Name</span></td><td><input type=text name=name></td></tr>
			<tr><td><span class=form_fields>Email</span></td><td><input type=text name=email></td></tr>
			<tr><td><span class=form_fields>Mobile Number</span></td><td><input type=text name=mobile_number></td></tr>
			<tr><td><span class=form_fields>Address</span></td><td><textarea cols=50 rows=5 name=address></textarea></td></tr>
			<tr><td><span class=form_fields></span></td><td><input type=submit name=register_order></td></tr>
			</table>
			</form>
		</div>
	</td></tr>
</table>
</body>
<?php
$uri =  $_SERVER['REQUEST_URI'];
$uri=uri($uri);
$num_uri=check_uri($uri,'hit');
if($num_uri==0){
	insert_uri($uri,'hit');
	}else{
		hit_uri($uri,'hit');
		}
//echo get_uri($uri,'hit');
 ?>
