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
		@foreach ($productList as $key => $node)
			<tr>
				<td>{{ $node->id }}</td>
				<td>{{ $node->title }}</td>
				<td>{{ $node->quantly }}</td>
				<td>{{ $node->price }}</td>
			</tr>
	    @endforeach
	</table>
</body>
</html>