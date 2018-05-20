<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
	public function getInfoByPhone($phone){
		$data= $this->where(array('phone'=>$phone))->find();
		return $data;
	}
	public function addUser($name,$phone,$password){
		$dataUser=array('name'=>$name,
						'phone'=>$phone,
						'password'=>$password);
		$data= $this->data($dataUser)->add();
		return $data;
	}
}