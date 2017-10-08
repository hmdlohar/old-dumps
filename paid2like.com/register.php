<?php
include 'files/db.php';
if (isset($_POST['username'])){	
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$country = $_POST['country'];
	$repass = $_POST['repassword'];
	$credits = "0";
	$money = "0";
	$fbid = "0";
	$active = "1";
	$date = date("d-m-Y");
	$time = date("h-i");
	$sql_count = "SELECT * FROM user WHERE uname = '$username'";
	mysql_select_db($dbname);
	$query_count = mysql_query($sql_count , $conn);
	$username_count = mysql_num_rows($query_count);
	if ($username_count == 0) {
	$sql= 	"INSERT INTO user".
			"(id,fname,lname,uname,pass,gender,country,email,credits,active,date,time,money,fbid) ".
			"VALUES ".
			"('','$fname','$lname','$username','$pass','$gender','$country','$email','$credits','$active','$date','$time','$money','$fbid')";
			mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{
	session_start();
	$_SESSION['username'] = $username;
	header("Location: index.php");
}
	}


	if ($username == 1){
	echo "Username not avelable";
	}

}
?>
<?php
include 'head.php';
?>
<script type="text/javascript">
function checkForm() {
	if (document.myfrm.fname.value == ""){
		alert("First Name can not be empty");
		document.myfrm.fname.focus() ;
		return false;
		}
	if (document.myfrm.lname.value == ""){
		alert("Last Name can not be empty");
		document.myfrm.lname.focus() ;
		return false;
		}
	var x = document.myfrm.email.value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Please enter Valude Email");
        document.myfrm.email.focus() ;
        return false;
    }
    if (document.myfrm.username.value == ""){
		alert("Username can not be empty");
		document.myfrm.username.focus() ;
		return false;
		}
	if (document.myfrm.password.value == ""){
		alert("Password can not be empty");
		document.myfrm.password.focus() ;
		return false;
		}
	if (document.myfrm.repassword.value == ""){
		alert("Password can not be empty");
		document.myfrm.repassword.focus() ;
		return false;
		}
	var password = document.myfrm.password.value;
	var repassword = document.myfrm.repassword.value;
	if (password !== repassword) {
		alert("Both Password Not Match");
		document.myfrm.password.focus() ;
		return false;
		
		}
	
	
	}
</script>
	<div id=loginbox>
		<h2>
		Registeration Form
		</h2>
		<div id=login>
			
			<form action="register.php" method="POST" name="myfrm" onsubmit="return checkForm()">
		<div class=logindetailes>First Name:</div>
		<input class=logininput type=text name=fname>
		
		<div class=logindetailes>Last Name:</div>
		<input class=logininput type=text name=lname><br>
		
		<div class=logindetailes>Your Email:</div>
		<input class=logininput type=text name=email>
		<br>
		<div class=logindetailes>Select Gender:</div>
		<select name=gender>
			<option value=male> Male</option>
			<option value=female> Female</option>
		</select>
		
		<div class=logindetailes>Select Country:</div>
		<select name=country>
			<option value=india> India</option>
			<option value=pak> other</option>
		</select>
		
		<div class=logindetailes>Username:</div>
		<input class=logininput type=text name=username>
		
		<div class=logindetailes>Password:</div>
		<input class=logininput type=password name=password>
		
		<div class=logindetailes>Retype Password:</div>
		<input class=logininput type=password name=repassword>
		<br>
		
		<input class=logininput type=submit value="Sign Up">
			
			</form><br>
			
			<div id=forget_pass>
			<a href="login.php"> Hace Allready Account? Login Hear.</a>
			</div>
			</div>
	</div>
	
<?php
include 'foot.php';
$page = "register.php";
$sql_hitg = "SELECT * FROM mm WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query($sql_hitg,$conn);
while($row = mysql_fetch_array($retval)){
	$old_hit = $row['hit'];
	}
$new_hit = $old_hit+1;
$sql_hitp = "UPDATE mm SET hit='$new_hit' WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query($sql_hitp,$conn);
?>




