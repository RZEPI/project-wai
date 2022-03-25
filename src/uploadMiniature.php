<?php
    define("MINIATURE_SIZE", [200, 125]);
    $filePath = 'images/' . $file['name'];
    $imageDst = imagecreatetruecolor(MINIATURE_SIZE[0], MINIATURE_SIZE[1]);
    $image = imageCreateFromType($fileType, $filePath);
    $sizeOfImage = getimagesize($filePath);
    $filePath = 'images/min' . $id . '.' . $fileName[1];
        
    if(imagecopyresized($imageDst, $image, 0, 0, 0, 0, MINIATURE_SIZE[0], MINIATURE_SIZE[1], $sizeOfImage[0], $sizeOfImage[1]))
    {
        imageSave($fileType, $imageDst, $filePath);
    }else
        $err .= '<h1>MINIATURE WASNT CREATED</h1>';

    