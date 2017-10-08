



<?php
$message = $_GET['message'];
$access_token = $_GET['access_token'];
echo "<a href=https://graph.facebook.com/me/groups?fields=id,name&access_token={$access_token}> groups</a><br><br>";

?>
<textarea rows=10 cols=20>/feed',{message:'<?php echo"{$message}"; ?>',access_token:'<?php echo"{$access_token}"; ?>',},function(data,status){$('#states').text('Data:'+data+'\nStatus:'+status);});</textarea>

<form action"getd.php" method=GET>
link:<input type=text name=link><br>
message: <input type=text name=message value="<?php echo "{$message}"; ?>"><br>
access_token<input type=text name=access_token value="<?php echo "{$access_token}"; ?>"><br>
<input type=submit>


</form>
