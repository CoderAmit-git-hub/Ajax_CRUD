<?php


    // Database connection
    include_once "../../app/db.php";
    include_once "../../app/functions.php";

    $id = $_POST['id'];

    $sql = "SELECT * FROM students WHERE sl='$id'";
    $data = $connection -> query($sql);

    $fh_sinData = $data -> fetch_assoc();

    echo json_encode($fh_sinData);









 ?>