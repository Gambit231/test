<?php
 
include_once 'Z:\home\test.com\www\database.php';
include_once 'Z:\home\test.com\www\records.php';
 
$database = new Database();
$db = $database->getConnection();

$records1 = new Records($db);

$stmt = $records1->read();
$num = $stmt->rowCount();


if ($num>0) {

    $records_arr=array();
    $records_arr["records"]=array();


    while ($row = $stmt->fetchALL(PDO::FETCH_ASSOC)){

        extract($row);

        $records_item=array(
            "Id" => $Id,
            "Name" => $Name,
            "Type" => $Type,
            "Active" => $Active,
            "Mult" => $Mult,
            "Require" => $Require,
			"Sort" => $Sort,
			"Code" => $Code
        );

        array_push($records_arr["records"], $records_item);
    }

    http_response_code(200); 
    echo json_encode($records_arr);
}
else {

    http_response_code(404);
    echo json_encode(array("message" => "Товары не найдены."), JSON_UNESCAPED_UNICODE);
}
	?>