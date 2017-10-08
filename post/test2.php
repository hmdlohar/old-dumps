<?php
$file = fopen("access_token.txt","r+");
$file2 = fopen("groups.txt","r+");
$group_list = fgets($file2);
$access_token = fgets($file);
$groups =explode('","', $group_list);
echo $group_list;
print_r($array);


?>