<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
	</style>
	<table>
	  <tr>
		<th>id</th>
		<th>title</th>
		<th>quantly</th>
		<th>price</th>
	  </tr>
		<?php $__currentLoopData = $productList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $node): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($node->id); ?></td>
				<td><?php echo e($node->title); ?></td>
				<td><?php echo e($node->quantly); ?></td>
				<td><?php echo e($node->price); ?></td>
			</tr>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
</body>
</html><?php /**PATH D:\xampp\htdocs\laravel\resources\views/product/productuser.blade.php ENDPATH**/ ?>