<form action="<?php $PHP_SELF ?>" method="POST">
Name:<input type=text name=name>
Link:<input type=text name=link>
<input type=submit name=enter>
</form>
<form action="<?php $PHP_SELF ?>" method="POST">
Name:<input type=text name=name>
Link:<input type=text name=link>
<input type=submit name=phpenter>
</form>

<?php
if (isset($_POST['enter'])){
$name = $_POST['name'];
$link = $_POST['link'];

$contain = "<script type='text/javascript'>
window.location = '{$link}'; </script>";

mkdir($name);
$file = fopen("{$name}/index.php","w+");
fwrite($file, $contain);
}

if (isset($_POST['phpenter'])){
$name = $_POST['name'];
$link = $_POST['link'];

$contain = "<script type='text/javascript'>
window.location = '{$link}'; </script>";


$file = fopen("{$name}.php","w+");
fwrite($file, $contain);
}
?>

