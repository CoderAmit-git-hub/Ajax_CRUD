<?php

    // Database connection
    include_once "../../app/db.php";
    include_once "../../app/functions.php";

    $id    = $_POST['stu_up_id'];
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $cell  = $_POST['mobile'];
    $loct  = $_POST['loct'];

    if( isset($_FILES['new_photo']['name']) ){

    	$data = fileUpload($_FILES['new_photo'],'../../media/images/students/','["jpg","png","jpeg"]');
    	$fileDbName = $data['file_name'];

    	unlink('../../media/images/students/'.$data['old_photo']);

    }else {
    	$fileDbName = $data['old_photo'];
    }

    $sql = "UPDATE students SET name='$name', email='$email', cell='$cell', location='$loct', photo='$fileDbName' WHERE sl='$id'";
    $data = $connection -> query($sql);





    

?>