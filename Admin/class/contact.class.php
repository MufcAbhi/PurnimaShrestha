<?php
require_once "common.php";

class Contact extends Common{


function SaveComment(){
	  $sql="insert into tbl_contact (Name,Email,Website,Created_date,Comment)
	values('$this->Name','$this->Email','$this->Website','$this->Created_date','$this->Comment')";
	return $this->insert($sql);
}
function listAllComment(){
	$sql = "select * from tbl_contact order by created_date desc";
	return $this->select($sql);
}
function deletecontact(){
	   $sql= "delete from tbl_contact where ID='$this->ID' ";
	return $this->delete($sql);
}
}
?>