<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php if(auth()->guard()->check()): ?>
		<a href="#"><?php echo e(auth()->user()->username); ?></a>
		<a href="<?php echo e(route('logout')); ?>">Log out</a>
		<a href="<?php echo e(route('product')); ?>">Products</a>
	<?php endif; ?>
	<?php if(auth()->guard()->guest()): ?>
		<a href="<?php echo e(route('login')); ?>">Log in</a>
		<a href="<?php echo e(route('register')); ?>">Register</a>
	<?php endif; ?>
</body>
</html><?php /**PATH D:\xampp\htdocs\laravel\resources\views/home.blade.php ENDPATH**/ ?>