<?php 
if(!isset($_COOKIE['currency'])){
	header("Location: select_currency.php");
}
include "head.php";

?>
	<tr><td>
			<table class=main_contain>
				<tr><td>
					
				<div class=product_list>
					<?php 
					include "common.php";
					$retval=sql_query("select id,name,price,gallery from products order by id desc limit 30");
					while($row=mysql_fetch_array($retval)){
						$id=$row['id'];
						$name=$row['name'];
						$price=$row['price'];
						$gallery=$row['gallery'];
						$gal2=explode("-hmd-",$gallery);
						$finalPrice=round($price*$_COOKIE['rate'], 2);
						
						echo "<a href=product.php?product_id={$id}>
					<div class=product_item>
						<img src='gallery/{$gal2[1]}' class=product_item_img>
						<div class=product_item_name>{$name}</div>
						<div class=product_item_price>{$_COOKIE['currency']}. {$finalPrice}/-</div>
						<div class=product_item_buy>Buy Now</div>
					</div>
					</a>";
					}
					?>
					

				</div>
				</td></tr>
			</table>
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

