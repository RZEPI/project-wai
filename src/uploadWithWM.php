<?php 
if(isset($_POST['watermark']))
{
    $filePath = 'images/' . $file['name'];
    
    $fileNameWM = 'WM' . $id . '.' . $fileName[1];
    $file['name'] = $fileNameWM;
    $image = imageCreateFromType($fileType, $filePath);
    $filePath = 'images/' . $fileNameWM;
    $watermark = $_POST['watermark'];
    $color = imagecolorallocate($image, 255, 255, 255);
    
    if(imagestring($image, 1, 10, 10, $watermark, $color))
    {
        imageSave($fileType, $image, $filePath);
    }else
        $err .= '<h1>WM NIE ZOSTAŁ DODANY</h1>';
}