<?
include_once($_SERVER['DOCUMENT_ROOT']."/admin/modules/main/start.php");
$auth = Auth::SessionExist('auth'); 
if($auth){ 
    session_destroy();  
    $c1 = setcookie('ID', '', time() - 3600, "/");  
    $c2 = setcookie('key', '', time() - 3600, "/");  
} 
header("Location:/login/");
?>