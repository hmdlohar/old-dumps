<?php
$loged = isLoged();
if ($loged == 0){
	header("Location: {$site}/login.php");
	}
if ($loged == 2){
	header("Location: {$url}/?view=confirm_email&list=confirm_email");
	}
if($profile['money']<10){
	$display1="none"; $display2="block";
	}else{$display1="block";$display2="none";}
if(isset($_GET['accepted'])){$recharge_request="block";}else{$recharge_request="none";}
?>
<span id=page_header>Free Recharge</span><br><br>


<span id=para_title>How To Get Free Recharge? </span><br><br>
<p id=para>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paid2Like Give you Free Mobile Recharge For liking or subcribing at Facebook, Youtube or Tweeter. When you like or subcribe any page or profile you get money. You can use money for geting Free Recharge. You must have minimum <span style="color:blue">Rs.10 </span>to get free recharge.
</p>
<br>
<p id=red style="display:<?php echo $recharge_request; ?>">Your Request For Recharge have been accepted you will get recharge within 24 hour.</p>
<div id=do_recarge style="display:<?php echo $display1; ?>">
<span id=para_title>Recharge Now:- </span><br>

<br>
		<form action="pages/do_recharge.php" method="POST">
			<input type=hidden name=mo_username value="<?php echo $profile['username']; ?>">
		<table cellspacing=10px>
		<tr><td width=250px>Enter Mobile Number:</td><td><input type=text id=mo_number name=mo_number></td></tr>
		<tr><td>Enter Recharge Amount:</td><td><input type=text id=mo_amount name=mo_amount value=<?php echo $profile['money']; ?>> Minimum Rs.10/-</td></tr>
		<tr><td>Select Operator:</td><td> 
<select name="mo_sim">
<option value="Airtel">Airtel</option>
<option value="Airtel">Aircel</option>
<option value="BSNL">BSNL</option>
<option value="Idea">Idea</option>
<option value="Loop">Loop Mobile</option>
<option value="MTNL">MTNL</option>
<option value="MTS">MTS</option>
<option value="Reliance">Reliance CDMA</option>
<option value="Reliance">Reliance GSM</option>
<option value="Tata">Tata Docomo</option>
<option value="Indicom">Tata Indicom</option>
<option value="Virgin">Virgin CDMA</option>
<option value="Virgin">Virgin GSM</option>
<option value="Vodafone">Vodafone</option>
<option value="Uninor">Uninor</option>
<option value="Videocon">Videocon</option>
</select>
</td></tr>
<tr><td>Select State:</td><td> 
<select name="mo_state">
<option value="Andhra">Andhra Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar"> &amp; Jharkhand</option>
<option value="Chennai">Chennai</option>
<option value="Delhi">Delhi &amp; NCR</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal">Himachal Pradesh</option>
<option value="Jammu">Jammu &amp; Kashmir</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Kolkata">Kolkata</option>
<option value="Maharashtra">Maharashtra &amp; Goa ( Except Mumbai)</option>
<option value="Mp">Mp &amp; Chattisgarh</option>
<option value="Mumbai">Mumbai</option>
<option value="North">North East</option>
<option value="Orissa">Orissa</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Tamilnadu">Tamilnadu</option>
<option value="UP">UP (EAST)</option>
<option value="UPW">UP(WEST) &amp; Uttarakhand</option>
<option value="Bengal">West Bengal</option>
</select>

</td></tr>
<tr><td></td><td><input type=button name=mo_button value="Request Recharge" onclick=do_recharge()><input type=submit name=mo_submit value="Request Recharge" style="display:none" id=mo_submit disabled> </td></tr>
		</table>
		</form>
</div>		
<div id=display2 style="display:<?php echo $display2; ?>">
<br>
<center><span style="color:green;font-size:23px;">You don't have enougth money to get recharge</span></center>
<br>
<center><span style="color:green;font-size:23px;"><a href=?view=earn&list=earn>Earn Money</a></span></center>
</div>
<script type="text/javascript">
var money="<?php echo $profile['money']; ?>";
function do_recharge(){
	var number=document.getElementById('mo_number');
	var amount=document.getElementById('mo_amount');
	var submit=document.getElementById('mo_submit');
	if(number.value.length!=10){alert("Please Enter 10 digit number."); stop();}
	if(amount.value>money){if(amount.value<10){alert("Minimum amount must be Rs.10.");}else{alert("You Dont have Rs."+amount.value+"in your account.");}}
	else{submit.disabled=false; submit.click(); }
}
</script>