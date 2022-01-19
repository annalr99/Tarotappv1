<?php
require_once("connectionDatabase.php");


$sql = $connectionDatabase->query("SELECT * FROM Cards");

$rows = $sql->fetchAll();

foreach($rows as $row) {

    print $row['name_card'] . "\t";
    print $row['type_card'] . "\t";
    print $row['number_card'] . "\n";
}
?>

