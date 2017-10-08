<?php
include "common.php";
$count=0;
$file = fopen("15k.txt","r");
$datelast=date("ymdhis");
while(! feof($file))
  {
  $email=fgets($file);
  $email2=explode(":",$email);
  $email=$email2[0];
  sql_query("insert into usa4 (email,datelast,status)values('{$email}',{$datelast},0)");
  $count++;
  //if($count>=10){break;}
  }

fclose($file);
?>