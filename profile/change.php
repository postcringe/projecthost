<?
include_once($_SERVER['DOCUMENT_ROOT']."/admin/modules/main/start.php");
global $USER;
if (!isset($_POST["mail"]) || $_POST["mail"] == ""
    || !isset($_POST["sur_name"]) || $_POST["sur_name"] == ""
    || !isset($_POST["first_name"]) || $_POST["first_name"] == ""
    || !isset($_POST["password_repeat"]) || $_POST["password_repeat"] == ""
    || !isset($_POST["address"]) || $_POST["address"] == ""
    || !isset($_POST["phone"]) || $_POST["phone"] == ""
    || !isset($_POST["password"]) || $_POST["password"] == "") {

        $_SESSION['message'] = "Введите остальные данные";
        header("Location:/profile");
}
else if ($_POST["password"] != $_POST["password_repeat"]) {
    $_SESSION['message'] = "Пароли не совпадают";
    header("Location:/profile");
}
else if (USER::FindInBase($_POST["mail"]) && $USER->GetEmail() != $_POST["mail"]) {
    $_SESSION['message'] = "email уже занят";
    header("Location:/profile");
}
else {
    $data = new Data("users");
    if ($data->UpdateData($USER->GetId(), array(
        "mail" => $_POST["mail"],
        "sur_name" => $_POST["sur_name"],
        "first_name" => $_POST["first_name"],
        "father" => $_POST["father"],
        "address" => $_POST["address"],
        "phone" => $_POST["phone"],
        "password" => md5($_POST["password"])
    ))) {
        $to = ($_POST["mail"] == $USER->GetEmail()) ? $_POST["mail"] : $_POST["mail"] . ", " . $USER->GetEmail();
        $mailStatus = mail($to, "restorania.ru - новые данные для входа", "Данные для входа были изменены.<br>Новые данные для входа :<br>логин - " . $_POST["mail"] . "<br>пароль - " . $_POST["password"]) . "<br><a href='http://restorania.ru/'></a>";
        $message = ($mailStatus) ? "Новые данные установлены. Данные для входа отправлены на ваш email." : "Новые данные установлены.";
        $_SESSION['message'] = $message;
        header("Location:/profile");
    }
    else {
        $_SESSION['message'] = "Ошибка сервера. Попробуйте позже.";
        header("Location:/profile");
    }
}
?>