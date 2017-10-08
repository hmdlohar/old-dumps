<?php
$name = $_GET['name'];
$link = $_GET['link'];
$other = $_GET['other'];
$count = $_GET['count'];


?>

<html>
<form action="<?php $_PHP_SELF ?>" method="post">
<?php
echo "
Name:-<input type=text name=name value={$name}><br>
Link:-<input type=text name=link value={$link}><br>
Other:-<input type=text name=other value={$other}><br>
Count:-<input type=text name=count value={$count}><br>
<input type=hidden value=0 name=hit>";
?>
<input type=submit>




<?php
include '../files/db.php';
if (isset($_POST['name'],$_POST['link'],$_POST['hit'],$_POST['other'],$_POST['count'])) {
$name = $_POST['name'];
$link = $_POST['link'];
$hit = $_POST['hit'];
$other = $_POST['other'];
$count = $_POST['count'];


$sql = "INSERT INTO xxxpics".
       "(id,name,link,hit,other,count) ".
       "VALUES ".
       "('','$name','$link','$hit','$other','$count')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
}
?>
