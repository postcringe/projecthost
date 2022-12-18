<?// тут пишем логику скрипта авторизации
    class Auth{
        public function SessionExist(string $variable){
            if (!isset($_SESSION[$variable]) || $_SESSION[$variable] == false)
                return false;
            else
                return true;
        }
    
        public function Authorization(string $auth, string $id, string $key, mysqli $mysql){
            if(Auth::SessionExist($auth)){
                $GLOBALS["USER"] = new USER((int)$_SESSION[$id]);
                return true;
            }
            else{
                if(isset($_COOKIE[$id]) and isset($_COOKIE[$key])){
                    $id = $_COOKIE[$id];
                    $key = $_COOKIE[$key];
                    $resulter = $mysql -> query("SELECT * FROM users WHERE ID ='$id' AND cookie = '$key'");
                    if($result = $resulter -> fetch_assoc()){
                        $GLOBALS["USER"] = new USER($id);
                        $_SESSION['auth'] = true;  
                        $_SESSION["ID"] = $id;
                        return true;
                    }
                    else{
                        $GLOBALS["USER"] = new USER(0);
                        return false;
                    }
                }
                else{
                    $GLOBALS["USER"] = new USER(0);
                    return false;
                }
            }
            
        }
    }
    $_SESSION["auth"] = Auth::Authorization('auth','ID','key',$DB_LINK);
    // echo "<pre>";
    // print_r($GLOBALS["USER"]);
    // echo "</pre>";
?>