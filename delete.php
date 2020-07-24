<?php

include_once '/database.php';
include_once '/records.php';
 
$database = new Database();
$db = $database->getConnection();

// подготовка объекта 
$records1 = new Records($db);

// получаем id товара 
$data = json_decode($HTTP_RAW_POST_DATA);

// установим id товара для удаления 
$records1->ID = $data->ID;

// удаление товара 
if ($records->delete()) {

    // сообщение пользователю 
    echo json_encode(array("message" => "Товар был удалён."), JSON_UNESCAPED_UNICODE);
}

// если не удается удалить товар 
else {

    // сообщим об этом пользователю 
    echo json_encode(array("message" => "Не удалось удалить товар."));


}
?>