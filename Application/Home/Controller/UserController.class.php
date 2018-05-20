<?php 
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
	public function login(){
	
		$this->display();

	}
	public function entry(){
		$config =    array(
		    'fontSize'    =>    30,    // 验证码字体大小
		    'length'      =>    3,     // 验证码位数
		    'useNoise'    =>    false, // 关闭验证码杂点
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}
	public function dologin() 
	{
		$phone    =I('post.phone','');
		$password =I('post.password','');
		$code     =I('post.code','');
    	$codeStatus=check_verify($code);
		if(!$codeStatus){
			$this->error('验证码错误',U('home/blog/lists'));
		}
		$user=D('user')->getInfoByPhone($phone);

		if ($user['password'] == $password) {
			unset($user['password']);
			$_SESSION['me']=$user;
			$this->success('登录成功',U('home/blog/lists'));	
		} else {
			$this->error('密码错误',U('home/blog/lists'));
		}
	}
	public function reg(){
		$this->display();
	}
	public function doreg(){
		$name=I('post.name','');
		$phone=I('post.phone','');
		$password=I('post.password','');
		$user=D('user')->getInfoByPhone($phone);
		if(!empty($user['phone'])){
			$this->error('用户存在',U('home/blog/lists'));

		}else{
			$this->success('注册成功',U('home/blog/lists'));
		}
		$info = D('user')->addUser($name,$phone,$password);
		

	}
	public function logout(){
		unset($_SESSION['me']);
		$this->success('退出成功',U('home/blog/lists'));;
	}
}