<?php
	
	$phone_name = $_POST['name'];
	$phone_storage = $_POST['storage'];
	$phone_ram = $_POST['ram'];
	$phone_battery = $_POST['battery'];
	$phone_rear = $_POST['rear'];
	$phone_front = $_POST['front'];
	$phone_display = $_POST['display'];
	$phone_proce = $_POST['proce'];
	$phone_os = $_POST['os'];
	$phone_amazon = $_POST['amazon'];
	$phone_flipkart = $_POST['flipkart'];

	$con = mysqli_connect('localhost', 'root', '', 'miniproject') or die('Connection failed');

	$sql = "INSERT INTO features(pname, pstorage, pram, pbattery, prear, pfront, pdisplay, pproce, pos, pamazon, pflipkart) VALUES ('{$phone_name}', 
	'{$phone_storage}', '{$phone_ram}', '{$phone_battery}', '{$phone_rear}', '{$phone_front}', '{$phone_display}', '{$phone_proce}', '{$phone_os}', '{$phone_amazon}', '{$phone_flipkart}')";

	$result = mysqli_query($con, $sql) or die('query failed');
	header("location: http://localhost/burn/add.php");
	mysqli_close($con);

?>