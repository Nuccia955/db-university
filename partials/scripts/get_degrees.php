<?php

require_once __DIR__ . '/database.php';

$sql = "SELECT *
        FROM `degrees`
        WHERE `department_id` = {$_GET['id']}
        ";
$result = $cnx->query($sql);

$degrees = [];
if($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $degrees[] = $row;
    }
} else {
    echo 'Query failed';
}

$cnx->close();