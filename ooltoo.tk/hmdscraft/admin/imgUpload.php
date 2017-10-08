<?php
$file_formats = array("jpg", "png", "gif", "bmp"); // Set File format
$filepath = "../gallery/";

if ($_POST['submitbtn']=="Upload") {
  $name = $_FILES['imagefile']['name'];
  $size = $_FILES['imagefile']['size'];

   if (strlen($name)) {
      $extension = substr($name, strrpos($name, '.')+1);
      if (in_array($extension, $file_formats)) { 
          if ($size < (2048 * 1024)) {
             $imagename = date("ymdhis")."."."jpg";
             $tmp = $_FILES['imagefile']['tmp_name'];
             if (move_uploaded_file($tmp, $filepath . $imagename)) {
		 echo '<img class="preview" height=30 width=30 alt="" src="'.$filepath.'/'. 
			$imagename .'" />';
	     } else {
		 echo "Could not move the file.";
	     }
	  } else {
		echo "Your image size is bigger than 2MB.";
	  }
       } else {
	       echo "Invalid file format.";
       }
  } else {
       echo "Please select image..!";
  }
exit();
}

?>