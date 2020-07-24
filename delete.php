<?php

include_once '/database.php';
include_once '/records.php';
 
$database = new Database();
$db = $database->getConnection();
 
$records1 = new Records($db);
 
$data = json_decode($HTTP_RAW_POST_DATA);

$records1->ID = $data->ID;

if ($records->delete()) {
    echo json_encode(array("message" => "Товар был удалён."), JSON_UNESCAPED_UNICODE);
	}

else {
    echo json_encode(array("message" => "Не удалось удалить товар."));
	}
?>