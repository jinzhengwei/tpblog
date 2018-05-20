<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎注册</title>
	<meta name="viewport" content="width=device-width, user-scalable=1.0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="/Public/home/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="/Public/home/js/vue.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/home/css/login.css">
</head>
<body>
	<div id="reg">
		<div class="login-box clearfix">
		<form action='<?php echo U('home/user/doreg');?>' method='post'>
			<p>账号注册</p>
			<div class="input-text">
			<input name="name" type="text" placeholder="用户名">
				<input name="phone" type="text" placeholder="请输入电话号">
				
				<input name="password" type="password" placeholder="密码">
			</div>
			<input class="regi-btn" type='submit'>
		</form>	
		</div>
	</div>
	<script type="text/javascript" src="/Public/home/js/regi.js"></script>
</body>
</html>