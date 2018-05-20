<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布文章</title>
	<meta name="viewport" content="width=device-width, user-scalable=1.0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="/Public/home/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="/Public/home/js/vue.js"></script>
	<script type="text/javascript" src="/Public/home/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/Public/home/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript" src="/Public/home/ueditor/lang/zh-cn/zh-cn.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/home/css/user.css">
	<style type="text/css">
		.title {
			width: 95%;
			border-radius: 3px;
			border: 1px solid #777;
			margin-left: 5px;
		}
	</style>
</head>
<body>
	<div class="header">
		<img src="/Public/home/images/csdn.png">发布文章
		<a class="user" href="#" ref="user"><img src="/Public/home/images/zoro.jpg"></a>
	</div>
	<div id="main">
    <form action='<?php echo U("home/blog/doadd");?>' enctype="multipart/form-data" method='post'>
		<p>标题:<input v-model="title" type="text" name="title" class="title"></p>
        <p><input type="file" name="photo" /></p>
		<script id="container" name="content" type="text/plain"></script>
		<p>
       
			<select name="cate">
             <?php foreach($catelist as $key=>$value) { ?>

				<option value='<?php echo $value['id'] ?>'><?php echo $value['name'] ?></option>
                <?php } ?>
			</select>
		</p>
		<input type='submit' value='发布' >
        </form>

	</div>
    <script>
    	var editor = new Vue({
    		el: "#main",
    		data: {
    			title: "",
    			class_id: "",
    			classList: []
    		},
    		mounted: function(){
    			var ue = UE.getEditor('container');
    			this.getType();
    		},
    		methods: {
    			getUeditorContent: function(){
    				return UE.getEditor('container').getContent()
    			},
    			getType: function(){
    				var that = this;
    				$.ajax({
    					"url":"http://test.com/csdnblog/index.php?a=blog&c=add",
    					"type": "post",
    					"dataType": "json",
    					"data": {
    						"user_id": window.localStorage.user_id
    					},
    					success: function(res){
    						that.classList = res.data.classify_lists;
    					},
    					error: function(){
    						
    					}
    				})
    			},
    			publish: function(){
    				$.ajax({
    					"url": "http://test.com/csdnblog/index.php?c=blog&a=doAdd",
    					"type": "post",
    					"dataType": "json",
    					"data": {
    						"user_id": window.localStorage.user_id,
    						"title": this.title,
    						"content": this.getUeditorContent(),
    						"classify_id": this.class_id,
    					},
    					success: function(res){
    						if(res.error_code == 0){
    							alert("发布成功");
    							// window.location.href = "./my_blog.html"
    						}else {
    							alert(res.message);
    						}
    					}
    				})
    			}
    		}
    	})
    </script>
</body>
</html>