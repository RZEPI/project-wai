<?php
    require_once '../connectDB.php';
    use MongoDB\BSON\ObjectID;
    session_start();
    $err = '';
    $arr = array();
    if(isset($_SESSION['gal']))
    {
        $db = get_db();
        
        foreach($_SESSION['gal'] as $key)
        {
            $param = $db->gallery->findOne(['_id' => new ObjectID($key)]);
            array_push($arr, $param);
        }
    }else
        $err .= '<h1>SESSION HASNT STARTED YET</h1>';
    
    if(isset($_GET['checked']))
    {
        $del = $_GET['checked'];
        foreach($del as $delete)
        {
            $_SESSION['gal'] = array_diff($_SESSION['gal'], array($delete));
        }
        unset($arr);
        $arr = array();
        foreach($_SESSION['gal'] as $key)
        {
            $param = $db->gallery->findOne(['_id' => new ObjectID($key)]);
            array_push($arr, $param);
        }
    }
    include '../views/checkedGalleryView.php';
?>
