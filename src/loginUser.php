<?php
    $err ='';
    $flag = 0;
    $db = get_db();
    if(!isset($_SESSION))
        session_start();
    if(isset($_POST['login']) && isset($_POST['psw']))
    {
        $data = $db->users->findOne(['login'=>$_POST['login']]);
        if($data !== null && password_verify($_POST['psw'], $data['psw']))
        {
            session_regenerate_id();
            $_SESSION['user_id'] = $data['_id'];
            $flag++;
        }else
            $err .= '<h1>INVALID LOGIN OR PASSWORD</h1>';
    }elseif(isset($_POST['logout']))
        session_destroy();