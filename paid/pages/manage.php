<span id=page_header>Manage Facebook, Youtube, Tweeter Account.</span><br><br>
<p id=para>
Here you can manage your social media account. ex. Facebook pages, Tweeter Account, Youtube Chanel. You can Add Social media account by clicking on Add New Account.
</p><br>
<p class=button style="width:250px;" onclick="addpage()"> &nbsp;Add New Account</p> 
<hr>
<p id=page_header>Your Accounts:</p>
<center><img src="img/loading.gif" id=loading style="display:none"></center>
<tasble width=250px id=table_manage border=0 cellspacing=5 cellpadding=>
	<div id=manage_table1>
<span class=ac_type>Type</span><span class=ac_name>Name</span><span class=ac_link>Account link</span><span class=ac_point>Points</span><span class=ac_total>Total</span><span class=ac_status>Status</span><span class=ac_action>  </span>


</div>
<?php
$loged = isLoged();
if ($loged == 0){
	header("Location: {$site}/login.php");
	}
	else{
$usernow = $_COOKIE['userLoged'];

}
if ($loged == 2){
	header("Location: {$url}/?view=confirm_email&list=confirm_email");
	}
$ind=0;
$sql = "SELECT * FROM pages where userid ='$usernow'";
	mysql_select_db( $dbname );
	$retval = mysql_query( $sql, $conn );
	while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$type2 = type_name($row['type']);
		$type = $row['type'];
		$points = $row['points'];
		$link_id=$row['link_id'];
		$states=$row['states'];
		if($states==1){$states="Running"; $action="pause";}else{$states="Paused"; $action="resume";}
		$ind++;
		$total_likes=total_likes($link_id,$type);
		echo "<div id=manage_table><span class=ac_type>{$type2} </span><span class=ac_name> {$name}</span><span class=ac_link>{$link}</span><span class=ac_point><span id=ac_point_inner>{$points}</span> &nbsp;<img id=manage_edit title=Edit src=img/edit.png width=17 height=17 onclick=ac_point()><img id=manage_save src=img/save.png width=17 height=17></span><span class=ac_total>{$total_likes}</span><span class=ac_status>{$states}</span><span id=action style='display:inline-block' class=ac_action><a id=pause><img src=img/{$action}.png height=17 width=17 title='{$action}' onclick=page_action('$action','$link_id','$type')></a></span><span class=ac_remove><a id=remove><img title='Remove' src=img/stop.png height=17 width=17 onclick=page_action2('remove','$link_id','$type')></a></span></div>";
	}
?>

</table>
<div id=wapper style="display:none"> </div>
<div id=middle style="display:none"><center>
<p id=para_title>Add Account</p>
<br>
<form action=pages/add_page.php>
<table><tr><td>Select Account</td><td>
<select name=page_type>
<?php
		if ($view == "home"){
			$sql_left = "SELECT * FROM list where link != 'home' ORDER BY id  asc LIMIT 30";
			}else{
		$sql_left = "SELECT * FROM list where mm='earn'&& link != 'home' ORDER BY id  asc LIMIT 30";
	}
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_left, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$main_containt = $row['other'];
		if ($mm == 'xxxpics'){
echo "<a href={$url}?list={$link}&view={$mm}>{$name} (18+)</a>";
			}
			else{
		echo "<option value={$link}>{$name}</option>";
	}		}
		?>
</select></td></tr>
<tr>
<td>Name:- </td><td> <input type=text name=page_name></td>
</tr>
<tr>
<td>Account Link:- </td><td> <input type=text name=page_name value="put yout link here"></td>
</tr>
<tr>
<td>Money Per Like/Follow:- </td><td> <select name=points>
<?php 
for ($i=0.05;$i<=0.20;$i= $i+0.01){
echo "<option value={$i}>Rs.{$i}</option>";
	}
?>
</select></td>
</tr>
<tr>
<td></td><td> <input type=submit value="Add Account"></td>
</tr>
</table>
</center></div>
</form>
<script type=text/javascript>
var ac_point_inner='<select name="points" id="ac_point_inner"><option value="0.05">Rs.0.05</option><option value="0.06">Rs.0.06</option><option value="0.07">Rs.0.07</option><option value="0.08">Rs.0.08</option><option value="0.09">Rs.0.09</option><option value="0.1">Rs.0.1</option><option value="0.11">Rs.0.11</option><option value="0.12">Rs.0.12</option><option value="0.13">Rs.0.13</option><option value="0.14">Rs.0.14</option><option value="0.15">Rs.0.15</option><option value="0.16">Rs.0.16</option><option value="0.17">Rs.0.17</option><option value="0.18">Rs.0.18</option><option value="0.19">Rs.0.19</option></select>';
function addpage(){
document.location.assign("?view=manage&list=add_account");
}
function page_action(action,link_id,type){
	document.getElementById('loading').style.display="block";
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

	if(data=="sucess"){
	document.location.reload();
	}
	else{
		alert("unknowne Error");
		}

    }
  }
xmlhttp.open("GET","pages/page_action.php?action="+action+"&link_id="+link_id+"&type="+type,true);
xmlhttp.send();
}
function page_action2(action,link_id){
	var prompt=confirm("Do You Really Want To DELETE This Page?\n If Yes Then Press 'OK'.");
	if(prompt==true){
		page_action(action,link_id);
		}else{
		stop();	
		}
		
}
function ac_point(){
	alert("Sorry This Function Is Not Running Now \nThis Function Will Be Available Soon");
}

</script>