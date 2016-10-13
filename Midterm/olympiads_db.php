<?php
function get_olympiads() {
    global $db;
    $query = 'SELECT * FROM Olympiads
              ORDER BY ID';
    $classes = $db->query($query);
    return $classes;
}



?>
