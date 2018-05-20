<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>详情</title>
	<meta name="viewport" content="width=device-width, user-scalable=1.0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="/Public/home/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="/Public/home/js/vue.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/home/css/blog.css">
</head>
<body>
	<div id="info">
		<div class="content">
			<div class="header">
				<div class="personal">
					<img src="/Public/home/images/tip1.jpg">
					<span class="author"><?php echo $info['user_id']; ?></span>
					<button class="follow">关注</button>
				</div>
			</div>
			<div class="title">
				<p><?php echo $info['title']; ?></p>
				<span>转载</span>
				<span class="time"><?php echo $info['createtime']; ?></span>
				<span class="num"><?php echo $info['num']; ?></span>
			</div>
			<div class="info-content">
				<p><?php echo $info['content']; ?></p>
				<p><img src="/Public/Upload/<?php echo ($info['image']); ?>" /></p>	
			</div>
		</div>
	</div>
	<script type="text/javascript" src="/Public/home/js/blog.js"></script>
	<a href='index.php?c=blog&a=update&id=<?php echo $info['id'] ; ?>'>修改</a>
</body>
</html>