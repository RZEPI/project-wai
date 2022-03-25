<?php
    function imageCreateFromType($fileType, $filePath)
    {
        if($fileType == 'jpg')
        {
            $image = imagecreatefromjpeg($filePath);
        }
        elseif($fileType == 'png')
        {
            $image = imagecreatefrompng($filePath);
        }
        return $image;
    }
    function imageSave($fileType, $image, $filePath)
    {
        if($fileType == 'jpg')
        {
            imagejpeg($image, $filePath);
        }elseif($fileType == 'png')
            imagepng($image, $filePath);
    }
    function unsetPost()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_SESSION['postdata'] = $_POST;
            unset($_POST);
            header("Location: ".$_SERVER['PHP_SELF']);
            exit;
        }
    }
?>