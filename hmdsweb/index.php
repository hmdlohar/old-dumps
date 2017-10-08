

<?php
include 'head.php';
include 'left.php';

?>

<div id=center>
<p id=center_title></p>
<?php include "pages/{$page}.php"; ?>
</div>


<?php
$hmd=fopen("foot.php","r+");
$data=fgets($hmd);

include 'foot.php';
?>
