<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    @if(session('message'))
    <div class="alert alert-success" role="alert">{{ session('message') }}</div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
    @endif
	<table class="table table-striped">
		<thead>
			<th>Sl.no</th>
			<th>Name</th>
			<th>Price</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
				<td>{{ $product['id']}}</td>
				<td>{{ $product['name']}}</td>
				<td>{{ $product['price']}}</td>
				<td><a class="btn btn-info" href="{{ url('buy_now/'.$product['id']) }}">Buy Now</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>