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

<form action="{{ route('product.create') }}" method="POST">
	@csrf
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
<a href="{{ route('product.getchanges',['2023-08-18','2023-08-19']) }}">Example of updates</a>
<table>
  <tr>
	<th>id</th>
	<th>title</th>
	<th>quantly</th>
	<th>price</th>
	<th>Total price with VAT</th>
	<th>change</th>
  </tr>
	@foreach ($productList as $key => $node)
		<tr>
			<td>{{ $node->id }}</td>
			<td>{{ $node->title }}</td>
			<td>{{ $node->quantly }}</td>
			<td>{{ $node->price }}</td>
			<td>{{ $node->vat }}</td>
			<td>
			    <a href="{{route('product.edit',$node->id)}}" class="btn btn-primary">Edit</a>
				    <form method="POST" action="{{route('product.delete')}}">
						@csrf
				        {{ method_field('DELETE') }}
				        <input type="text" name="id" class="btn btn-danger delete-user" hidden value="{{ $node->id }}">
				        <input type="submit" class="btn btn-danger delete-user" value="Delete user">
				    </form>
				</td>
		</tr>
    @endforeach
</table>
</body>
</html>