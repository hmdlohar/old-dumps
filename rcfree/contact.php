<?php include 'head.php'; ?>
<div id=body>
<p id=title_para>Contact Us:</p>

<?php
if (isset($_POST['name'])){
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

$sql = "INSERT INTO contact (name,email,mobile,message) VALUES ('$name','$email','$mobile','$message')";
mysql_select_db($dbname);
mysql_query($sql,$conn);

	}

if (isset($_GET['sucess'])){
echo "<p id=para style='color:red'>
Thank You We recived your message We will reply You as soon as possible. <a href={$url}>Back To Home</a>
</p>";} ?>

<?php  if (!isset($_GET['sucess'])) { ?>

<p id=para>
Fill Up the form bellow and submit it. We will reply You as soon as possible.
</p>
<form action="contact.php?sucess=1" method=POST>
<table>
<tr><td>Enter Your Name:-</td><td><input type=text name=name></td></tr>
<tr><td>Enter  Email Address:-</td><td><input type=text name=email></td></tr>
<tr><td>Enter Your Mobile Number:-</td><td><input type=text name=mobile></td></tr>
<tr><td>Enter Message:-</td><td><textarea name=message cols=50 rows=10></textarea></td></tr>
<tr><td></td><td><input type=submit></td></tr>

</table>
</form>


</div>

<?php
}

include 'foot.php'; ?>