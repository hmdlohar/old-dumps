

<?php
echo "<script type=text/javascript>
window.location = 'done.php';
</script>";


$number = $_POST['number'];
$sim = $_POST['sim'];
$state = $_POST['state'];
$link2 = "sdflh";
$test = "<table><tr><td>{$number}</td><td>{$sim}</td><td>{$state}</td></tr></table>";

$myFile = "log.html";
$fh = fopen($myFile, 'a');
fwrite($fh, $test);









?>