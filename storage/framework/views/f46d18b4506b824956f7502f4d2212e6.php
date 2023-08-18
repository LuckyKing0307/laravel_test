<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Posts</h1>
	<ul>
		<li><a href="<?php echo e(route('posts.show',['post'=>1])); ?>">123123</a></li>
		<li><a href="<?php echo e(route('posts.edit',['post'=>1])); ?>">123123 edit</a></li>
		<li><a href="<?php echo e(route('posts.show',['post'=>2])); ?>">123123</a></li>
		<li><a href="<?php echo e(route('posts.edit',['post'=>2])); ?>">123123 edit</a></li>
		<li><a href="<?php echo e(route('posts.show',['post'=>3])); ?>">123123</a></li>
		<li><a href="<?php echo e(route('posts.edit',['post'=>3])); ?>">123123 edit</a></li>
		<li><a href="<?php echo e(route('posts.show',['post'=>4])); ?>">123123</a></li>
		<li><a href="<?php echo e(route('posts.edit',['post'=>4])); ?>">123123 edit</a></li>
	</ul>
</body>
</html><?php /**PATH D:\xampp\htdocs\laravel\resources\views/posts/index.blade.php ENDPATH**/ ?>