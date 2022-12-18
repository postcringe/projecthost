<?if (isset($_GET["TABLE_ID"])):?>
    <p>Фильтр:</p>
    <?
    $data = new Data($_GET["TABLE_ID"]);
    $rows = $data->GetData();
    if ($rows):?>
        <form class="admin-tables-filter" method="get">
            <?foreach($rows as $row_key => $row):?>
                <?foreach($row as $prop_key => $prop):?>
                    <input class="admin-tables-filter__input <?=$prop_key?>" type="text" name="<?=$prop_key?>" placeholder="<?=$prop_key?>" value="<?=(isset($_GET[$prop_key]) && $_GET[$prop_key] != "") ? $_GET[$prop_key] : ""?>">
                <?endforeach;?>
                <?break;?>
            <?endforeach;?>
            <input style="display:none;" name="TABLE_ID" value="<?=$_GET["TABLE_ID"]?>" type="text">
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
<?endif;?>