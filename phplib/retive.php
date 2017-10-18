<?php
	require_once 'bd_config.php';

	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die("Connection failed" .mysqli_connect_error());	
	}
	echo "Connection Success";

	$sql = "select * from members";
	$result = $conn->query($sql);
	//var_dump($result);
	while($row = mysqli_fetch_assoc($result))
	{
		var_dump($row);
	}
?>