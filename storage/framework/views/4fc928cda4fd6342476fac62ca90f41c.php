<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php if(session('error')): ?>
		<div class="alert"> <?php echo e(session('error')); ?> </div>
	<?php endif; ?>
	<form action="<?php echo e(route('login')); ?>" method="post">
		<?php echo csrf_field(); ?>
        <div class="form-group">
        	<label for="username">Username</label>
        	<input type="text" name="username" id="username" value="<?php echo e(old('username')); ?>">
        </div> 
        <div class="form-group">
        	<label for="password">Password</label>
        	<input type="password" name="password" id="password">
        </div> 
        <div class="form-group">
        	<button type="submit">Enter</button>
        </div> 
	</form>
</body>
</html><?php /**PATH D:\xampp\htdocs\laravel\resources\views/user/login.blade.php ENDPATH**/ ?>