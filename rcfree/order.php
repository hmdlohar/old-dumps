<?php include 'head.php'; ?>
<div id=body>
<p id=title_para>Contact Us:</p>

<?php
if (isset($_POST['name'])){
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$sql = "INSERT INTO buy (name,email,mobile,address,other) VALUES ('$name','$email','$mobile','$address','$subject')";
mysql_select_db($dbname);
mysql_query($sql,$conn);

	}

if (isset($_GET['sucess'])){
echo "<p id=para style='color:red'>
Thank You We recived your order We will contact You as soon as possible. <a href={$url}>Back To Home</a>
</p>";} ?>

<?php  if (!isset($_GET['sucess'])) { ?>

<p id=para>
Fill The Form Bellow to order DVD.
</p>
<form action="order.php?sucess=1" method=POST>
<table>
<tr><td>Select Subject:-</td><td><select name=subject><option value=mcs21>MCS-21(Rs.150)</option></select></td></tr>
<tr><td>Enter Your Name:-</td><td><input type=text name=name></td></tr>
<tr><td>Enter  Email Address:-</td><td><input type=text name=email></td></tr>
<tr><td>Enter Your Mobile Number:-</td><td><input type=text name=mobile></td></tr>
<tr><td>Enter Full Address:-</td><td><textarea name=address cols=50 rows=10></textarea></td></tr>
<tr><td></td><td><input type=submit></td></tr>

</table>
</form>


</div>

<?php
}

include 'foot.php'; ?>