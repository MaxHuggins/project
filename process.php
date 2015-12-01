
<textarea name="text" rows="20" cols="70"> 
<?php 
$target_dir = "uploads/";

$name =  $target_dir.$_POST["name"]; echo file_get_contents("$name");
?>
</textarea>