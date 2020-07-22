<?php
$arr = array("records"=>array(
    array(   
            "ID"=> "256",
            "Name"=>  "Вес",
            "Type"=>  "Number",
            "Active"=>  "Y",
            "Mult"=>  "N",
            "Require"=>  "N",
            "Sort"=>  "100",
            "Code"=>  "VES",
            "Delete"=>  "N"
        ),
	array(   
            "ID"=> "25226",
            "Name"=>  "Вес",
            "Type"=>  "Number",
            "Active"=>  "N",
            "Mult"=>  "Y",
            "Require"=>  "N",
            "Sort"=>  "100",
            "Code"=>  "VES",
            "Delete"=>  "N"
        ),
	array(	
			"ID"=> "280",
            "Name"=> "Цена",
            "Type"=> "Number",
            "Active"=> "Y",
            "Mult"=> "N",
            "Require"=> "N",
            "Sort"=> "100",
            "Code"=> "H_PRICE",
            "Delete"=> "N"
		),
	array(	
			"ID"=> "307",
            "Name"=> "Видео",
            "Type"=> "string",
            "Active"=> "Y",
            "Mult"=> "N",
            "Require"=> "N",
            "Sort"=> "400",
            "Code"=> "VIDEO_LINK",
            "Delete"=> "N"
		)
	));
echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
?>