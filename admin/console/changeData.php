<? include_once($_SERVER['DOCUMENT_ROOT']."/admin/modules/main/start.php");
if (count($_POST) > 2) {
    foreach($_POST as $prop_key => $prop_val) {
        if ($prop_key == "TABLE_ID") $TABLE_ID = $prop_val;
        else if ($prop_key == "ELEMENT_ID") $ELEMENT_ID = $prop_val;
        else {
            $PROPERTIES[$prop_key] = $prop_val;
        }
    }
    if (!isset($TABLE_ID) || !isset($ELEMENT_ID)) die("Ошибка сервера. Попробуйте позже.");
    $data = new data($TABLE_ID);
    if ($data->UpdateData((int)$ELEMENT_ID, $PROPERTIES)) echo "Изменение элемента с ID = ".$ELEMENT_ID." прошло успешно!";
    else {
        echo "Ошибка сервера. Попробуйте позже.";
    }
}
else {
    die("Ошибка сервера. Попробуйте позже.");
}
?>