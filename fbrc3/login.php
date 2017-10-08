<?php
include 'head.php';
echo "<script type=text/javascript>
document.getElementById('nomatch').style.display=block;
</script>";
?>
<div id=center style="margin-left:20px;width:700px;">

<form action="panel/check_login.php" method=POST>
	<div id=form_area>
<div class=input_area><span id=form_left>Username:</span><input type=text class=from_input name=username></div>
<div class=input_area><span id=form_left>Password:</span><input type=password class=from_input name=password></div>
<div class=input_area><input type=submit id=form_submit value="Login" name=login></div>
<font color=red id=nomatch style="display:none">Wrong Password</font>
<font color=red id=notfound style="display:none">Username Not Found</font>
<font color=red id=unknown style="display:none">Unknowne Error</font>
<div class=input_area><a href="forgot.php" style="text-decoration:none;font-size:20px;color:#3A6969;margin-left:150px;">Forgot Password?</a></div>
</div>
</form>

</div>
<?php
include 'foot.php';
?>