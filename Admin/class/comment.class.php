<?php
require_once "common.php";

class Comment extends Common{
	public $id,$blog_id,$title_id,$name,$email,$comment,$created_by,$created_date;

function SaveComment(){
	   $sql="insert into tbl_comment (blog_id,name,email,comment,created_date)
	values('$this->blog_id','$this->name','$this->email','$this->comment','$this->created_date')";
	return $this->insert($sql);
}
function listAllComment(){
	$sql = "select * from tbl_comment where blog_id='$this->blog_id' order by created_date desc";
	return $this->select($sql);
}
function deletecomment(){
	$sql = "delete from tbl_comment where id='$this->id' ";
	return $this->delete($sql);
}


function listComment(){
	$sql = "select * from tbl_comment order by created_date desc";
	return $this->select($sql);
}

function listaComment(){
	$sql="select comment FROM tbl_blog
                                                    join tbl_comment
                                                    on tbl_blog.id=tbl_comment.id 
                                                    where tbl_blog.id='$this->blog_id' 
                                                    group by tbl_blog.title";
                                                    return $this->select($sql);
}




}
?>