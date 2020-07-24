<?php
include_once '/database.php';
include_once '/records.php';

$database = new Database();
$db = $database->getConnection();

$records1 = new Recods($db);

$data = json_decode(file_get_contents("php://input"));

	$records1->ID = $data->ID;
	$records1->Name= $data->Name;
	$records1->Type= $data->Type;
	$records1->Active= $data->Active;
	$records1->Mult= $data->Mult;
	$records1->Require= $data->Require;
	$records1->Sort= $data->Sort;
	$records1->Code= $data->Code;



if ($product->update()) {
		echo json_encode(array("message" => "Товар был обновлён."), JSON_UNESCAPED_UNICODE);
	}
	else {
		echo json_encode(array("message" => "Невозможно обновить товар."), JSON_UNESCAPED_UNICODE);
	}


?>