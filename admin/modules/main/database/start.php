<?
    include_once($_SERVER["DOCUMENT_ROOT"]."/admin/db_info.php");
    global $DB_INFO;
    $GLOBALS["DB_LINK"] = new mysqli($DB_INFO["HOST"], $DB_INFO["LOGIN"], $DB_INFO["PASSWORD"], $DB_INFO["DB"]);
    if ($DB_LINK -> connect_errno) die($DB_LINK -> connect_error);
    include_once(__DIR__."/includes.php");
?>