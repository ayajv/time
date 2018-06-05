<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the Welcome Package</title>
	<link rel="stylesheet" type="text/css" href="/assets/welcome.css">
</head>
<body>

	@if(isset($time))
		<h1>Current Time is {{ ucfirst($time) }}</h1>
	@endif

	<h2>Welcome to Package Development</h2>

</body>
</html>