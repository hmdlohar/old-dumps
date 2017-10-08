<?php
header('Location: index.php');
setcookie('userLoged', "", time() + (86400 * 30), "/");

?>