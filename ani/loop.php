<?php



$name = $_GET['name'];
$sname = $_GET['sname'];
$pno = $_GET['pno'];

$no = 1;
while ($no <=$pno)
{




echo "
<img src=http://gals.kindgirls.com/1414/$name/{$sname}{$no}.jpg heigt='170' width='800'><br><br>  <br> <br>";
$no++;
}
echo "<title> {$name}</title>";

?>



