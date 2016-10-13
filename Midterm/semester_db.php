<?php
function get_semesters() {
    global $db;
    $query = 'SELECT * FROM Countries
              ORDER BY ID';
    $result = $db->query($query);
    return $result;
}

function get_semester_name($semester_id) {
    global $db;
    $query = "SELECT * FROM Countries
              WHERE ID = $semester_id";
    $semester = $db->query($query);
 //   $semester = $semester->fetch();
    $semester_name = $semester['Country'];
    return $semester_name;
}
?>