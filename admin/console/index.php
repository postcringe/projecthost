<?include_once($_SERVER['DOCUMENT_ROOT']."/admin/modules/main/start.php");?>
<?include_once($_SERVER['DOCUMENT_ROOT']."/admin/components/start.php");?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/admin/css/style.css">
    <script src="/admin/js/jquery-3.6.0.min.js"></script>
    <script src="/admin/js/jquery.cookie.js"></script>
    <script src="/admin/js/script.js"></script>
    <title>Админ-панель</title>
</head>
<body>
    <?
    global $USER;
    if (!$USER->IsAdmin()):?>
    <p style="color:red;">Раздел доступен только администраторам</p>
    <?else:?>
    <nav class="admin-nav">
        <a href="/">Вернуться на сайт</a>
    </nav>
    <p>Список таблиц:</p>
    <div class="admin-work-area-nav">
        <?$tables = Data::GetTables();?>
        <?foreach($tables as $table):?>
            <form method="get">
                <input class="admin-work-area-nav__item <?= ($table["Tables_in_egorbd"] == $_GET["TABLE_ID"] ? "active": "")?>" name="TABLE_ID" type="submit" value="<?=$table["Tables_in_egorbd"]?>">
            </form>
        <?endforeach;?>
    </div>
    <?if (isset($_GET["TABLE_ID"])):?>
    <p>Содержимое таблицы:</p>
    <div class="admin-work-area">
        <?IncludeComponent("admin_tables", "default", array(
            "TABLE_ID" => $_GET["TABLE_ID"],
            "ELEMENTS_ON_PAGE" => 15,
        ));?>
    </div>
    <?endif;?>
    <?endif;?>
</body>
</html>