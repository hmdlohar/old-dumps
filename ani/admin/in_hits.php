<html>
<form action="<?php $_PHP_SELF ?>" method="post">
Name:-<input type=text name=name><br>
Link:-<input type=text name=link><br>
<input type=hidden name=hit value="0">

<input type=submit>




<?php
include '../files/db.php';
if (isset($_POST['name'],$_POST['link'])) {
$name = $_POST['name'];
$link = $_POST['link'];
$hit = $_POST['hit'];


$sql = "INSERT INTO hits".
       "(hit,name,link) ".
       "VALUES ".
       "('$hit','$name','$link')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
}
?>
