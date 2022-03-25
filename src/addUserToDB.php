<?php
    $err ='';
    if(isset($_POST['email']) && isset($_POST['login']) && isset($_POST['psw'])&& isset($_POST['psw2']))
    {
        $data = array();
        if($_POST['psw'] === $_POST['psw2'])
        {
            $psw = password_hash($_POST['psw'], PASSWORD_DEFAULT);
            $data = [
                'email' => $_POST['email'],
                'login' => $_POST['login'],
                'psw' => $psw
            ];
            $checkLog = [
                'login' => $_POST['login']
            ];
            $checkEmail =[
                'email' => $_POST['email']
            ];
            $db = get_db();
            $res = $db->users->findOne($checkLog);
            if($res)
                $err .= "<h1>LOGIN IS TAKEN </h1>";
            $res = $db->users->findOne($checkEmail);
            if($res)
                $err .= "<h1>THIS EMAIL IS IN DATABASE</h1>";
            if($err == '')
            {
                $db->users->insertOne($data);
                $err = '<h1> dodano</h1>';
                unsetPost();
            }
        }else
            $err .= '<h1>PASSWORD DOESNT MATCH</h1>';
            
    }