<?php
include_once "config.php";
include "Database.php";
include "Activation.php";

use Core\Data\Database;
use Core\Data\Activation;

header('Content-type: application/json');

$db = new Database();
$activation = new Activation($db->connect());

$stmt = $activation->getRecords();

if ($stmt->rowCount() > 0) {
    $act_arr = array(
        "records" => array()
    );

    while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        $act_arr['records'][] = $row;
    }

    echo json_encode($act_arr);
}
?>