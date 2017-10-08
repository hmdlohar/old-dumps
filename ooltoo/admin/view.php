<?php
$open = fopen("../ver.txt", "r+");
$value = fgets($open);
$close = fclose($open);
echo $value;

?>