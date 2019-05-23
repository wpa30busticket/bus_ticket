<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@foreach($seats as $seat)
		{{$seat->route_id}}
@endforeach

</body>
</html>