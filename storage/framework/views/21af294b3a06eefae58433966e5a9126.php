<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<?php echo csrf_field(); ?>
		<input type="text" name="name">
		<input type="email" name="email">
		<button type="submit">Submit</button>
	</form>
</body>
</html><?php /**PATH D:\xampp\htdocs\laravel\resources\views/contact.blade.php ENDPATH**/ ?>