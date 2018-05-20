<?php
namespace Home\Model;
use Think\Model;
class BlogModel extends Model{
	public function getLists(){
		$data=$this->select();
		return $data;
	}
	public function getInfoById($id){
		$data = $this->where(array('id'=>$id))->find();
		return $data;
	}
	public function addBlog($title,$content,$img){
		$datablog=array();
		$datablog['title']=$title;
		$datablog['content']=$content;
		$datablog['image']=$img;
		
		$data=$this->data($datablog)->add();

		return $data;

	}
}