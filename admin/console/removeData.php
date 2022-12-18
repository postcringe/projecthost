<?include_once($_SERVER['DOCUMENT_ROOT']."/admin/modules/main/start.php");
if (isset($_POST["TABLE_ID"]) && isset($_POST["ELEMENT_ID"])) {
    $data = new data($_POST["TABLE_ID"]);
    if ($data->RemoveData($_POST["ELEMENT_ID"])) echo "Удаление элемента с ID = ".$_POST["ELEMENT_ID"]." прошло успешно!";
    else echo "Ошибка сервера. Попробуйте позже.";
}
else {
    die("Ошибка сервера. Попробуйте позже.");
}
?>