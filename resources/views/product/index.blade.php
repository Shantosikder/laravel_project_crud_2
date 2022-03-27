<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>product</title>
</head>
<body>
	<h1>Product List::</h1>

<a href="{{URL('products/create')}}" class=" btn btn-success ">New Product</a><br><br>

	<table class="table table-striped" border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Details</th>
			<th>Action</th>
		</tr>

		@foreach ($Product as $products)
		<tr>
			<td>{{$products->id}}</td>
			<td>{{$products->name}}</td>
			<td>{{$products->detail}}</td>

			<td>
				<form action="{{ROUTE('products.destroy', $products->id)}}" method="post">
				<button class=" btn btn-info">Edit</button>

				@csrf
				@method('DELETE')

				<button type="submit" class=" btn btn-danger">Delete</button>
				</form>

			</td>

		</tr>

		@endforeach

	</table>

</body>
</html>