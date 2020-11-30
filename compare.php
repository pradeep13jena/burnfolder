<!DOCTYPE html>
<html>
<head>
	<title>Compare It</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<form class="form-inline" action="compare.php" action="GET">
		<input type="Search" name="Searchbox" class="form-control" placeholder="Search">
<button class="btn btn-outline-dark" type="submit">Search</button>
<input type="Search" name="Searchbox1" class="form-control" placeholder="Search">
	</form>
	
	<?php

		$con = mysqli_connect("localhost", "root", "", "miniproject") or die("Connection Failed");

		$stu_search = $_GET['Searchbox'];
		

		$sql = "SELECT * FROM features WHERE pname LIKE '%$stu_search%'";

		$result = mysqli_query($con, $sql) or die("Query Failed");
	
		$queryresult = mysqli_num_rows($result);
		

	?>
	<?php

		$stu_search1 = $_GET['Searchbox1'];
		

		$sql1 = "SELECT * FROM features WHERE pname LIKE '%$stu_search1%'";

		$result1 = mysqli_query($con, $sql1) or die("Query Failed");
	
		$queryresult1 = mysqli_num_rows($result1);
		

	?>

		
	<table class="table table-dark table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Storage(gb)</th>
				<th>Ram(gb)</th>
				<th>Battery Capacity(mAh)</th>
				<th>Rear Camera(MB)</th>
				<th>Front Camera(MB)</th>
				<th>Display(inch)</th>
				<th>Processor</th>
				<th>OS</th>
				<th>Amazon(rs)</th>
				<th>Flipkart(rs)</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if ($queryresult > 0) {
					while ($rows = mysqli_fetch_assoc($result)) {
					
			?>
			<tr>
				<td><?php echo $rows['pname'] ?></td>
				<td><?php echo $rows['pstorage'] ?></td>
				<td><?php echo $rows['pram'] ?></td>
				<td><?php echo $rows['pbattery'] ?></td>
				<td><?php echo $rows['prear'] ?></td>
				<td><?php echo $rows['pfront'] ?></td>
				<td><?php echo $rows['pdisplay'] ?></td>
				<td><?php echo $rows['pproce'] ?></td>
				<td><?php echo $rows['pos'] ?></td>
				<td><?php echo $rows['pamazon'] ?></td>
				<td><?php echo $rows['pflipkart'] ?></td>					
			</tr>
			<?php 
}
}
			?>
		</tbody>
		<tbody>
			<?php
				if ($queryresult1 > 0) {
					while ($rows1 = mysqli_fetch_assoc($result1)) {
					
			?>
			<tr>
				<td><?php echo $rows1['pname'] ?></td>
				<td><?php echo $rows1['pstorage'] ?></td>
				<td><?php echo $rows1['pram'] ?></td>
				<td><?php echo $rows1['pbattery'] ?></td>
				<td><?php echo $rows1['prear'] ?></td>
				<td><?php echo $rows1['pfront'] ?></td>
				<td><?php echo $rows1['pdisplay'] ?></td>
				<td><?php echo $rows1['pproce'] ?></td>
				<td><?php echo $rows1['pos'] ?></td>
				<td><?php echo $rows1['pamazon'] ?></td>
				<td><?php echo $rows1['pflipkart'] ?></td>
			</tr>
			<?php 
}
}
			?>
		</tbody>
		
	
</body>
</html>