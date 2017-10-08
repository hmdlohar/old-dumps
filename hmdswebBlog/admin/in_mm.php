<html>
<form action="<?php $_PHP_SELF ?>" method="post">
Name:-<input type=text name=name><br>
Link:-<input type=text name=link><br>
Other:-<input type=text name=line><br>
<input type=submit>

<?php
include '../files/db.php';
if (isset($_POST['name'])) {
$name = $_POST['name'];
$link = $_POST['link'];

$sql = "INSERT INTO mm".
       "(name,link) ".
       "VALUES ".
       "('$name','$link')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";

}

?>
