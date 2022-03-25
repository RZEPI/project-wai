<?php 
$flagSent =0;
if(isset($_FILES['image']))
{
    $file = $_FILES['image'];

    if($file['type'] == 'image/png')
        $fileType = 'png';
    elseif($file['type'] == 'image/jpeg')
        $fileType = 'jpg';
    else
        $err .= '<h1>INVALID TYPE OF IMAGE</h1><br>';

    if($file['size'] > 1000000)
        $err .= '<h1>FILE IS TOO BIG</h1><br>';
    $fileName = explode('.', $file['name']);
    if($err == '')
    {
        $flagSent = 1;
        require_once 'addDataToDB.php';
        if(!move_uploaded_file($file['tmp_name'], 'images/'. basename($file['name'])))
            $err .= '<h1>SOMETHING WENT WRONG WHILE UPLOADING A FILE</h1><br>';
        require 'uploadWithWM.php';
        require 'uploadMiniature.php';  
    }
    
}
