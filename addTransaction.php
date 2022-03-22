<?php
$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=remaxtable", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$response = array('success' => false);
if(isset($_POST['name']) && $_POST['name']!='' && isset($_POST['type']) && $_POST['type']!='' && isset($_POST['num']) && $_POST['num']!='')
{
	$name = addslashes($_POST['name']);
	$type = addslashes($_POST['type']);
	$num = addslashes($_POST['num']);

	$sql = "INSERT INTO `transaction`(`name`, `type`, `num`) VALUES('$name', '$type', '$num')";
	
	if($conn->query($sql))
	{
		$response['success'] = true;
	}
}

echo json_encode($response);