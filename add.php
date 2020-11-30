<!DOCTYPE html>
<html>
<head>
	<title>Add Your Phone</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
		<h1>ADD YOUR PHONE</h1>
	</div>
	<div class="container">
		<form action="savedata.php" method="post">
	    <div class="row">
		<div class="form-group col-md-3 col-sm-4">
			<input type="text" name="name" placeholder="Name"><br>
		</div>
		<div class="form-group col-md-3 col-sm-4">
			<input type="text" name="storage" placeholder="Storage"><br><br>
		</div>
		<div class="form-group col-md-3 col-sm-4">
			<input type="text" name="ram" placeholder="RAM"><br><br>
		</div>
		<div class="form-group col-md-3 col-sm-4">
			<input type="text" name="battery" placeholder="Battery"><br><br>
		</div>
		<div class="form-group col-md-3 col-sm-4">
			<input type="text" name="rear" placeholder="Rear Camera"><br><br>
		</div>
		<div class="form-group col-md-3 col-sm-4">
			<input type="text" name="front" placeholder="Front Camera"><br><br>
		</div>
		<div class="form-group col-md-3 col-sm-4">
			<input type="text" name="display" placeholder="Display"><br><br>
		</div>
		<div class="form-group col-md-3 col-sm-4">
			<input type="text" name="proce" placeholder="Processors"><br><br>
		</div>
		<div class="form-group col-md-3 col-sm-4">
			<input type="text" name="os" placeholder="OS"><br><br>
		</div>
		<div class="form-group col-md-3 col-sm-4">
			<input type="text" name="amazon" placeholder="Amazon Price"><br><br>
		</div>
		<div class="form-group col-md-3 col-sm-4">
			<input type="text" name="flipkart" placeholder="Flipkart Price"><br>
		</div>
		<button class="col-sm-4 col-md-3" type="submit">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>