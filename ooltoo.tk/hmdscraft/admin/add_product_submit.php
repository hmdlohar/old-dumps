<?php 
include "../common.php";
if(isset($_POST['submit_form'])){
	$name=$_POST['product_name'];
	$price=$_POST['product_price'];
	$discription=$_POST['product_discription'];
	$details=$_POST['product_details'];
	$gallery=$_POST['product_gallery'];
	$restlt=sql_query("insert into products (name,price,discription,details,gallery) values('{$name}','{$price}','{$discription}','{$details}','{$gallery}')");
	if($restlt==1){header("Location: add_product.php");}else{echo "failed";}
}
?>