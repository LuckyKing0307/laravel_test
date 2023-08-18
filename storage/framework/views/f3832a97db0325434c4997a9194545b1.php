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

<form action="<?php echo e(route('product.create')); ?>" method="POST">
	<?php echo csrf_field(); ?>
    <div class="form-group">
    	<label for="title">Name Of Product</label>
    	<input type="text" name="title" id="title">
    </div> 
    <div class="form-group">
    	<label for="quantly">Quantly</label>
    	<input type="text" name="quantly" id="quantly">
    </div> 
    <div class="form-group">
    	<label for="price">Price</label>
    	<input type="text" name="price" id="price">
    </div> 
    <div class="form-group">
    	<button type="submit">Add</button>
    </div> 
</form>
<a href="<?php echo e(route('product.getchanges',['2023-08-18','2023-08-19'])); ?>">Example of updates</a>
<table>
  <tr>
	<th>id</th>
	<th>title</th>
	<th>quantly</th>
	<th>price</th>
	<th>Total price with VAT</th>
	<th>change</th>
  </tr>
	<?php $__currentLoopData = $productList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $node): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($node->id); ?></td>
			<td><?php echo e($node->title); ?></td>
			<td><?php echo e($node->quantly); ?></td>
			<td><?php echo e($node->price); ?></td>
			<td><?php echo e($node->vat); ?></td>
			<td>
			    <a href="<?php echo e(route('product.edit',$node->id)); ?>" class="btn btn-primary">Edit</a>
				    <form method="POST" action="<?php echo e(route('product.delete')); ?>">
						<?php echo csrf_field(); ?>
				        <?php echo e(method_field('DELETE')); ?>

				        <input type="text" name="id" class="btn btn-danger delete-user" hidden value="<?php echo e($node->id); ?>">
				        <input type="submit" class="btn btn-danger delete-user" value="Delete user">
				    </form>
				</td>
		</tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH D:\xampp\htdocs\laravel\resources\views/product/productadmin.blade.php ENDPATH**/ ?>