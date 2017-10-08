<html>
<form action="<?php $_PHP_SELF ?>" method="post">
Name:-<input type=text name=name><br>
Link:-<input type=text name=link><br>
Perent:-<input type=text name=perent value=home><br>
<input type=submit>

<?php
include '../files/db.php';
if (isset($_POST['name'])) {
	
$name = $_POST['name'];
$link = $_POST['link'];
$perent = $_POST['perent'];
$sql = "INSERT INTO mm".
       "(name,link,perent) ".
       "VALUES ".
       "('$name','$link','$perent')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";

}

?>
