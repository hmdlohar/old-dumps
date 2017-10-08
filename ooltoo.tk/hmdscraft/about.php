<?php 
include "head.php";
include "common.php";
?>

	<tr><td>
		<div class=about_us>
			<span>
				Welcome You all to our website where we sell our hardwork. We Basically make Crochet Handicraft Items like Purse,key-Chain,Mobile Cover,Pouch and meny more from Crochet. We are Lohar Family the manager of this website is me Hamid Lohar and the artist who makes all Items is my sister Jamila Lohar. We have hopfully started this website to sell our crochet Handmade Items. We hope you will like our art and our hardwork. That't all i want to say for now with hope that we will meet again and again and make our relationship better and better and will be happyer.<br>
				Thats All For Now. 
				Take Care........
				
				<br><br>
				Any Suggestion or problem Contact Us: <span style="color:#795548;">hmdlohar@gmail.com</span>
			</span>
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
