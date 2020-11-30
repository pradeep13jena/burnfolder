<!DOCTYPE html>
<html>
<head>
	<title>Compare It</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1>Search Your Product</h1>
<?php
 	$con = mysqli_connect("localhost", "root", "", "miniproject") or die('Connection Problem');
 	$sql = "SELECT * FROM features" or die('Sql Failed');
 	$result = mysqli_query($con, $sql) or die('Query Unsuccessfull');
 	$queryresult = mysqli_num_rows($result);
?>
	<form class="form-inline" action="compare.php" action="GET">
		<input type="Search" name="Searchbox" class="form-control" placeholder="Search">
<button class="btn btn-outline-dark" type="submit">Search</button>
<input type="Search" name="Searchbox1" class="form-control" placeholder="Search">
	</form>

	<a href="add.php">Wanna Include some phone</a>

</body>
</html>