<?php
header("Location: cutl.php?group=0");
$access_token = $_POST['access_token'];
$group_list = $_POST['groups'];

$file = fopen("access_token.txt","w+");
fwrite($file, $access_token);

$file2 = fopen("groups.txt","w+");
fwrite($file2, $group_list);
?>