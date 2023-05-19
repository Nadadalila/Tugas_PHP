<?php

	$id_pembeli = $_GET['id_pembeli'];

	include('connect.php');

	$query = mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli = '$id_pembeli' ");

	header("Location:index.php");

?>