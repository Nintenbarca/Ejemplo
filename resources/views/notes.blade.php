<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Notes</h2>

<form action="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<textarea></textarea>
	<br>
	<button type="submit">Creando una nota</button>
</form>

</body>
</html>