<?php

    // Database connection
    include_once "../../app/db.php";
    
    // Function connection
    include_once "../../app/functions.php";

    // Data get
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $cell     = $_POST['mobile'];
    $location = $_POST['loct'];

    if( empty($name) ){
        return false;
    }

    //File upload
    $data = fileUpload($_FILES['photo'],'../../media/images/students/','["jpg","png","jpeg"]');
    $fileDbName = $data['file_name'];

    $sql = "INSERT INTO students (name,email,cell,location,photo) VALUES ('$name','$email','$cell','$location','$fileDbName')";
    $connection -> query($sql);

    echo "<p class='alert alert-success alert-dismissible fade show'>Data added successfull<button type='button' class='btn-close' data-bs-dismiss='alert'></button></p>";

    










?>