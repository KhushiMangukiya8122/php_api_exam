<?php

header("Access-Control-Allow-Method: POST");

include("../config.php");

$config = new Config();

if($_SERVER["REQUEST_METHOD"] == 'POST') {

    $student_name = $_POST['student_name'];
    $student_mother_name = $_POST['student_mother_name'];
    $student_father_name = $_POST['student_father_name'];
    $stream = $_POST['stream'];

    $res = $config->insert($student_name, $student_mother_name, $student_father_name, $stream);

    if($res) {
        $arr['msg'] = "Data inserted Successfully...";
    } else {
        $arr['msg'] = "Data insertion failed...";
    }


} else {
    $arr['msg'] = "Only POST Method Allowed..";
}

echo json_encode($arr);
?>


