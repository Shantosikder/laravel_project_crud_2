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
	<h1>Product Entry::</h1>


	<form action="{{ROUTE('products.store')}}" method="post">
		@csrf
		<div class="form-group">
			<label for="name">Product Name:</label>
			<input type="name" id="name" name="name" class="form-control">		
		</div>
		<div class="form-group">
			<label for="details">Details:</label><br>
			<textarea name="details" id="" cols="30" rows="10" class="form-control"></textarea>
		</div>

		<button type="submit" class="btn btn-default">SUBMIT</button>

	</form>

</body>
</html>