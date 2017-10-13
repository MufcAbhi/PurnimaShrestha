<?php
require_once "common.php";

class Blog extends Common{
	public $id,$name,$status,$title,$image,$rank,$modified_by,$modified_date,$created_by,$created_date;

function SaveBlog(){
	  $sql="insert into tbl_blog (blog,title,rank,status,image,created_date)
	values('$this->blog','$this->title','$this->rank','$this->status','$this->image','$this->created_date')";
	return $this->insert($sql);
}
function listAllBlog($start){
	$sql = "select * from tbl_blog order by created_date desc limit $start,4";
	return $this->select($sql);
}
function listAllBlogforpage(){
	$sql = "select * from tbl_blog order by created_date desc ";
	return $this->select($sql);
}
function listBlogByID(){
	$sql = "select * from tbl_blog where id='$this->id' and status=1 ";
	return $this->select($sql);
}
function deleteBlog(){
	 $sql="delete from tbl_blog where id='$this->id'";
	return $this->delete($sql);
}
function listfourBlogforFrontpage(){
	$sql = "select * from tbl_blog where status=1 limit 4";
	return $this->select($sql);
}
function listABlogforFrontpage(){
	$sql = "select * from tbl_blog where status=1 order by created_date desc limit 4";
	return $this->select($sql);
}



}
?>