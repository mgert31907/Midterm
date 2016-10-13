<!doctype html>
<?php
require('database.php');
require('semester_db.php');
require('classes_db.php');
require ('olympiads_db.php');


if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
   // $semester_id = 1;
    $semester_id = $_GET['semester_id'];
    $semesters = get_semesters();
    $olympiads = get_olympiads();
    //$semester_name = get_semester_name($semester_id);
    $classes = get_classes_by_semester($semester_id);
   // $classes1 = get_classes1($semester_id);
    $action = 'list_semesters';
    include('semester_list.php');
}

if ($action == 'list_semesters') {
//    $semester_id = $_GET['semester_id'];
    if (empty($semester_id)) {
        $semester_id = 1;
    }

    $semesters = get_semesters();
   // $semester_name = get_semester_name($semester_id);
}

?>
