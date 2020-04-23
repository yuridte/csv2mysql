<!DOCTYPE html>
<html>
<head>
	<title>CSV to BD</title>
</head>
<body>
	<h1>Aplicação para importar CSV ao banco de dados</h1>

	<form action="updateDatabase.php" method="post" enctype="multipart/form-data">
		<label for="csvFile">Import csv file clicking below</label> <br>
		<input type="file" id="csvFile" name="csvFile"> <br> <br>
		<input type="submit" value="Send">
	</form>
</body>
</html>