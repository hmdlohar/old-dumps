<?php
include "common.php";
if(isset($_POST["editNoteId"])){
	$noteid=$_POST["editNoteId"];
	$noteData=htmlspecialchars($_POST["noteData"], ENT_QUOTES, "ISO-8859-1");
	$result=sql_query("update notes set data='{$noteData}' where id={$noteid}");
	if($result==1){
		echo "sucess";
		}
	else{echo "error";}
}

?>