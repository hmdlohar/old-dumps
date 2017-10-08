<?php
include 'db.php';
if (isset($_GET['view'])) {
$view = $_GET['view'];
}
else	{
$view = 'photos';
}

$sql = "SELECT id,name,link
	FROM menu";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo "<a href=?view={$row['link']}> {$row['name']} </a> --";
}         


?>

<html>
<form action="<?php $_PHP_SELF ?>" method="post">
Name:-<input type=text name=name><br>
Link:-<input type=text name=link><br>
Line:-<input type=text name=line><br>
<input type=submit>




<?php







if (isset($_POST['name'],$_POST['link'],$_POST['line'])) {
$name = $_POST['name'];
$link = $_POST['link'];
$line = $_POST['line'];

$sql = "INSERT INTO $view ".
       "(id,name,link,line,other) ".
       "VALUES ".
       "('','$name','$link','$line','')";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";

mkdir("pics/$link");
$my_file = "pics/$link.php";
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file
$data = "
<?php
include 'site.php';
?>
<img src='pics/$link/nk1.jpg' heigt='600' width='400'><br>
<img src='pics/$link/nk2.jpg' heigt='600' width='400'><br>
<img src='pics/$link/nk3.jpg' heigt='600' width='400'><br>
<img src='pics/$link/nk4.jpg' heigt='600' width='400'><br>
<img src='pics/$link/nk5.jpg' heigt='600' width='400'><br>
<img src='pics/$link/nk6.jpg' heigt='600' width='400'><br>
<img src='pics/$link/nk7.jpg' heigt='600' width='400'><br>";
fwrite($handle, $data);
}
else {
echo "<table>";
$sql = "SELECT id,name,link,line,other
	FROM $view";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo "<tr><td> {$row['id']} </td> <td> {$row['name']} </td></tr>";
}
}

?>
