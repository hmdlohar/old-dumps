<?php


$open = fopen("clicked.html", "r+");
$value = fgets($open);
$close = fclose($open);

$value++;
$open = fopen("clicked.html", "w+");
fwrite($open,$value);
fclose($open);
echo "hit:{$value}";
?>