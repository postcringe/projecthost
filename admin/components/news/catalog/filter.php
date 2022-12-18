    <p>Фильтр:</p>
    <?
    global $arParams;
    $data = new Data($arParams["TABLE_ID"]);
    $rows = $data->GetData();
    if ($rows):?>
        <form class="admin-tables-filter" method="get">
            <?foreach($rows as $row_key => $row):?>
                <?foreach($row as $prop_key => $prop):
                    if (
                        $prop_key=="ID"
                        || $prop_key=="PREVIEW_TEXT"
                        || $prop_key=="PREVIEW_PICTURE"
                        || $prop_key=="DETAIL_TEXT"
                        || $prop_key=="ACTIVE"
                        )continue; ?>
                    <input class="admin-tables-filter__input <?=$prop_key?>" type="text" name="<?=$prop_key?>" placeholder="<?=$prop_key?>" value="<?=(isset($_GET[$prop_key]) && $_GET[$prop_key] != "") ? $_GET[$prop_key] : ""?>">
                <?endforeach;?>
                <?break;?>
            <?endforeach;?>
            <input class="admin-tables-filter__submit" type="submit" value="Найти" name="set_filter">
        </form>
        <?
        $GLOBALS["NEWS_FILTER"] = array();?>
        <?foreach($rows as $row_key => $row):?>
            <?foreach($row as $prop_key => $prop):?>
                <?if (isset($_GET[$prop_key]) && $_GET[$prop_key] != "") {
                    $GLOBALS["NEWS_FILTER"][$prop_key] = "%".$_GET[$prop_key]."%";
                }?>
            <?endforeach;?>
            <?break;?>
        <?endforeach;?>
    <?endif;?>

