<html>
<form action="<?php $_PHP_SELF ?>" method="post">
Name:-<input type=text name=name><br>
Link:-<input type=text name=link><br>
Other:-<input type=text name=line><br>
<input type=submit>




<?php
include 'db.php';
if (isset($_POST['name'],$_POST['link'],$_POST['line'])) {
$name = $_POST['name'];
$link = $_POST['link'];
$line = $_POST['line'];

$sql = "INSERT INTO menu".
       "(menu_id,menu_name,menu_link,menu_hit,menu_other) ".
       "VALUES ".
       "('','$name','$link','$line','')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";

$sql = "CREATE TABLE $link( ".
       "$link_id INT NOT NULL AUTO_INCREMENT, ".
       "$link_name TEXT NOT NULL, ".
	"$link_hit TEXT NOT NULL, ".
	"$link_link TEXT NOT NULL, ".
	"$link_line TEXT NOT NULL, ".
       "$link_other TEXT NOT NULL, ".
       "PRIMARY KEY ( .$link._id )); ";
mysql_select_db( $dbname );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
}
else {


}

?>
