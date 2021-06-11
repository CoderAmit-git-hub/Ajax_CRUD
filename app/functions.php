<?php


    // File Upload System
    function fileUpload($file,$location,$file_format){
        
        $file_name     = $file['name'];
        $file_tmp_name = $file['tmp_name'];

        // Unique File name
        $fileName_exp = explode('.',$file_name);
        $file_endName = strtolower(end($fileName_exp));
        $unq_fileName = md5(time().rand()).'.'.$file_endName;

        move_uploaded_file( $file_tmp_name, $location.$unq_fileName );

        return [
            'file_name' => $unq_fileName
        ];


    }






?>