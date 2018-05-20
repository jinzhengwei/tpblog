<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<meta name="viewport" content="width=device-width, user-scalable=1.0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="/Public/home/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="/Public/home/js/vue.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/home/css/login.css">
</head>
<body>
	<div id="login">
		<div class="login-box clearfix">
		<form action='<?php echo U("home/user/dologin");?>' enctype="multipart/form-data" method='post'>
			<p>账号登录</p>
			<div class="input-text">
				<input name="phone" type="text" placeholder="输入电话号">
				<input name="password" type="password" placeholder="输入密码">
			</div>
			<input name='code' type='text' placeholder="输入验证码">
			<img src='<?php echo U("home/user/entry");?>'>
			<input class="check" type="checkbox">&nbsp&nbsp下次自动登录
			<a href="#">忘记密码</a>
			<input class="login-btn" type='submit' value='登录'>
			<a class="regi-btn" href="<?php echo U('home/user/reg');?>">注册</a>
		</form>	
		</div>
	</div>
	<script type="text/javascript" src="/Public/home/js/login.js"></script>
</body>
</html>