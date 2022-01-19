<?php

require_once __DIR__ . '/database.php';

$sql = "SELECT `courses`.* , 
        `teachers`.`name` AS `teacher_name`, 
        `teachers`.`surname` AS   `teacher_surname`
        FROM `courses` 
        INNER JOIN course_teacher ON `course_teacher`.`course_id` = `courses`.`id`
        INNER JOIN teachers ON `course_teacher`.`teacher_id` = `teachers`.`id`
        WHERE `courses`.`degree_id` = {$_GET['id']}
        ";

$result = $cnx->query($sql);

$courses = [];
if($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }
} else {
    echo 'Query failed';
}

$cnx->close();