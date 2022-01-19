<?

require_once('connectionDatabase.php');


$query = $connectionDatabase->prepare("SELECT * FROM Cards WHERE favorite_card IS NOT NULL;");
$query->execute();
$result =  [];
while( $data = $query->fetch(PDO::FETCH_ASSOC) ){
    array_push($result,$data);
}


echo json_encode($result);

?>