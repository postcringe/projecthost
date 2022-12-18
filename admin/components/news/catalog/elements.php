<? global $arResult; ?>
<div class="news-container">
    <? foreach($arResult as $arItem_key => $arItem) { ?>
        <div class="news-card">
            <?if ($arItem['PREVIEW_PICTURE'] != ""):?>
                <a href="<?=$arItem["URL"]?>"><img src="<?=$arItem['PREVIEW_PICTURE']?>" alt="<?=$arItem['NAME']?>"></a>
            <?endif;?>
            <h2 class="news-card__name"><a href="<?=$arItem["URL"]?>"><?=$arItem["NAME"]?></a></h2>
            <p class="news-card__preview"><?=$arItem["PREVIEW_TEXT"]?></p>
        </div>
    <? } ?>
</div>