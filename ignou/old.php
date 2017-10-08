<?php

if (isset($_POST['enrol'])){
	$enrol = $_POST['enrol'];
$file = fopen("old.txt","w+");
fwrite($file, $enrol);
	
	}
$file = fopen("old.txt","r+");
$enrolnow = fgets($file);
echo $enrolnow;
?>

<form action="<?php $_PHP_SELF ?>" method=post>
<input type=text name=enrol value="<?php echo $enrolnow ?>">
<input type=submit>

</form>