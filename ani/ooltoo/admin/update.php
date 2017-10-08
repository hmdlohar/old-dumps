<a href="update.php?update=http://u.laaptu.com/login1.action?rid=OyT7FBOnP0PlTaOT/VcJGe5GfDB9iNOR9VoLNz0uwSE="> 9016183490 </a>
<a href="update.php?update=http://u.laaptu.com/login1.action?rid=7eKSR06vFYbRUi2omD7wIeTVwJG4jGqY5w59jNFa7Qo="> 8980254480 </a>
<a href="update.php?update=http://laaptu.co.in/login1.action?rid=vxNJOPWTgnYmHRB2sNyjBEvF8VONvZhq9VoLNz0uwSE="> 9408518820 </a>


<?php

$open = fopen("../ver.txt", "r+");
$value = fgets($open);
$close = fclose($open);

if (isset($_GET['update'])) {
$update = $_GET['update'];
$open = fopen("../ver.txt", "w+");
fwrite($open,$update);
fclose($open);
}
echo "hit:{$value}";
?>