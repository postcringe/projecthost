<? global $arResult; ?>
<div class="admin-tables-container">
    <table id="admin-table-items">
        <tr>
            <th><input type="checkbox" name="" id="main_checkbox"></th>
            <?foreach($arResult[0] as $arItem_key => $arItem):?>
                <th><?=$arItem_key?></th>
            <?endforeach;?>
        </tr>
        <? foreach($arResult as $arItem_key => $arItem) { ?>
            <tr id="<?=$arItem["ID"]?>">
            <td><input type="checkbox" name="" id="checkbox_<?=$arItem["ID"]?>"></td>
            <?foreach($arItem as $arProp_key => $arProp):?>
                <?$propText = $arProp;?>
                <td id="<?=$arProp_key."_".$arItem["ID"]?>"><?= ($arProp == NULL) ? "NULL" : $propText?></td>
            <?endforeach;?>
            <td>
                <button class="remove-data-button" element-id="<?=$arItem["ID"]?>" table-id="<?=$_GET["TABLE_ID"]?>" title="ID=<?=$arItem["ID"]?>">Удалить</button>
            </td>
            <td>
                <button class="change-data-button" element-id="<?=$arItem["ID"]?>" table-id="<?=$_GET["TABLE_ID"]?>" title="ID=<?=$arItem["ID"]?>">Изменить</button>
            </td>
            </tr>
        <? } ?>
    </table>
    <div class="admin-tables-bottom-buttons">
        <button id="add_item" class="add-data-button" table-id="<?=$_GET["TABLE_ID"]?>">Добавить элемент</button>
        <button id="delete_checked" table-id="<?=$_GET["TABLE_ID"]?>">Удалить выбранные</button>
    </div>
</div>