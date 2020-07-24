<?php
include_once '/database.php';
include_once '/records.php';
 
$database = new Database();
$db = $database->getConnection();

$records1 = new Records($db);

$stmt = $records1->read();
$num = $stmt->rowCount();


if ($num>0) {

    $records_arr=array();
    $records_arr["records"]=array();


    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        extract($row);

        $records_item=array(
            "ID" =>html_entity_decode  ($ID),
            "Name" =>html_entity_decode ($Name),
            "Type" =>html_entity_decode ($Type),
            "Active" =>html_entity_decode ($Active),
            "Mult" =>html_entity_decode ($Mult),
            "Require" =>html_entity_decode ($Require),
			"Sort" =>html_entity_decode ($Sort),
			"Code" =>html_entity_decode ($Code)
        );

        array_push($records_arr["records"], $records_item);
    }

   
    echo json_encode($records_arr,JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
}
else {

    
    echo json_encode(array("message" => "Товары не найдены."), JSON_UNESCAPED_UNICODE);
}
	?>