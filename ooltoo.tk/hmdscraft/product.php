<?php 
if(!isset($_COOKIE['currency'])){
	header("Location: select_currency.php");
}
include "common.php";
include "head.php";
if($_GET['product_id']){
	$product_id=$_GET['product_id'];}
	else{
	$product_id=1;	
	}

?>

	<tr><td>
			<center>
			
	
					<?php 

					$retval=sql_query("select * from products where id={$product_id}");
					while($row=mysql_fetch_array($retval)){
						$id=$row['id'];
						$name=$row['name'];
						$price=$row['price'];
						$gallery=$row['gallery'];
						$discription=$row['discription'];
						$details=$row['details'];
						$gal2=explode("-hmd-",$gallery);
						$details2=explode("-hmd-",$details);
						$finalPrice=round($price*$_COOKIE['rate'], 2);
						
						echo "
					<div class=product_item_page >
					<div class=product_item_name>{$name}</div>
					<hr>
						<img src='gallery/{$gal2[1]}' class=product_item_img>
						<hr>
					<div class=product_item_discription>{$discription}</div>
					<hr><div class=gallery>";
					for($x=1;$x<sizeof($gal2);$x++){
						echo "<img src='gallery/{$gal2[$x]}' width=200 style='margin:10px'>";
					}
					
					echo "</div>
					<div style='font-size:24px;color:green'>
					<hr>Details
					<table border=1 cellspacing=0 width=100% >";
					for($x=1;$x<sizeof($details2);$x++){
						$dt=explode(":",$details2[$x]);
						echo "<tr><td align=center>{$dt[0]}</td><td>{$dt[1]}</td></tr>";
					}
					$shipIndia=round(150*$_COOKIE['rate'], 2);
					$shipPost=round(500*$_COOKIE['rate'], 2);
					$shipCurrier=round(1800*$_COOKIE['rate'], 2);
					echo "</div>
					</table>
					<hr>Shipping Charges
					<center>
					<table border=1 cellspacing=0 width=60% >
					<tr><td>Withing India</td><td>{$shipIndia}</td></tr>
					<tr><td>Out Of India 30 Days Delivery</td><td>{$shipPost}</td></tr>
					<tr><td>Out Of India 5-8 Days Delivery</td><td>{$shipCurrier}</td></tr>
					";
			
					echo "</div>
					</table></center>
						<div class=product_item_price>{$_COOKIE['currency']}. {$finalPrice}/-</div>
						
						
						<a href='buy_now.php?product_id={$product_id}'>
						<div class=product_item_buy>Buy Now</div>
						</a>
					</div>
					</a>";
					}
					?>
					

		
	
			</center>
	</td></tr>
</table>
</body>
