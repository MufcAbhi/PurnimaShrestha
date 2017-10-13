<?php
require_once"class/comment.class.php";
$comment= new Comment();
$comment->set('id',$_GET['id']);
$commentdata=$comment->deletecomment();
header('location:list_comment.php');
?>