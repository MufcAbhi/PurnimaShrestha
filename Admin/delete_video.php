<?php
require_once"class/video.class.php";
$video= new Video();
$video->set('id',$_GET['id']);
$vid=$video->deletevideo();
header('location:show_video.php');
?>