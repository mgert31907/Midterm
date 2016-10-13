<?php
function get_classes() {
    global $db;
    $query = 'SELECT * FROM Winners
              ORDER BY ID';
    $classes = $db->query($query);
    return $classes;
}

function get_classes_by_semester($semester_id) {
    global $db;
    $query = "SELECT * FROM Winners
              WHERE ID = '$semester_id'
              ORDER BY ID";
    $classes = $db->query($query);
    return $classes;
}

function get_classes1($semester_id) {
    global $db;
    $query = "SELECT * FROM Winners
              WHERE Country = '$Country_id'";
    $classes1 = $db->query($query);
    $classes1 = $classes1->fetch();
    return $classes1;
}

?>