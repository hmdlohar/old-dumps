<table border=1>
<tr> 
<th width=500> no </th>
<th width=5000px> fname </th>
<th width=5000px> lname </th>
<th width=5000px> uname </th>
<th width=5000px> pass </th>
<th width=5000px> email </th>
<th width=5000px> country </th>
<th width=5000px> gender </th>
<th width=5000px> active </th>
<th width=5000px> date </th>
<th width=5000px> time </th>
<th width=5000px> credits </th>
<th width=5000px> fbid </th>
<th width=5000px> other </th>
<th width=500px> money </th>
</tr>
<?php
if (!isset($_GET['view'])){
	$view="table";
	}
	else{
		$view = $_GET['view'];
		}

include "../files/db.php";
include 'head.php';
if ($view=="table"){


$no = "1";
$sql_user = "SELECT * FROM user ORDER BY id DESC";
mysql_select_db($dbname);
$retval = mysql_query($sql_user, $conn);
$no_page_num = mysql_num_rows($retval);
while(($row = mysql_fetch_array($retval, MYSQL_ASSOC)) && ($no <= $no_page_num)){
			
$id = $row['id'];
$fname = $row['fname'];
$lname = $row['lname'];
$uname = $row['uname'];
$pass = $row['pass'];
$email = $row['email'];
$country = $row['country'];
$gender = $row['gender'];
$active = $row['active'];
$date = $row['date'];
$time = $row['time'];
$credits = $row['credits'];
$fbid = $row['fbid'];
$other = $row['other'];
$money = $row['money'];

echo "<tr> 
<td width=500px> {$no} </td>

<td width=500px> {$fname} </td>
<td width=500px> {$lname} </td>
<td width=500px> <a href=user.php?view=id&id={$uname}>{$uname}</a> </td>
<td width=500px> {$pass} </td>
<td width=500px> {$email} </td>
<td width=500px> {$country} </td>
<td width=500px> {$gender} </td>
<td width=500px> {$active} </td>
<td width=500px> {$date} </td>
<td width=500px> {$time} </td>
<td width=500px> {$credits} </td>
<td width=500px> {$fbid} </td>
<td width=500px> {$other} </td>
<td width=500px> {$money} </td>
</tr>";
			
$no++;	}
echo "</table>";
}

if ($view =='id'){
	$uid = $_GET['id'];
	$sql_user = "SELECT * FROM user WHERE uname='$uid'";
mysql_select_db($dbname);
$retval = mysql_query($sql_user, $conn);
$no_page_num = mysql_num_rows($retval);
while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
	$id = $row['id'];
$fname = $row['fname'];
$lname = $row['lname'];
$uname = $row['uname'];
$pass = $row['pass'];
$email = $row['email'];
$country = $row['country'];
$gender = $row['gender'];
$active = $row['active'];
$date = $row['date'];
$time = $row['time'];
$credits = $row['credits'];
$fbid = $row['fbid'];
$other = $row['other'];
$money = $row['money'];

echo "<tr> 
<td width=500px> {$id} </td>
<td width=500px> {$fname} </td>
<td width=500px> {$lname} </td>
<td width=500px> {$uname} </td>
<td width=500px> {$pass} </td>
<td width=500px> {$email} </td>
<td width=500px> {$country} </td>
<td width=500px> {$gender} </td>
<td width=500px> {$active} </td>
<td width=500px> {$date} </td>
<td width=500px> {$time} </td>
<td width=500px> {$credits} </td>
<td width=500px> {$fbid} </td>
<td width=500px> {$other} </td>
<td width=500px> {$money} </td>
</tr>";
	
	}
}
?>
