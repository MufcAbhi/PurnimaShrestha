<?php
require_once "common.php";

class Image extends Common{
	public $id,$status,$image,$short_description,$description,$slider_image,$feature_image,$latest_image,$created_date,$created_by;

function SaveImage(){
 $sql="insert into tbl_image ( status,short_description,image,description,slider_image,
                       feature_image,latest_image,created_date,created_by)
	       values('$this->status','$this->short_description','$this->image','$this->description',
	       '$this->slider_image','$this->feature_image','$this->latest_image','$this->created_date','$this->created_by')";
	return $this->insert($sql);
}
function getLatestData(){
	   $sql= "select * from tbl_image where latest_image=1 and status=1 order by created_date desc limit 4 ";
	return $this->select($sql);
}
function listAllImage(){
	   $sql= "select * from tbl_image order by created_date desc ";
	return $this->select($sql);
}
function getimageData(){
	   $sql= "select * from tbl_image where feature_image=1 and status=1 limit 4";
	return $this->select($sql);
}
function getSliderData(){
	   $sql= "select * from tbl_image where slider_image=1 and status=1 order by created_date desc";
	return $this->select($sql);
}
function getAllData($start){
	   $sql= "select * from tbl_image where  status=1 order by created_date desc limit $start,6";
	return $this->select($sql);
}
function getAllDatas(){
	   $sql= "select * from tbl_image where status=1 order by created_date desc ";
	return $this->select($sql);
}
function deleteimage(){
	   $sql= "delete from tbl_image where id='$this->id' ";
	return $this->delete($sql);
}
}
?>