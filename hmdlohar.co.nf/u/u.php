<?php require_once("maxUpload.class.php"); ?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Hamid File Uploader</title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
    $myUpload = new maxUpload(); 
    //$myUpload->setUploadLocation(getcwd().DIRECTORY_SEPARATOR);
    $myUpload->uploadFile();
?>
</body>   