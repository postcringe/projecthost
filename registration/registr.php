<?
include_once($_SERVER['DOCUMENT_ROOT']."/admin/modules/main/start.php");
if (!isset($_POST["mail"]) || $_POST["mail"] == ""
    || !isset($_POST["sur_name"]) || $_POST["sur_name"] == ""
    || !isset($_POST["first_name"]) || $_POST["first_name"] == ""
    || !isset($_POST["password_repeat"]) || $_POST["password_repeat"] == ""
    || !isset($_POST["address"]) || $_POST["address"] == ""
    || !isset($_POST["phone"]) || $_POST["phone"] == ""
    || !isset($_POST["password"]) || $_POST["password"] == "") {

        $_SESSION['message'] = "Введите остальные данные";
        header("Location:/registration");
}
else if ($_POST["password"] != $_POST["password_repeat"]) {
    $_SESSION['message'] = "Пароли не совпадают";
    header("Location:/registration");
}
else if (USER::FindInBase($_POST["mail"])) {
    $_SESSION['message'] = "email уже занят";
    header("Location:/registration");
}
else {
    $data = new Data("users");
    if ($data->AddData(array(
        "mail" => $_POST["mail"],
        "sur_name" => $_POST["sur_name"],
        "first_name" => $_POST["first_name"],
        "father" => $_POST["father"],
        "address" => $_POST["address"],
        "phone" => $_POST["phone"],
        "password" => md5($_POST["password"])
    ))) {
        $_SESSION['message'] = "Регистрация прошла успешно";
        header("Location:/registration");
    }
    else {
        $_SESSION['message'] = "Ошибка сервера. Попробуйте позже.";
        header("Location:/registration");
    }
}
?>