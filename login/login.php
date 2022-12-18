<?php
    include_once($_SERVER['DOCUMENT_ROOT']."/admin/modules/main/start.php");    
    $data = new Data('users');
    $mysql = $data -> GetMysql();
    if(isset($_POST['remember']))
       $user = USER::constructLogin($_POST['email'],$_POST['password'],true);
    else
       $user = USER::constructLogin($_POST['email'],$_POST['password']);
    if($user->GetId() != "NULL"){
        $_SESSION['auth'] = true;
        $_SESSION['ID'] = $user -> GetId(); 
        if ($user -> GetRemember() == true){
            $id = $user -> GetId();
            $key = rand(10000,30000);
            $c1 = setcookie('ID', $id, time()+60*60*24*30, "/"); 
			$c2 = setcookie('key', $key, time()+60*60*24*30, "/"); 
            $mysql -> query("UPDATE users SET cookie = '$key' WHERE `ID` = '$id'");
        }
        unset($GLOBALS["USER"]);
        $GLOBALS["USER"] = $user;
        header("Location:/");
    }
    else{
        $_SESSION['message'] = "Неверный логин или пароль";
        unset($GLOBALS["USER"]);
        $GLOBALS["USER"] = $user;
        header("Location:/login");
    }
?>