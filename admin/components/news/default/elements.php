<? global $arResult; ?>
<div class="news-container">
    <? foreach($arResult as $arItem_key => $arItem) { ?>
        <div class="news-card">
            <h2 class="news-card__name"><a href="<?=$arItem["URL"]?>"><?=$arItem["NAME"]?></a></h2>
            <?if ($arItem['PREVIEW_IMAGE_PATH'] != ""):?>
                <a href="<?=$arItem["URL"]?>"><img src="<?=$arItem['PREVIEW_IMAGE_PATH']?>" alt="<?=$arItem['NAME']?>"></a>
            <?endif;?>
            <p class="news-card__preview"><?=$arItem["PREVIEW_TEXT"]?></p>
        </div>
    <? } ?>
</div>