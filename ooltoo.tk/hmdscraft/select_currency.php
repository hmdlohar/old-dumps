<?php 
setcookie("currency","INR");
setcookie("rate","1");
header("Location: index.php");
if(isset($_GET['currency'])){
	$cur=$_GET['currency'];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://api.fixer.io/latest?callback=?&base=INR',
));
$resp = curl_exec($curl);

$curs=json_decode($resp);
 $curs->rates->INR=1;
setcookie("currency",$cur);
setcookie("rate",$curs->rates->$cur);
echo "helo";
}
include "currency.php";
include "head.php";
?>

	<tr><td>
			<table class=main_contain width=100%>
				<tr><td>
					<div style="color:green;font-size:30px;">Select Your Currency of your Country</div>
				<div style="width:50%;border:0px solid green">

					<?php 				
					for($x=0;$x<sizeof($cur);$x++){
						echo "<div class=currency_list onclick=setCurrency('{$cur[$x][0]}','{$cur[$x][2]}')>
					{$cur[$x][1]} <span style='float:right'>{$cur[$x][0]}</span>
					</div>";
					}
					?>
					


				</div>
				</td></tr>
			</table>
	</td></tr>
</table>
</body>

<script>
function setCurrency(cur,rate){
	   document.cookie="currency="+cur;
   document.cookie="rate="+rate;
   add_hits(cur);
}
function add_hits(cur){
//alert(id);
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
   document.location.assign("index.php");
   
    }
  }
xmlhttp.open("GET","edit.php?add_hits="+cur,true);
xmlhttp.send();
}
</script>