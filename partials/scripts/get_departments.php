<?php

require_once __DIR__ . '/database.php';

//get departments
$sql = "SELECT * 
        FROM `departments`";
$result = $cnx->query($sql);

//gen the array of departments
$departments = [];
if($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $departments[] = $row;
    }
}

$cnx->close();