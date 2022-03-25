<?php
require_once '../functions.php';
require_once '../connectDB.php';
if(!isset($err))
    $err ='';
require_once '../upload.php';

require '../galleryView.php';
require '../findInDB.php';


session_start();

if(!isset($_SESSION['gal']))
    $_SESSION['gal'] = [];

if(isset($_GET['checked']))
{
    $arr = $_GET['checked'];
    foreach($arr as $key)
    {
        if(!array_search($key, $_SESSION['gal']))
            array_push($_SESSION['gal'], $key);
    }
}
include '../views/indexView.php';
?>
