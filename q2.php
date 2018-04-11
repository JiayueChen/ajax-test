<?php 

$username=$_POST['username'];
$password=$_POST['password'];
$response = array(
	"username"=>$username,
	"password"=>$password,
	"sentence"=>"Dear ".$username.", you have successfully submit !"
);
echo json_encode($response);


 ?>