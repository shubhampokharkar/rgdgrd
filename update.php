<?php
include_once "config.php";
include "Database.php";
include "Activation.php";

use Core\Data\Database;
use Core\Data\Activation;

header('Content-type: application/json');

$db = new Database();
$activation = new Activation($db->connect());

$activation->STB_No= $_POST['STB_No'] ?? null;
$activation->Name= $_POST['Name'] ?? null;
$activation->Mobile_no= $_POST['Mobile_no'] ?? null;
$activation->Email= $_POST['Email'] ?? null;
$activation->Address= $_POST['Address'] ?? null;
$activation->Pincode= $_POST['Pincode'] ?? null;
$activation->Adhar_no= $_POST['Adhar_no'] ?? null;

$response = array(
    "status" => "Failed",
    "message" => "Error in updating the record"
);

if ( $activation->update() > 0 ) {
    $response['status'] = "Success";
    $response['message'] = "Record Updated";
}

echo json_encode($response);




?>