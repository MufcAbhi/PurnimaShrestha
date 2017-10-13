<?php
require_once"class/image.class.php";
$image= new Image();
$image->set('id',$_GET['id']);
$imagedata=$image->deleteimage();
header('location:show_image.php');
?>