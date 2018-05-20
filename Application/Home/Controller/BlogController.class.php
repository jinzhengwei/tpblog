<?php 
namespace Home\Controller;
use Think\Controller;
class BlogController extends Controller {
	public function lists(){
		$list=array();
		$list=D('blog')->getLists();
		$this->assign('list',$list);
		$this->display();


	}
	public function info(){
		// /**
		// 1 接收参数 
		// 2 参数判断，错误处理
		// 3 相应数据库查询
		// 4 数据传递给模板
		// 5 渲染模板

		$id=!$_GET['id'] ? '': $_GET['id'];
		if(empty($id)){
			$this->error('参数错误',U('home/blog/lists'));

		}
		$info=D('blog')->getInfoById($id);	
		$this->assign('info',$info);
		$this->display();	
	}
	public function add(){
		$this->display();
 
	}
	public function doadd(){
		$title=!$_POST['title'] ? '' :  $_POST['title'];
		$content=!$_POST['content'] ? '' :  $_POST['content'];
		
		$upload = new \Think\Upload();
		$upload->maxSize= 40000000;
		$upload->exts= array('jpg','gif','png','jpeg');
		$upload->rootPath= './Public/Upload/';
		$info=$upload->upload();
		$img=$info['photo']['savepath'].$info['photo']['savename'];
		$data=D('blog')->addBlog($title,$content,$img);
		if($data){
			$this->success('发布成功',U('home/blog/lists'));
		}
		
	}
	
	
}

