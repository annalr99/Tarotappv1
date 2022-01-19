<?php
require_once("connectionDatabase.php");

$input = file_get_contents('php://input');
$data = json_decode($input, true);
$response = [];

$name_card = $data["name_card"];
$type = $data["type"];
$number = $data["number"];
$meaning_up = $data["meaning_up"];
$meaning_reverse = $data["meaning_reverse"];
/*
$name_card = 'kopdsfkpdsf';
$type = 'ksdfmskf';
$number = 23423;
$meaning_up = '$datsdfsdf"]';
$meaning_reverse = '$sopopfdskopd"]';
*/
/*
$queryInsert = $connectionDatabase->prepare("INSERT INTO Cards (`name_card`, `type_card`, `number_card`, `meaning_up`, `meaning_reverse`) VALUES ( :name_card, :type_card, :number_card, :meaning_up, meaning_reverse )");
$queryInsert->bindParam(':name_card', $name_card);
$queryInsert->bindParam(':type_card', $type);
$queryInsert->bindParam(':number_card', $number);
$queryInsert->bindParam(':meaning_up', $meaning_up);
$queryInsert->bindParam(':meaning_reverse', $meaning_reverse);
*/

$sql = "INSERT INTO Cards VALUES ( '" . $name_card . "' , '" . $type . "' , " . $number . " , '" . $meaning_up . "' , '" . $meaning_reverse . "' , NULL);";

/*   PROVAR DESPRES
$queryInsert = $connectionDatabase->prepare("INSERT INTO Cards VALUES ( :name_card, :type_card, :number_card, :meaning_up, meaning_reverse )");
$queryInsert->bindParam(':name_card', $name_card);
$queryInsert->bindParam(':type_card', $type);
$queryInsert->bindParam(':number_card', $number);
$queryInsert->bindParam(':meaning_up', $meaning_up);
$queryInsert->bindParam(':meaning_reverse', $meaning_reverse);
$queryInsert->execute();

*/


if($connectionDatabase->query($sql)){
    $response["message"] = "OK";

}
else{
    $response["message"] = "KO";

}


echo json_encode($response);





?>
