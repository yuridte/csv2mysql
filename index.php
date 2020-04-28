<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CSV to MySQL</title>
</head>
<body>
	<h1>Script to import csv file to your mysql database</h1>

	<form action="updateDatabase.php" method="post" enctype="multipart/form-data">
		<label for="csvFile">Import csv file clicking below</label> <br>
		<input type="file" id="csvFile" name="csvFile" accept=".csv"> <br> <br>
		<input type="submit" value="Send">
	</form>
</body>
</html>