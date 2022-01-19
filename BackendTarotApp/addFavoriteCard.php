<?php

require_once('connectionDatabase.php');

$input = file_get_contents('php://input');
$data = json_decode($input, true);
$response = [];

$name_card = $data["name_card"];
$type = $data["type"];


$sql = "UPDATE Cards SET favorite_card='OK' WHERE name_card='" . $name_card . "' AND type_card='" . $type . "' ;" ;


if($connectionDatabase->query($sql)){
    $response["message"] = "OK";

}
else{
    $response["message"] = "KO";
}


echo json_encode($response);

?>