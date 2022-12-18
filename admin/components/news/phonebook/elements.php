<? global $arResult; ?>
<div class="phonebook-container">
    <table>
        <tr>
            <th>ФИО</th>
            <th>Номер</th>
            <th>Адрес</th>
        </tr>
        <? foreach($arResult as $arItem_key => $arItem) { ?>
            <tr>
                <td><?=$arItem["sur_name"]?> <?=mb_substr($arItem["first_name"], 0, 1)."."?> <?=mb_substr($arItem["father"], 0, 1)."."?></td>
                <td><?= ($arItem["phone"] != "") ? $arItem["phone"]: "???";?></td>
                <td><?=($arItem["address"] != "") ? $arItem["address"]: "???";?></td>
            </tr>
        <? } ?>
    </table>
</div>