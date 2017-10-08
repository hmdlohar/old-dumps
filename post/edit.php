<?php
header("Location: now.php");
$data = $_POST['data'];

$open = fopen("test1.php", "w+");
fwrite($open,$data);
fclose($open);
echo "posted";
?>
