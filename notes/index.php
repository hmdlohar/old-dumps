<link rel="stylesheet" type="text/css" href="style.css" />
<?php
include "common.php";
for($x=1;$x<=4;$x++){
	echo "<a href=?noteid={$x}>Temp{$x}</a>";
}
if(isset($_GET["noteid"])){
	$noteid=$_GET["noteid"];
}else{
	$noteid=1;
}
$retval=sql_query("select * from notes where id={$noteid}");
$row=mysql_fetch_array($retval);
echo "<br>";
$data=$row["data"];
$id=$row["id"];
$name=$row["name"];
echo "<span id=noteId>{$id}</span>-<span id=noteName>{$name}</span><br>";
echo "<textarea id=noteData cols=100 rows=30>{$data}</textarea><br><button onclick=edit_note()>Update</button>";

if(isset($_GET["createNotes"])){
	sql_query("insert into notes (id,name)values(1,'temp1'),(2,'temp1'),(3,'temp1'),(4,'temp1')");
}
?>
<script src=java.js></script>