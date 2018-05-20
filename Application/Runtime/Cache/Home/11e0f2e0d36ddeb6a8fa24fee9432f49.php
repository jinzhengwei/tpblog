<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSDN</title>
	<meta name="viewport" content="width=device-width, user-scalable=1.0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/Public/home/css/swiper-3.4.2.min.css">
	<script type="text/javascript" src="/Public/home/js/jquery-3.2.0.min.js"></script>
	<script src="/Public/home/js/swiper-3.4.2.jquery.min.js"></script>
	<script type="text/javascript" src="/Public/home/vie/js/vue.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/home/css/csdn.css">
</head>
<body>
	<div id="csdn">
		<div class="header">
			<img src="/Public/home/images/csdn.png">
			<?php if(empty($_SESSION['me']) ) { ?>
			<a class="login" href="<?php echo U('home/user/login');?>" ref="login">
			<?php  echo '登录'; ?>
			  </a>
			 <?php }else{ echo $_SESSION['me']['name']; ?>
			 <a href=<?php echo U('home/user/logout');?>>退出</a>
			 <?php } ?>
			<a class="publish" href="<?php echo U('home/blog/add');?>" ref="publish">发布文章</a>
		</div>
		<ul class="navbar">
		<?php foreach($catelist as $key => $value){ ?>
			<li ><a href="index.php?c=blog&a=lists&id=<?php echo $value['id'] ?>" ><?php echo $value['name'] ?></a></li>
		<?php } ?>	
		</ul>
		<div class="ad">
			<div class="swiper-container">
			  <div class="swiper-wrapper clearfix">
			    <a href="#" class="swiper-slide" v-for="item in bannerList"><img :src="item.img"></a>
			  </div>
			</div>
		</div>
		
		<div class="blog-list">
		<?php foreach($list as $key=>$value) { ?>
			<div class="blog" >
				<a class="title" href="<?php echo U('home/blog/info',array('id'=>$value['id']));?>" target="_block"><?php echo $value['title']?></a>
				
				<a href="#" class="type"><?php echo $value['catename'] ?></a>
				<span class="author"><?php echo $value['user_id']?></span>
				<span class="number"><?php echo $value['num']?>阅读</span>
				<span class="time"><?php echo $value['createtime']?></span>
				<button class="delete">×</button>
			</div>
			<?php } ?> 
		</div>
		
		
	</div>
	<script type="text/javascript" src="/Public/home/js/csdn.js"></script>
</body>
</html>