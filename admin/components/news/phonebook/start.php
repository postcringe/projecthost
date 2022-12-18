<?
global $arParams;
$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
if (isset($_GET["ELEMENT_ID"])) {
    $GLOBALS["ELEMENT_ID"] = $_GET["ELEMENT_ID"];
    $data = new Data ($arParams["TABLE_ID"]);
    $db_row = $data->GetDataRow($GLOBALS["ELEMENT_ID"]);
    if ($db_row) {
        foreach ($db_row as $property_key => $property) {
            $item[$property_key] = $property;
        }
        $GLOBALS["arResult"] = $item;
        include_once(__DIR__."/element.php");
        ?><div class="back-url-wrapper">
            <a href="#" onclick="javascript:history.back(); return false;">Назад</a>
        </div><?
    }
    unset($ELEMENT_ID);
}
else {
    include_once(__DIR__."/filter.php");
    if (isset($_GET["PAGE"])) $GLOBALS["PAGE"] = $_GET["PAGE"];
    else $GLOBALS["PAGE"] = 1;
    if (!isset($arParams["ELEMENTS_ON_PAGE"])) $arParams["ELEMENTS_ON_PAGE"] = 10;
    $data = new Data ($arParams["TABLE_ID"]);
    $offset = $arParams["ELEMENTS_ON_PAGE"] * ($GLOBALS["PAGE"] - 1); 
    $db_page_items = $data->GetDataPage($arParams["ELEMENTS_ON_PAGE"], $offset, $GLOBALS["NEWS_FILTER"]);
    $db_items = $data->GetData($GLOBALS["NEWS_FILTER"]);
    if ($db_page_items && $db_items) {
        foreach ($db_page_items as $arItem_key => $arItem) {
            $item = array();
            foreach ($arItem as $property_key => $property) {
                $item[$property_key] = $property;
            }
            $item["URL"] = $url."?ELEMENT_ID=".$arItem['ID'];
            $GLOBALS["arResult"][] = $item;
        }
        include_once(__DIR__."/elements.php");
        $pages_links_count = count($db_items) / $arParams["ELEMENTS_ON_PAGE"];
        if (count($db_items) % $arParams["ELEMENTS_ON_PAGE"] != 0) $pages_links_count++;
        ?><div class="pagination"><?
        for ($i = 1; $i <= $pages_links_count; $i++) {?>
            <a href="<?=$url."?PAGE=".$i?>" class="<?if($GLOBALS["PAGE"] == $i) echo "current"?>"><?=$i?></a>
        <?}
        ?>
            </div>
        <?
    }
    else {
        echo "Элементы не найдены.";
    }
    unset($PAGE);
}
unset($arResult);
?>