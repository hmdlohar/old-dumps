<?php 
include "head.php";
include "common.php";
?>

	<tr><td>
		<div class=about_us>
			<span>
				Dear Users, You can contact us for any resone, Bellow  is our Contact Details: <br><br>
				Name: <span class="contact_details_2" style="color:#795548;">Hamid Lohar</span> <br>
				Address: <span class="contact_details_2" style="color:#795548;">Aman Nagar, Khari Nadi Road, Bhuj-Kutch. 370001.</span> <br>
				Mobile Number:<span class="contact_details_2" style="color:#795548;">+919408518820</span> <br>
				Whatsapp Number: <span class="contact_details_2" style="color:#795548;">+919408518820</span> <br>
				Email: <span class="contact_details_2" style="color:#795548;">hmdlohar@gmail.com</span> <br>
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
