<?php
include('../includes/connection.php');

header('Content-Type: application/json');
header('Access-Control-Allow-origin:*');
header('Access-Control-Method:POST');


$data = json_decode(file_get_contents("php://input"));

$schoolname = $data->schoolname;
$udate = $data->data;
$number = $data->number;
$anumber = $data->anumber;
$email = $data->email;
$address = $data->address;
$state = $data->state;
$district = $data->district;
$board = $data->board;
$description = $data->description;

//Image Process
// $destination = "../upload/".$image["name"];
// move_uploaded_file($image["tmp_name"] , $destination);

$insert = "INSERT INTO `schools`(`s_name`, `date`, `number`, `a_number`, `email`, `address`, `state`, `district`, `board`, `s_image`, `description`) VALUES ('$schoolname','$udate','$number','$anumber','$email','$address','$state','$district','$board','[value-11]','$description')";
$queryinsert = $connection->query($insert);
if($queryinsert)
{
    echo("School added!!");
}
header("Location: ../includes/all_school.php");
$connect = null;
?>