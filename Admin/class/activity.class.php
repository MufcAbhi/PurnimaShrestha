<?php
require_once "common.php";

class Activity extends Common{
	public $id,$activity,$rank,$status,$created_by,$created_date;

function SaveActivity(){
echo $sql="insert into tbl_activity ( activity,status,rank,created_date,created_by)
	       values('$this->activity','$this->status','$this->rank','$this->created_date',
	       '$this->created_by')";
	return $this->insert($sql);
}
function GetActivityData(){
	   $sql= "select * from tbl_activity where  status=1  order by created_date desc limit 3 ";
	return $this->select($sql);
}



}
?>