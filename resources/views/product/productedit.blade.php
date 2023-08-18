<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="{{ route('product.editdata') }}" method="POST">
		@csrf
        {{ method_field('PUT') }}
	    <div class="form-group">
	    	<label for="title">Name Of Product</label>
	    	<input type="text" name="title" id="title" value="{{$product->title}}">
	    </div> 
	    <div class="form-group">
	    	<label for="quantly">Quantly</label>
	    	<input type="text" name="quantly" id="quantly" value="{{$product->quantly}}">
	    </div> 
	    <div class="form-group">
	    	<label for="price">Price</label>
	    	<input type="text" name="price" id="price" value="{{$product->price}}">
	    	<input type="text" name="id" id="id" value="{{$product->id}}" hidden>
	    </div> 
	    <div class="form-group">
	    	<button type="submit">Add</button>
	    </div> 
	</form>
</body>
</html>