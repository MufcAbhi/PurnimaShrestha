<?php
require_once"class/contact.class.php";
$contact= new Contact();
$contact->set('ID',$_GET['id']);
$c=$contact->deletecontact();
header('location:show_contact.php');
?>