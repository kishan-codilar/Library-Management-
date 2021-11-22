<?php
ini_set('display_errors', true);
require_once __DIR__ . '/dbconnection.php';


$connection = new dbConnection();                                   
$conn = $connection->connect();
$id = $_GET['id'];

$query = $conn->prepare("delete FROM MYBOOK where id = '$id' ");
$query->execute();
header('LOCATION:index.php');

?>