<?php
require_once "common.php";

class Video extends Common{
	public $id,$name,$video,$rank,$status,$created_by,$created_date;

function SaveVideo(){
 $sql="insert into tbl_video ( name,status,rank,video,created_date,created_by)
	       values('$this->name','$this->status','$this->rank','$this->video',
	       '$this->created_date','$this->created_by')";
	return $this->insert($sql);
}
function GetVideoData(){
	   $sql= "select * from tbl_video where  status=1  order by created_date desc";
	return $this->select($sql);
}
function GetVideoDataindex(){
	   $sql= "select * from tbl_video where  status=1  order by created_date desc limit 2";
	return $this->select($sql);
}
function deletevideo(){
	   $sql= "delete from tbl_video where id='$this->id' ";
	return $this->delete($sql);
}
function GetVideoDataforadmin(){
	   $sql= "select * from tbl_video order by created_date desc";
	return $this->select($sql);
}
}
?>