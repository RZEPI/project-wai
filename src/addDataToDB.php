<?php
$db = get_db();
if(isset($_POST['title']) && isset($_POST['author']))
{
    $dataToDB = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'typeOfImg' => $fileName[1]
    ];
    $db->gallery->insertOne($dataToDB);
}elseif($flagSent)
    $err .= '<h1>TITLE OR AUTHOR WASNT SENT</h1>';

    $res = $db->gallery->findOne($dataToDB);
    $id = $res['_id'];
    
?>