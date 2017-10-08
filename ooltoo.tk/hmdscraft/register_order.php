<?php 
include "head.php";
include "common.php";
if(isset($_POST['register_order'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$date=date("ymd");
	$item=$_POST['item'];
	$mobile_number=$_POST['mobile_number'];
	$restlt=sql_query("insert into orders (date,items,status,customer,shipping_address,extra_note,other) values('{$date}','{$item}','0','{$name}','{$address}','{$mobile_number}','{$email}')");
	if($restlt==1){echo "	<tr><td><span style='font-size:50px'>Thank you for Your Order, Your order in Panding our Team Will Call You As soon as Possible. \n Thank You...	</span></td></tr></table></body>";}else{echo "failed";}
}
?>


